# cadastroDeMedicos

* O sistema consiste em uma API REST em Laravel com CRUD de Médicos.
* E também uma página web que lista, altera, exclui, cria a atualiza médicos.

--------------------------------------------------------------------------------------

<h4>Como instalar o projeto</h4>

* Em um terminal digite:
* git clone https://github.com/liliancunhasil/cadastroDeMedicos.git
* Mude o arquivo ".env.example" do projeto para apenas ".env"
* Crie uma base de dados no MySQL com o nome medicos
* No arquivo ".env" do projeto na parte que tem "DB_CONNECTION=mysql" altere as informações com:
* O novo banco de dados: medicos
* Seu usuário do MySQL e sua senha
* Novamente no terminal digite o comando "composer install". Ele vai instalar todos os pacotes PHP necessários.
* Depois digite o comando "php artisan key:generate"
* Após isso, abra a pasta do projeto no seu editor de código de preferência.
* Com o terminal entra na pasta do projeto e digite: "php artisan migrate".
* Depois disso digite: "php artisan serve"
* E entre no endereço local que o terminal aponta
* Entrando nesse endereço, você visualizará o projeto Cadastro de Médicos
* E nele pode inserir um novo médico, listá-los, alterá-los ou excluí-los.

--------------------------------------------------------------------------------------
<h4>Testando API</h4>

* Para testar a API criada você pode usar o programa Postman.
* Para listar todos os médicos: **http://URL_da_aplicacao/api/medicos**, método **GET**
* Mostrar as informações de um médico:  **http://URL_da_aplicacao/api/medico/id**, método **GET**
* Inserir um novo médico: **http://URL_da_aplicacao/api/medico**, com método **POST** e **parâmetros com as informações**
* Atualizar a informação de um médico: **http://URL_da_aplicacao/api/medico/id**, com método **PUT** e **parâmetros com as informações**
* Excluir um médico: **http://URL_da_aplicacao/api/medico/id** e método **DELETE**.

