<div class="container">
		<div class="card">
			<div class="card-header">Edit Data</div>
			<div class="card-body">
			<form method="post" action="<?= OOP\App\Core\Router::url("update")?>">
				<input type="hidden" name="id" id="" value="<?php echo $data->id; ?>"/>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" value="" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" value="<?= $data->password; ?>" class="form-control" id="password" name="password">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>