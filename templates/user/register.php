<div id="content-wrapper">
	<div class="container_12">
		<div class="bs">
			<form action="user.php?action=register" id="user-register" method="post">
				<?php if (isset($message)): ?>
					<div class="alert alert-error">
						<?php echo $message ?>
					</div>
				<?php endif ?>

				<div class="control-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" />
				</div>

				<div class="control-group">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" />
				</div>
				
				<div class="control-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" />
				</div>

				<div class="control-group">
					<label for="password">Re-Password</label>
					<input type="password" id="re-password" name="re-password" />
				</div>

				<div class="control-group">
					<label for="password">Address</label>
					<input type="text" id="address" name="address" />
				</div>

				<div class="control-group">
					<label for="password">Phone</label>
					<input type="text" id="text" name="phone" />
				</div>


				<button class="btn btn-primary btn-large">Register</button>

				<?php if (isset($_GET['return'])): ?>
					<input type="hidden" name="return" value="<?php echo $_GET['return'] ?>" />
				<?php endif ?>
			</form>
		</div>
	</div>
</div>
