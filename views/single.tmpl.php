<article>
  <h3><?= htmlspecialchars( $post['title'] ); ?></h3>
  <p><?= htmlspecialchars( $post['body'] ); ?></p>
</article>
<a class="btn btn--s" href="<?= BASE_URL; ?>">Back</a> <a class="btn--blue btn--s" href="<?= BASE_URL; ?>/admin/edit/<?= $post['id'] ?>">Edit</a>
