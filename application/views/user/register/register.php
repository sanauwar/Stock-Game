<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Register</h1>
			</div>
			<?php
			$attributes = array('id' => 'create-user');
			echo form_open('user/register', $attributes) ?>
				<div class="form-group">
					<label for="fullname">Full Name</label>
					<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter a fullname">
					<p class="help-block">Letters only</p>
				</div>

				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter a mobile">
					<p class="help-block">10 digit numbers only</p>
				</div>

				<div class="form-group">
					<label for="school">School / College / Institution</label>
					<input type="text" class="form-control" id="school" name="school" placeholder="Enter a school">
					<p class="help-block">Enter School / College / Institution name</p>
				</div>


				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
					<p class="help-block">At least 4 characters, letters or numbers only</p>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
					<p class="help-block">A valid email address</p>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
					<p class="help-block">At least 5 characters</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class="help-block">Must match your password</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Register">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->