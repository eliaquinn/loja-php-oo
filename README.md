# loja-ecommerce-php-oo

Estrutura PHP orientada a objeto de um website de e-commerce

## Clone
```
git clone https://github.com/eliaquinn/loja-php-oo.git
```

## Configurações
```
composer update
```

## Mapa Estrutural do Projeto

* 📁App/
  * 📁Classes/
    * 📄Redirect.php
    * 📄Uri.php
    * 📄Template.php
  * 📁Controllers/
    * 📁Error
      * 📄ErrorController.php
    * 📁Site
      * 📄ProdutoController.php
      * 📄HomeController.php
    * 📄Controller.php
    * 📄Method.php
    * 📄BaseController.php
  * 📁Functions/
    * 📄functions_twig.php
  * 📁Views
    * 📁Admin
      * 📄admin_home.html
    * 📁Site
      * 📄site_home.html
* 📁public/
  * 📁bootstrap
    * 📄bootstrap.php
  * 📄.htaccess
  * 📄index.php