<?php

class AdminController {

  public function indexAction()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      extract( $_POST );

      if ( empty($title) || empty($body) ) {
        $status = 'Title & Body are required.';
      } else {
        $db = new Blog\DB\Database();
        $db->query('INSERT INTO posts (title, body) VALUES (:title, :body)', [':title' => $title, ':body' => $body]);
        $status = 'Posted';
        $title = false;
        $body = false;
      }
    } else {
      $status = false;
      $title = false;
      $body = false;
    }

    return $response = new View('admin', array(
      'status' => $status,
      'title' => $title,
      'body' => $body
    ));

  }

}
