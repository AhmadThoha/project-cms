<div id='hilang'>
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
			Tambah User
		</button>

		<!-- Modal -->
		<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="card">
	<h5 class="card-header">Data Pengguna</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead class="table-light">
				<tr>
					<th>Username</th>
					<th>Nama</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php foreach($user as $aa) { ?>
				<tr>
					<td><?= $aa['username'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td><?= $aa['level'] ?></td>
					<td>
						<a href="<?= 'user/delete_data/', $aa['id_user']; ?>" class="btn btn-sm btn-danger"
							onClick="return confirm('Apakah Anda Yakin Menghapus Konten Ini?')"><i
								class="tf-icons bx bx-trash"></i></a>
						<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
							data-bs-target="#edit<?= $aa['id_user'] ?>">
							<i class="tf-icons bx bx-edit"></i>
						</button>
						<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<form action="<?= base_url('admin/user/update') ?>" method="post">
									<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel1">Edit Nama User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" value="<?= $aa['nama'] ?>"
														name="nama" />
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Username</label>
													<input type="text" class="form-control"
														value="<?= $aa['username'] ?>" name="username" readonly />
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-outline-secondary"
												data-bs-dismiss="modal">
												Close
											</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
								</form>
							</div>
						</div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
