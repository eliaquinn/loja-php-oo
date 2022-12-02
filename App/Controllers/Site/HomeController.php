<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Curso PHP OO | Loja Virtual',
      'content' => 'produto novo e em bom estado'
    ];

    $template = $this->twig->load('site_home.html');

    $template->display($data);
  }
}
