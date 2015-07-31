<?php

class SingleController {

  public function indexAction()
  {
    return false;
  }

  public function showAction($id)
  {
    $db = new Blog\DB\Database();
    $post = $db->findId( intval($id), 'posts');

    if ($post)
    {
      return $response = new View( 'single', ['post' => $post] );
    } else {
      return false;
    }
  }

}
