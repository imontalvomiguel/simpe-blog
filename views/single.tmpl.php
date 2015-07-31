<article>
  <h2><?= $post['title']; ?></h2>
  <p><?= $post['body']; ?></p>
</article>
<a href="<?= BASE_URL; ?>/single/edit/<?= $post['id'] ?>"><small>Edit</small></a> | <a href="#"><small>Delete</small></a>
