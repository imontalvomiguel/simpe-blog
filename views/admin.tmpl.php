<h3>Crete Post</h3>
<form method="post" action="<?= BASE_URL; ?>/admin/create">
  <?php include 'partials/_fields.tmpl.php'; ?>
  <input type="submit" class="btn--blue"/>
  <?php if ( isset($status) ) : ?>
    <p><em><?= $status; ?></em></p>
  <?php endif; ?>
</form>
