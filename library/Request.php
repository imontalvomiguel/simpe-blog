<?php

class Request {

  protected $requestUrl;

  public function __construct(RequestUrl $requestUrl)
  {
    $this->requestUrl = $requestUrl;
  }

  public function getRequestUrl()
  {
    return $this->requestUrl;
  }

  public function getControllerClassName()
  {
    $requestUrl = $this->getRequestUrl();
    return Inflector::camel($requestUrl->getController()) . 'Controller';
  }

  public function getActionMethodName()
  {
    $requestUrl = $this->getRequestUrl();
    return Inflector::lowerCamel($requestUrl->getAction()) . 'Action';
  }

  public function getControllerFileName()
  {
    return 'controllers/' . $this->getControllerClassName() . '.php';
  }

  public function execute()
  {
    $requestUrl = $this->getRequestUrl();
    $controllerFileName = $this->getControllerFileName();
    $controllerClassName = $this->getControllerClassName();
    $actionMethodName = $this->getActionMethodName();
    $params = $requestUrl->getParams();

    if ( !file_exists($controllerFileName) ) exit('Controller does not exist');

    require $controllerFileName;
    $controller = new $controllerClassName();
    $response = call_user_func_array([$controller, $actionMethodName], $params);

    $this->executeResponse($response);

  }

  public function executeResponse($response)
  {
    if ($response instanceof Response) {
      $response->execute();
    } else {
      exit('Invalid response');
    }
  }

}
