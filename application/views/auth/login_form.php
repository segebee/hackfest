<div class="content">
	<!-- BEGIN LOGIN FORM -->
		<span id="scroller"></span>
		<h3 class="form-title">Member Login</h3>
	<div class="row">
	<div class="col-md-9">
		<?php 
		  	echo $message;
			$attributes = array('method' => 'post', 'id' => 'login-form', 'name' => 'login-form', 'class' => 'login-form');
			echo form_open('login', $attributes);
		?>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Phone</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Phone" name="identity"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="forget-password">
			<h4>Forgot your password ?</h4>
			<p>
				no worries, click <a href="javascript:;" id="forget-password">here</a>
				to reset your password.
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
		<?php 
			$attributes = array('method' => 'post', 'class' => 'forget-form');
			echo form_open('forgot_password', $attributes);
		?>
		<h3>Forget Password ?</h3>
		<p>
			Enter your Username below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn green pull-right">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
</div>
	<!-- END FORGOT PASSWORD FORM -->
	<div class="col-md-3">
		<a href="<?php echo base_url('register'); ?>"><img src="<?php echo base_url(); ?>assets/img/signup.png"></a>
	</div>

</div>

</div>

<!-- END LOGIN -->