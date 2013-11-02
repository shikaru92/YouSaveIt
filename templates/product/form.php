<form action="" method="POST" enctype="multipart/form-data">
	<div id="content-wrapper">
		<div class="container_12">
			<div class="bs">
				<?php if (isset($message)): ?>
					<div class="alert alert-error">
						<?php echo $message ?>
					</div>
				<?php endif ?>

				<h3 style="background:#D74142; color:#FFF;"><strong>Create New ProDuct</strong></h3>
				<div class="control-group">
					<label for="name">Product Name</label>
					<input type="text" id="name" name="name" value="<?php echo htmlentities(@$product->name) ?>" placeholder="Enter your product name" />
				</div>
				<div class="control-group">
					<label for="category">Category</label>
					<select name="category_id" id="category">
						<option value="">-- Select Category --</option>
						<?php echo product_category_options(@$product->category_id) ?>
					</select>
				</div>
				<div class="control-group">
					<label for="images">Product Images</label>
					<input type="file" name="images[]" id="images" multiple="multiple" />

					<?php $images = json_decode(@$product->images, true) ?>
					<?php if (!empty($images)): ?>
						<div class="existing-images">
							<?php foreach($images as $image): ?>
								<div class="image">
									<img src="upload/small-<?php echo $image ?>" />
									<input type="hidden" name="existed_images[]" value="<?php echo $image ?>" />

									<a href="javascript:void(0)" class="btn btn-danger btn-mini">Delete</a>
								</div>
							<?php endforeach ?>
						</div>
					<?php endif ?>
				</div>
				
				<div class="control-group">
					<label for="description">Product Description</label>
					<textarea name="description" id="description" cols="30" rows="10" class="ckeditor span10"><?php echo @$product->description ?></textarea>
				</div>

				
				<div class="form-action">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-default">Reset</button>
				</div>
			</div>

			<input type="hidden" name="id" value="<?php echo @$product->id ?>" />
		</div>
	</div>
</form>