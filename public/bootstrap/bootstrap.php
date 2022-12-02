<?php

use App\Classes\Template;

$template = new Template;
$twig = $template->init();

/**
 * Chamando o controller digitado da url
 * http:localhost:888/controller
 */

$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();
/**
 * exemplo de herança de metodos vindo da class BaseController para o HomeController
 * $home = new App\Controllers\Site\HomeController;
 * $home->setTwig($twig)
 */
$controller->setTwig($twig);

/**
 * Chamando o metodo digitado na url
 * http:localhost:888/controller/metodo
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);

/**
 * Chamando o controller atraves da classe controller e da classe method
 */
$controller->$method();
