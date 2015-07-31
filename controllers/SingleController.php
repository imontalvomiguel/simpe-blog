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

  public function editAction($id)
  {
    $db = new Blog\DB\Database();
    $post = $db->findId( intval($id), 'posts');
    if ($post)
    {
      return $response = new View( 'single-edit', $post);
    } else {
      return false;
    }
  }

  public function updateAction($id)
  {
    extract( $_POST );

    if ( empty($title) || empty($body) ) {
      $status = 'Title & Body are required.';
    } else {
      $db = new Blog\DB\Database();
      $db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id', [':title' => $title, ':body' => $body, ':id' => $id]);
      $status = 'Updated';
    }

    return $response = new View('single-edit', array(
      'status' => $status,
      'title' => $title,
      'body' => $body,
      'id' => $id
    ));

  }

  public function deleteAction($id)
  {
    $db = new Blog\DB\Database();
    $db->query('DELETE FROM posts WHERE id = :id', [':id' => $id]);
    exit('Post was deleted');
  }

}
