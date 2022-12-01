<div class="container">
		<div class="card">
			<div class="card-header">Create Siswa</div>
			<div class="card-body">
			<form method="post" action="<?= OOP\App\Core\Router::url("save")?>">
				<div class="form-group">
					<label for="nama">Username</label>
					<input type="text" class="form-control" id="nama" name="username">
				</div>

                <div class="form-group">
					<label for="nama">Password</label>
					<input type="text" class="form-control" id="nama" name="password">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>