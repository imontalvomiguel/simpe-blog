<?php

class HomeController {

  public function indexAction()
  {
    $db = new Blog\DB\Database();
    $posts = $db->all('posts');
    return $response = new View('home', ['posts' => $posts]);
  }

  public function otherAction($args)
  {
    return ['args' => $args];
  }

}
