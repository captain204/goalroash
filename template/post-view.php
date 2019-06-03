<?php include("includes/header.php");?>
		<?php if (isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		} ?>
		<div class="col-md-5 col-md-offset-3">
		<?php if($post):?>
			<div id="post">
				<h4><?php echo $post->title?></h4>
				<p><?php echo $post->author?>|<?php echo formatDate($post->date_posted);?></p>
				<p><img src="<?php echo BASE_URL;?>template/images/<?php echo $post->image?>" class="thumbnail" height="300" width="400"></p>
				<p class="lead"><?php echo nl2br($post->body)?></p>
				<?php if(isset($_SESSION['user'])):?>
				<p><a href="replies.php?id=<?php echo urlFormat($post->id);?>">replies(<?php echo $repliesCount;?>)</a> 
				<?php else:?>
				<p>Please register to reply to this topic</p>
			   <?php endif;?>
			</div>
		<?php else:?>
				<p>No content in this post</p>
		<?php endif;?>
		</div>
		<hr>
		<div class="col-md-5 col-md-offset-3">
			<?php if($postReply):?>
			<?php foreach($postReply as $posts):?>
			<div class="replies">
			 <h4><?php echo $post->title?></h4>
			<p><a href="profile.php"><?php echo $posts->username;?></a></p>
			<p><?php echo nl2br($posts->body);?></p>
			<p><a href="quote.php">quote</a><form method="post" action="likes.php"><input type="hidden" name="like_id" value="<?php echo $posts->id;?>">
			<input type="hidden" name="post_id" value="<?php echo $posts->post_id;?>">
			<button name="submit" class="btn btn-default">like(s)(<?php echo $posts->likes;?>)</button></form></p>
			</div>
			<hr class="bg-primary">
			<?php endforeach?>
			<?php else:?>
				<p>No replies to this topic yet</p>
			<?php endif;?>
		</div>
<?php include("includes/footer.php");?>

