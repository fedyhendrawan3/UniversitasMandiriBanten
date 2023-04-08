<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Dosen</strong> Input
            </div>
            <div class="card-body card-block">
                <form action="/Dosen/Edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Induk Dosen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="NidDosen" value="<?= $Dosen->NidDosen;?>" placeholder="Isi Nomor Induk Dosen" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nama Dosen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NamaDosen" value="<?= $Dosen->NamaDosen;?>" placeholder="Isi Nama Dosen" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Tanggal Lahir Dosen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="email-input" name="TglLahirDosen" value="<?= $Dosen->TglLahirDosen;?>" placeholder="Isi Tanggal Lahir Dosen" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nomor Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NoTelpDosen" value="<?= $Dosen->NoTelpDosen;?>" placeholder="Isi Nomor Telp." class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="EmailDosen" value="<?= $Dosen->EmailDosen;?>" placeholder="Isi Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="textarea" name="AlamatDosen" value="<?= $Dosen->AlamatDosen;?>" id="textarea-input" rows="9" placeholder="Isi Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Mata Kuliah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="MataKuliahDosen" id="select" class="form-control">
                                <option value="<?= $Dosen->MataKuliahDosen;?>"><?= $Dosen->MataKuliahDosen;?></option>
                                <option value="AIK">AIK</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Pemrogaman">Pemrogaman</option>
                            </select>
                            <input type="hidden" name="IDDosen" value="<?= $Dosen->IDDosen;?>">
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Dosen</title>
</head>
<body>
    <form action="/Dosen/Edit" method="post">
        <input type="text" name="NidDosen" value="<?= $Dosen->NidDosen;?>">
		<input type="text" name="NamaDosen" value="<?= $Dosen->NamaDosen;?>">
        <input type="text" name="TglLahirDosen" value="<?= $Dosen->TglLahirDosen;?>">
        <input type="text" name="NoTelpDosen" value="<?= $Dosen->NoTelpDosen;?>">
        <input type="text" name="EmailDosen" value="<?= $Dosen->EmailDosen;?>">
        <input type="text" name="AlamatDosen" value="<?= $Dosen->AlamatDosen;?>">
        <input type="text" name="MataKuliahDosen" value="<?= $Dosen->MataKuliahDosen;?>">
        <input type="hidden" name="IDDosen" value="<?= $Dosen->IDDosen;?>">
        <button type="submit">Update</button>
    </form>
</body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>