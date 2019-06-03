<?php include("includes/admin-header.php");?>
<div class="row">
		<div class="text-center"><p class="lead">Add new post</p></div>
		<?php if($error):?>
		<?php foreach($error as $errors):?>
		<?php echo $errors;?>
		<?php endforeach;?>
		<?php endif;?>
		<form  method="post" action="add-post.php" enctype="multipart/form-data" class="col-md-5 col-md-offset-4">
			<div class="form-group">
				<label>Title</label>
				<input type="text" id="Title" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="body">Body</label>
				<textarea rows="6" id="Body" cols="80" id="body" name="body" class="form-control">
				</textarea>
				<script>CKEDITOR.replace('body');</script>
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control">
				<?php if ($post): ?>
				<?php foreach ($post as $posts):?>
					<option><?php echo $posts->category;?></option>
				<?php endforeach;?>
				<?php else:?>
				Category not available
				<?php endif;?>
				</select>				
			</div>
			<div class="form-group">
				<label for="author">Author</label>
				<input type="text" id="author" name="author" class="form-control">			
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" id="image" name="img" class="form-control">			
			</div>
			<button name="submit" class="btn btn-primary pull-right"><span>Submit</span></button>
		</form>
	</div>

</div>
