<h4>Edit Post</h4>
<form method="post" action="<?= BASE_URL; ?>/admin/update/<?= $id; ?>">
  <?php include 'partials/_fields.tmpl.php'; ?>
  <input type="submit" class="btn--blue" value="Update" />
  <?php if ( isset($status) ) : ?>
    <p><em><?php echo $status; ?></em></p>
  <?php endif; ?>
</form>
<form action="<?= BASE_URL; ?>/admin/delete/<?= $id; ?>" method="post">
    <input type="submit" name="delete" id="delete" class="btn--red" value="Delete" />
</form>
