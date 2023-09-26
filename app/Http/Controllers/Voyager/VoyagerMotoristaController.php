<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Carbon\Carbon;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;

class VoyagerMotoristaController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    use BreadRelationshipParser;


      //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      Browse our Data Type (B)READ
    //
    //****************************************

    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'contacto' => 'required|string|max:255',
            'morada' => 'required|string|max:255',
            'documento' => 'required|string|max:255',
            'nascimento' => 'required|date',
        ]);
    
        $nascimento = Carbon::parse($request->input('nascimento'));
        $idade = $nascimento->age;
    
        if ($idade < 18 || $idade > 50) {
            return back()->with([
                'message'    => 'A idade do motorista está fora dos padrões de contratação',
                'alert-type' => 'error',
            ]);
        }
        
        // return $request;
        $slug = $this->getSlug($request);
        
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // return $dataType->addRows;
        
        // Check permission
        $this->authorize('add', app($dataType->model_name));
        
        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

        $data->user_id = auth()->id();
        $data->update();

        event(new BreadDataAdded($dataType, $data));

        if (!$request->has('_tagging')) {
            if (auth()->user()->can('browse', $data)) {
                $redirect = redirect()->route("voyager.{$dataType->slug}.index");
            } else {
                $redirect = redirect()->back();
            }

            return $redirect->with([
                'message'    => __('voyager::generic.successfully_added_new')." {$dataType->getTranslatedAttribute('display_name_singular')}",
                'alert-type' => 'success',
            ]);
        } else {
            return response()->json(['success' => true, 'data' => $data]);
        }
    }

}

