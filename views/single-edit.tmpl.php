<form method="post" action="<?= BASE_URL; ?>/admin/update/<?= $id; ?>">
  <h4>Create a new post</h4>
  <table>
    <tr>
      <td><label for="title">Title</label></td>
      <td><input type="text" name="title" id="title" value="<?php if ($title) echo $title;  ?>"/></td>
    </tr>
    <tr>
      <td><label for="body">Body</label></td>
      <td><textarea name="body" id="body" rows="8" cols="40" ><?php if ($body) echo $body; ?></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" /></td>
    </tr>
  </table>
  <?php if ( isset($status) ) : ?>
    <p><em><?php echo $status; ?></em></p>
  <?php endif; ?>
</form>
<form action="<?= BASE_URL; ?>/admin/delete/<?= $id; ?>" method="post">
  <table>
    <tr>
      <td>
        <input type="submit" name="delete" id="delete" value="Delete" />
      </td>
    </tr>
  </table>
</form>
