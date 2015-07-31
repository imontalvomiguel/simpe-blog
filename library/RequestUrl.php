<?php

class RequestUrl {

  protected $url;
  protected $controller;
  protected $action;
  protected $params = array();
  protected $defaultController = 'home';
  protected $defaultAction = 'index';

  public function __construct($url)
  {
    $this->url = $url;

    $segments = explode('/', $this->getUrl());
    $this->resolveController($segments);
    $this->resolveAction($segments);
    $this->resolveParams($segments);
  }

  public function resolveController(&$segments)
  {
    $controller = array_shift($segments);
    $this->controller = !empty($controller) ? $controller : $this->defaultController;
  }

  public function resolveAction(&$segments)
  {
    $action = array_shift($segments);
    $this->action = !empty($action) ? $action : $this->defaultAction;
  }

  public function resolveParams($segments)
  {
    $this->params = $segments;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function getController()
  {
    return $this->controller;
  }

  public function getAction()
  {
    return $this->action;
  }

  public function getParams()
  {
    return $this->params;
  }

}
