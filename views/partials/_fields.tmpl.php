  <label for="title">Title</label>
  <input type="text" name="title" id="title" value="<?php if ( isset($title) ) echo $title;  ?>"/>
  <label for="body">Body</label>
  <textarea name="body" id="body" rows="8" cols="40" ><?php if ( isset($body) ) echo $body; ?></textarea>
