<div class="container p-4">
	<div class="row">
		<div class="col">
			<h4>Daftar Mahasiswa</h4>
				<div class="row">
					<div class="col">
						<?php Flasher::flash(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary modalTambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
						  Tambah Data Mahasiswa
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
							<div class="input-group mt-3">
							  <input type="text" class="form-control" placeholder="Cari Mahasiswa" aria-label="Cari Mahasiswa" aria-describedby="button-addon2" name="keyword">
							  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<ul class="list-group mt-3">
							<?php foreach ($data['mhs'] as $mahasiswa) : ?>
						  	<li class="list-group-item d-flex justify-content-between align-items-center">
						  		<?= $mahasiswa['nama_lengkap']; ?>
						  		<div class="aksi">
						  			<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="badge bg-primary">Detail</a>
						  			<a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mahasiswa['id']; ?>" class="badge bg-warning">Edit</a>
						  			<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mahasiswa['id']; ?>" class="badge bg-danger"
						  			onclick="return confirm('Hapus data?')">Hapus</a>		
						  		</div>
						  	</li>
						  <?php endforeach; ?>
						</ul>
					</div>
				</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabelData">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
	      <div class="modal-body">  
				  <div class="mb-3">
				    <label for="nama" class="form-label">Nama Lengkap</label>
				    <input type="text" class="form-control" id="nama" name="nama">
				  </div>
				  <div class="mb-3">
				    <label for="npm" class="form-label">NPM</label>
				    <input type="text" class="form-control" id="npm" name="npm">
				  </div>	  
				  <div class="mb-3">
				    <label for="prodi" class="form-label">Prodi</label>
				    <input type="text" class="form-control" id="prodi" name="prodi">
				  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
      </form>
    </div>
  </div>
</div>