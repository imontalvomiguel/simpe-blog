<article>
  <h2><?= htmlspecialchars( $post['title'] ); ?></h2>
  <p><?= htmlspecialchars( $post['body'] ); ?></p>
</article>
<a href="<?= BASE_URL; ?>/single/edit/<?= $post['id'] ?>"><small>Edit</small></a>
