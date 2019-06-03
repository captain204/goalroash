<?php include("includes/header.php");?>
	   <div class="col-md-5 col-md-offset-3">
	  		<?php if($post):?>
	  		<?php foreach($post as $posts):?>		
				<div id="post">
					<h4><a href="<?php echo BASE_URL;?>post.php?id=<?php echo urlFormat($posts->id);?>"><?php echo $posts->title;?></a></h4>
					<p><?php echo $posts->author;?> |<?php echo formatDate($posts->date_posted);?></p>
					<p class="lead"><?php echo shortenText($posts->body);?><a href="post.php?id=<?php echo $posts->id?>">...readmore</a> </p>
				</div>
			<?php endforeach;?>
			<?php else:?>
				<p>No topics to display</p>
			<?php endif;?>
			  	<a href="index.php?page=<?php echo $next;?>"><button class="btn btn-primary pull-right">Next</button></a>
			 <?php if($previous):?>
			  	<a href="index.php?page=<?php echo $previous;?>"><button class="btn btn-primary pull-left">Previous</button></a>
			  <?php endif;?>	
		</div>
<?php include("includes/footer.php");?>





