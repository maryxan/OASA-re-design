<?php  if (count($errors) > 0) : ?>
  <div class="error">
	  <?php foreach ($errors as $error) : ?>
		<div class="alert alert-danger" role="alert">
				<?php echo $error ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
		</div>
  	<?php endforeach ?>
  </div>
<?php  endif ?>