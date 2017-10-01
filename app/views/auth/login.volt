<h3>
	login
</h3>
<?php
	if ($this->session->has('username')) {
		return $this->response->redirect('');
	}
?>
{{ form('auth/loginproses' , 'rule' : 'form') }}

<div class="col-sm-4 ">
	<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>
	<div class="btn-group">
		<button class="btn btn-success" type="submit">Submit</button>
		<button class="btn btn-danger" type="reset">Reset</button>
	</div>
</div>