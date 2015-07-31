<?php

class View extends Response {

  protected $template;
  protected $vars;

  public function __construct($template, $vars = array())
  {
    $this->template = $template;
    $this->vars = $vars;
  }

  public function getTemplate()
  {
    return $this->template;
  }

  public function getVars()
  {
    return $this->vars;
  }

  public function getTemplateFileName()
  {
    $template = $this->getTemplate();
    return "views/$template.tmpl.php";
  }

  public function getLayout()
  {
    return 'views/layout.tmpl.php';
  }

  public function execute()
  {
    $templateFileName = $this->getTemplateFileName();
    $vars = $this->getVars();
    $layout = $this->getLayout();

    call_user_func(function() use ($templateFileName, $vars, $layout) {
      extract($vars);
      ob_start();
      include $templateFileName;
      $content = ob_get_clean();
      include $layout;
    });
  }

}
