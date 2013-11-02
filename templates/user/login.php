<div id="content-wrapper">
	<div class="container_12">
		<div class="bs">
			<form action="user.php?action=login" id="user-login" method="post">
				<?php if (isset($message)): ?>
					<div class="alert alert-error">
						<?php echo $message ?>
					</div>
				<?php endif ?>

				<div class="control-group">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" />
				</div>
				
				<div class="control-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" />
				</div>
					<div class="checkbox">
					<label>
					<input type="checkbox"> Check me out
					</label>
					</div>
				<button class="btn btn-primary btn-large">Login</button>

				<?php if (isset($_GET['return'])): ?>
					<input type="hidden" name="return" value="<?php echo $_GET['return'] ?>" />
				<?php endif ?>
			</form>
		</div>
	</div>
</div>
