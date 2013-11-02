<div id="content-wrapper">
	<div class="container_12">
		<div class="bs">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#products" data-toggle="tab">Products</a></li>
				<li><a href="#requests" data-toggle="tab">Requests</a></li>
				<li><a href="#profile" data-toggle="tab">Profile</a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="products">
					<div class="pull-right">
						<a href="product.php?action=add" class="btn btn-primary">
							<i class="icon-plus"></i>
							Add Product
						</a>
					</div>

					<table class="table">
						<thead>
							<tr>
								<th width="40">ID</th>
								<th>Product</th>
								<th width="90"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product): ?>
								<tr>
									<td><?php echo $product->id ?></td>
									<td>

										<h4 class="product-name">
											<a href="product.php?action=detail&id=<?php echo $product->id ?>">
												<?php echo $product->name ?>
											</a>
										</h4>
									
										<!-- <div class="product-desc"><?php echo $product->description ?></div> -->
										<div class="product-images">
											<?php $images = json_decode($product->images, true); ?>
											<?php foreach ($images as $image): ?>
												<img src="upload/small-<?php echo $image ?>" />
											<?php endforeach ?>
										</div>
									</td>
									<td>
										<a href="product.php?action=edit&id=<?php echo $product->id ?>" class="btn btn-default">
											<i class="icon-pencil"></i>
										</a>
										<a href="product.php?action=delete&id=<?php echo $product->id ?>" class="btn btn-danger">
											<i class="icon-remove"></i>
										</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="requests">Requests</div>
				<div class="tab-pane" id="profile">Profile</div>
			</div>
		</div>
	</div>
</div>