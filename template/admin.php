<?php include("includes/admin-header.php");?>
<div>
	<h4 class="Well text-center"> All topics </h4>
	<?php if($post):?>
	<table class="table table-striped">
		<tr>
			<th>post id</th>
			<th>title</th>
			<th>category</th>
			<th>author</th>
			<th>date</th>
		</tr>
		<?php foreach($post as $posts):?>
		<tr> 
			<td><?php echo $posts->id;?></td>
			<td><?php echo $posts->title;?></td>
			<td><?php echo $posts->category;?></td>
			<td><?php echo $posts->author;?></td>
			<td><?php echo $posts->date_posted;?></td>
			<td><a href="edit.php?id=<?php echo urlFormat($posts->id);?>"><button class="btn btn-primary">Edit</button></a></td>
			<td><a href="delete.php?id=<?php echo urlFormat($posts->id);?>"><button class="btn btn-primary">Delete</button></a></td>
		</tr>
	    <?php endforeach;?>
	</table>
	<?php else:?>
		<p>No more post</p>
	<?php endif;?>
		<a href="admin.php?page=<?php echo $next;?>"><button class="btn btn-primary pull-right">Next</button></a>
		<a href="admin.php?page=<?php echo $previous;?>"><button class="btn btn-primary pull-right">Previous</button></a>	

</div>
<?php include("includes/footer.php");?>