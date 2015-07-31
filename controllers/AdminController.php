<?php

class AdminController {

  public function indexAction()
  {

    return $response = new View('admin');

  }

  public function createAction()
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

    Inflector::redirect(BASE_URL);

  }

  public function editAction($id)
  {
    $db = new Blog\DB\Database();
    $post = $db->find( 'id', intval($id), 'posts' );
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
      return $response = new View('single-edit', array(
        'status' => $status,
        'title' => $title,
        'body' => $body,
        'id' => $id
      ));
    } else {
      $db = new Blog\DB\Database();
      $db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id', [':title' => $title, ':body' => $body, ':id' => $id]);
      Inflector::redirect(BASE_URL . '/single/show/' . $id);
    }

  }

  public function deleteAction($id)
  {
    $db = new Blog\DB\Database();
    $db->query('DELETE FROM posts WHERE id = :id', [':id' => $id]);
    Inflector::redirect(BASE_URL);
  }

}
