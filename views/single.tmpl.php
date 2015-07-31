<article>
  <h2><?= htmlspecialchars( $post['title'] ); ?></h2>
  <p><?= htmlspecialchars( $post['body'] ); ?></p>
</article>
<a href="<?= BASE_URL; ?>"><small>&#8592; Back</small></a> | <a href="<?= BASE_URL; ?>/admin/edit/<?= $post['id'] ?>"><small>Edit &#9998;</small></a>
