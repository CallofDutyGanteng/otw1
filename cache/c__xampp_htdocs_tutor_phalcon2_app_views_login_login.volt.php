<h3>
	login
</h3>

<?= $this->tag->form(['login/loginproses', 'rule' => 'form']) ?>

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