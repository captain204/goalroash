<?php include("includes/header.php");?>
		<div class="col-md-5 col-md-offset-3">
		<?php echo $_SESSION['id'];?>
			<div id="post">
				<h4><?php echo $post->title?></h4>
				<p><?php echo $post->author?>|<?php echo $post->date_posted?></p>
				<p class="lead"><?php echo $post->body?></p>
			</div>
		</div>
		<hr>
		<div class="col-md-5 col-md-offset-3">
			<form method="post"	action="replies-process.php?id=<?php echo $post->id;?>" >
				<div class="form-group">
					<label>Reply</label>
					<textarea name="body" id="Reply" cols="30" rows="20" class="form-control" placeholder="Enter Your comment here"></textarea>
					<script>CKEDITOR.replace('body');</script>
					<input type="hidden" name="id" value="<?php echo $post->id;?>">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['id'];?>">
				</div>
				<button name="submit" class="btn btn-primary pull-right">Submit</button>
			</form>
		</div>
<?php include("includes/footer.php");?>