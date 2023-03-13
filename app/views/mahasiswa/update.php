<div class="container">
	<h4 class="mb-3 mt-4"><?= $data['judul']; ?></h4>
	<form action="<?= BASEURL; ?>/mahasiswa/editDataMhs" method="post">
		<div class="row">  
		  <div class="col mb-3">
		    <input type="text" class="form-control" id="id" name="id" value="<?= $data['mhs']['id']; ?>" hidden="hidden">
		  </div>
		</div>
    <div class="row">  
		  <div class="col mb-3">
		    <label for="nama" class="form-label">Nama Lengkap</label>
		    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['mhs']['nama_lengkap']; ?>">
		  </div>
		</div>
		<div class="row">
		  <div class="col mb-3">
		    <label for="npm" class="form-label">NPM</label>
		    <input type="text" class="form-control" id="npm" name="npm" value="<?= $data['mhs']['npm']; ?>">
		  </div>	 
		</div> 
		<div class="row">
		  <div class="col mb-3">
		    <label for="prodi" class="form-label">Prodi</label>
		    <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $data['mhs']['prodi']; ?>">
		  </div>
    </div>
    <div class="row">
    	<div class="col">
    		<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">
    			Kembali
    		</a>
	      <button type="submit" class="btn btn-primary" onclick="return confirm('Edit data ini?')">Edit Data</button>
	    </div>
    </div>
  </form>
</div>