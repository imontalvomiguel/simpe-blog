<?php if ( !empty($posts) ) : foreach ($posts as $post) :?>
  <article>
    <h3><a href="<?= BASE_URL ?>/single/show/<?= $post['id']; ?>"><?= htmlspecialchars( $post['title'] ); ?></a></h3>
    <p><?= htmlspecialchars( $post['body'] ); ?></p>
  </article>
<?php endforeach; else : ?>
  <p>No posts found.</p>
<?php endif; ?>
