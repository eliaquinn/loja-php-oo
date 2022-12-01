<?php

namespace App\Controllers;

use App\Classes\Uri;

class Method
{
  private $uri;

  public function __construct()
  {
    $this->uri = new Uri;
  }

  private function getMethod()
  {
    if (!$this->uri->emptyUri()) {
      $explodeUri = array_filter(explode('/', $this->uri->getUri()));

      return (!isset($explodeUri[2])) ?: $explodeUri[2];
    }
  }

  public function method($object)
  {
    if (method_exists($object, $this->getMethod())) {
      return $this->getMethod();
    }

    return DEFAULT_METHOD;
  }
}

//proxima aula
//https://www.youtube.com/watch?v=z73m6TEki7s&list=PLyugqHiq-SKdSIn5SRyubTQJVSYUb0CVk&index=10