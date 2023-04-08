<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <form action="/Mahasiswa/Edit" method="post">
        <input type="text" name="NimMahasiswa" value="<?= $Mahasiswa->NimMahasiswa;?>">
		<input type="text" name="NamaMahasiswa" value="<?= $Mahasiswa->NamaMahasiswa;?>">
        <input type="text" name="TglLahirMahasiswa" value="<?= $Mahasiswa->TglLahirMahasiswa;?>">
        <input type="text" name="NoTelpMahasiswa" value="<?= $Mahasiswa->NoTelpMahasiswa;?>">
        <input type="text" name="EmailMahasiswa" value="<?= $Mahasiswa->EmailMahasiswa;?>">
        <input type="text" name="AlamatMahasiswa" value="<?= $Mahasiswa->AlamatMahasiswa;?>">
        <input type="text" name="ProdiMahasiswa" value="<?= $Mahasiswa->ProdiMahasiswa;?>">
        <input type="hidden" name="IDMahasiswa" value="<?= $Mahasiswa->IDMahasiswa;?>">
        <button type="submit">Update</button>
    </form>
</body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>


<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Mahasiswa</strong> Input
            </div>
            <div class="card-body card-block">
                <form action="/Mahasiswa/Edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Induk Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="NimMahasiswa" value="<?= $Mahasiswa->NimMahasiswa;?>" placeholder="Isi Nomor Induk Mahasiswa" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nama Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NamaMahasiswa" value="<?= $Mahasiswa->NamaMahasiswa;?>" placeholder="Isi Nama Mahasiswa" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Tanggal Lahir Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="email-input" name="TglLahirMahasiswa" value="<?= $Mahasiswa->TglLahirMahasiswa;?>" placeholder="Isi Tanggal Lahir Mahasiswa" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nomor Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NoTelpMahasiswa" value="<?= $Mahasiswa->NoTelpMahasiswa;?>" placeholder="Isi Nomor Telp." class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="EmailMahasiswa" value="<?= $Mahasiswa->EmailMahasiswa;?>" placeholder="Isi Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="textarea" name="AlamatMahasiswa" value="<?= $Mahasiswa->AlamatMahasiswa;?>" id="textarea-input" rows="9" placeholder="Isi Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Mata Kuliah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="ProdiMahasiswa" id="select" class="form-control">
                                <option value="<?= $Mahasiswa->ProdiMahasiswa;?>"><?= $Mahasiswa->ProdiMahasiswa;?></option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                            <input type="hidden" name="IDMahasiswa" value="<?= $Mahasiswa->IDMahasiswa;?>">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

<?php $this->endSection() ?>
