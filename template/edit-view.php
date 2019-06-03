<?php include("includes/admin-header.php");?>
<div class="row">
		<div class="text-center"><p class="lead">Add new post</p></div>
		<?php if ($post_edit):?>
		<?php foreach ($post_edit as $posts):?>
		<form  method="post" action="edit-process.php" class="col-md-5 col-md-offset-4">
			<div class="form-group">
				<label>Title</label>
				<input type="text" id="Title" name="title" placeholder="Enter post title" value="<?php echo $posts->title;?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Body</label>
				<label for="body">Post Body</label>
				<textarea name="body" rows="10" cols="80" id="body" class="form-control" placeholder="Post body">
					<?php echo $posts->body;?>
				</textarea>
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
				<label>Author</label>
				<input type="text" id="Author" name="author" value="<?php echo $posts->author;?>" class="form-control">			
			</div>
			<?php endforeach;?>
			<?php else:?>
				The page is not working
			<?php endif;?>
			<div class="form-group">

				<input type="hidden"  name="id" value="<?php echo $posts->id;?>" class="form-control">			
			</div>
			
			<button name="submit" class="btn btn-primary"><span>Submit</span></button>
			<button name="submit" class="btn btn-danger"><span>Delete</span></button>
		</form>
		<?php echo $posts->id;?>
	</div>
</div>
<?php include("includes/footer.php");?>