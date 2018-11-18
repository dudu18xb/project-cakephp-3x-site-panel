# Projeto padrão para inicialização de outros projetos.

### Requisitos:
* Instalado o Docker em seu pc ou mac;

### Configuração:
* A pasta raiz está em projeto;
* A Configuração de banco de dados está em docker-compose.yml, por padrão o Usuário, Senha e Database está como project;
* localhost/ é o acesso ao site
* localhost/admin é o acesso ao painel
* No terminal digite "Docker-compose up -d" o docker irá criar um containers e imagens para este projeto.
* Em seguida entra na máquina do docker para instalar a configuração do CakePHP 3.x com o seguinte comando "docker exec -it project projectsite_php_1"
* Em seguida digite "composer install" com isso o cakephp será instalado;
* No direito projeto/config/ você realiza a configuração de banco de dados você pode realizar a configuração pelo .env ou pelo app.php
> host => db | username => project | password => project | database => project 

* No diretório configuração copie a pasta maiconpinto e cola no diretório projeto/vendor
* No diretorio de configuração exite um sql de banco de dados importe essa SQL acessando o phpmyadmin "localhost:8080"
* No diretório de configuração copie o boostrap.php e cola ele em projeto/config/

> o login: admin e senha: 123456

no diretório src/Controller/admin será todas as actions responsáveis pelo painel.
no diretório src/Controller será todas as actions responsáveis pelo site.

no diretório src/Template/admin será todas as views responsáveis pelo painel.
no diretório src/Template/ será todas as views responsáveis pelo site.


A configuração de pastas e autenticação de usuário:
>Eduardo Rocha


Painel padrão utilizado [cakephp3.5_adminLTE_integration de aditya234](https://github.com/aditya234/cakephp3.5_adminLTE_integration)

Sinta-se livre se deseja implementar algo a mais neste projeto do cakephp 3.x.


