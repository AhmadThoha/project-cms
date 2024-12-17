<div id="hilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah konten
		</button>

		<!-- Modal -->
		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<form action="<?= base_url("admin/konten/simpan") ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah konten</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" class="form-control" placeholder="Judul Konten" name="judul" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php ;
                                        foreach ($kategori as $aa) { ?>
										<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
										<?php ;
                                        } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">keterangan</label>
									<textarea name="keterangan" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">foto</label>
									<input type="file" name="foto" class="form-control" accept="image/png,image/jpeg">
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-primary">SIMPAN</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<h5 class="card-header">Kategori Konten</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>no</th>
					<th>judul</th>
					<th>kategori konten</th>
					<th>tanggal</th>
					<th>kreator</th>
					<th>foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php $no = 1;
                foreach ($konten as $aa) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
							<span class="bx bxs-photo-album"></span>lihat foto
						</a>
					</td>
					<td>
						<a href="<?= 'konten/delete_data/', $aa['foto']; ?>" class="btn btn-sm btn-danger"
							onClick="return confirm('Apakah Anda Yakin Menghapus Konten Ini?')"><i
								class="tf-icons bx bx-trash"></i></a>

						<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
							data-bs-target="#konten<?= $no; ?>"><span class="tf-icons bx bx-edit"></span>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <form action="<?= base_url("admin/konten/update") ?>" method="post" enctype='multipart/form-data'>

                                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label">judul</label>
                                                        <input type="text" class="form-control" value="<?= $aa['judul'] ?>" name="judul" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label">Kategori</label>
                                                        <select name="id_kategori" class="form-control">
                                                            <?php ;
                                                            foreach ($kategori as $uu) { ?>
                                                                <option
                                                                <?php if($uu['id_kategori']==$aa['id_kategori']){echo"selectrd"; } ?>
                                                                value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                                                            <?php ; } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label">keterangan</label>
                                                        <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label">foto</label>
                                                        <input type="file" name="foto" class="form-control" accept="image/png,image/jpeg">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>
