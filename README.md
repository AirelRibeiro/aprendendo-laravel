
# Aprendendo Laravel

Repositório com código de aplicação multifuncional, visando construir diferentes aprendizados relacionados ao uso de Laravel.


## Detalhes de implementação

 - A primeira parte envolveu instalar [PHP](https://www.php.net/); 
    - **O que é PHP:** O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML, *[fonte](https://www.php.net/manual/pt_BR/intro-whatis.php)*; 
    - Mais informações [aqui](https://www.hostinger.com.br/tutoriais/o-que-e-php-guia-basico).
 - Para iniciar um projeto com Laravel, a documentação indica também a instalação do [Compose](https://getcomposer.org/);
 - A partir disso foram seguidos os passos da [documentação](https://laravel.com/docs/9.x).

 
<details>
  <summary><h2>Entendendo Laravel e desenvolvendo o primeiro projeto</h2></summary>

Primeiro foi criado o projeto Laravel:

```
composer create-project laravel/laravel app
cd app
```

Ao fazer essa criação com o compose, já é montada uma página inicial, então foi possível abrir a aplicação:

```
php artisan serve
```
  
Foi feita a configuração do .env, para estabelecer a conexão com o banco de dados:
  
![image](https://user-images.githubusercontent.com/98190806/202283411-4bb80fb9-95b3-4cad-ae1b-f36b2427ea45.png)

Na documentação há uma parte detalhando a configuração e o cuidado com as variáveis de ambiente, [aqui](https://laravel.com/docs/9.x/configuration); usei os mesmos conceitos que uso ao construir APIs NodeJS.

A ORM do Laravel é o Eloquent, ainda não experimentei o bastante para ter certeza, mas aparentemente ela não é como o Sequelize para o Node no que tange a criação de bancos de dados, precisei criar o banco no MySQL, para então ser acessível  ao Laravel.

Isso a parte, a estrutura de CRUD (Create, Read, Update e Delet) com Laravel é muito simples de implementar.

O Laravel possui uma estrutura MVC (Model-View-Controller):

**Model:** É responsável por todos os recursos do App (consultas ao banco, validações et cetera. Ele não sabe **quando** será executado, apenas tem tudo o necessário para realizar a execução;

**Controller:** Ele é o mediador da aplicação, o controller sabe quem e quando chamar para realizar as atividades da aplicação;

**View:** Essa é a camada responsável por exibir dados para o usuário, seja em páginas HTML, Json et cetera. Tal qual o Model, a camada View não sabe quando vai precisar executar suas funções, está apenas pronta para executá-las, quem controla quando é a camada de controller.


![image](https://user-images.githubusercontent.com/98190806/203075104-0c0921b6-4ca1-424d-8f6d-61bcd8dd59ab.png)

  
</details>

 
