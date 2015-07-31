<?php if ( !empty($posts) ) : foreach ($posts as $post) :?>
  <article>
    <h2><a href="<?= BASE_URL ?>/single/show/<?= $post['id']; ?>"><?= $post['title']; ?></a></h2>
    <p><?= $post['body']; ?></p>
  </article>
<?php endforeach; else : ?>
  <p>No posts found.</p>
<?php endif; ?>
