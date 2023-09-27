para ter o sistema rodando em seu computador, siga os passos abaixo:
  * baixe o código para sua máquina;
  * descompacte o arquivo;
  * navegue para dentro da pasta descompactada e abra o aplicativo no seu editor de texto preferido;
  * altere o nome do arquivo ".env.example" para ".env"
  * dentro do arquivo alterado ".env" deve alterar o nome da base de dados e atribuir o nome de prefência. exemplo: DB_DATABASE=nomebd;
  * deve em seguida, criar a base de dados com o nome usado no exemplo da linha anterior "nomebd" no mySql;
  * após ter seguido todos os passos anteriores rode no terminar do projecto os comandos artisan:
              primeiro comando: php artisan generate key
              segundo comando: php artisan migrate
              terceiro comando: php artisan seed:db
              quarto comando: php artisan serve

agora pode testar o sistema.
o acesso de administracção-> email:macie@gmail.com, senha:12345678