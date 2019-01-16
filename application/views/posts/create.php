<br><br><br>
<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea> 
  </div>
  <div class="form-group">
  	<label>Upload Image</label><br>
  	<input type="file" name="postimage" size="20">
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>