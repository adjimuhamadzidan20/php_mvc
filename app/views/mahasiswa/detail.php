<div class="container mt-5">
	<h4 class="mb-3"><?= $data['judul']; ?></h4>
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?= $data['mhs']['nama_lengkap']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['npm']; ?></h6>
	    <p class="card-text"><?= $data['mhs']['prodi']; ?></p>
	    <a href="<?= BASEURL; ?>/mahasiswa" class="badge bg-primary">Kembali</a>
	  </div>
	</div>
</div>