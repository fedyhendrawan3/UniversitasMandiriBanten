<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Petugas</title>
</head>
<body>
    <form action="/Petugas/Edit" method="post">
        <input type="text" name="NipPetugas" value="<?= $Petugas->NipPetugas;?>">
		<input type="text" name="NamaPetugas" value="<?= $Petugas->NamaPetugas;?>">
        <input type="text" name="TglLahirPetugas" value="<?= $Petugas->TglLahirPetugas;?>">
        <input type="text" name="NoTelpPetugas" value="<?= $Petugas->NoTelpPetugas;?>">
        <input type="text" name="EmailPetugas" value="<?= $Petugas->EmailPetugas;?>">
        <input type="text" name="AlamatPetugas" value="<?= $Petugas->AlamatPetugas;?>">
        <input type="text" name="BagianPetugas" value="<?= $Petugas->BagianPetugas;?>">
        <input type="hidden" name="IDPetugas" value="<?= $Petugas->IDPetugas;?>">
        <button type="submit">Update</button>
    </form>
</body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Petugas</title>
</head>
<body>
    <form action="/Petugas/Edit" method="post">
        <input type="text" name="NimPetugas" value="<?= $Petugas->NimPetugas;?>">
		<input type="text" name="NamaPetugas" value="<?= $Petugas->NamaPetugas;?>">
        <input type="text" name="TglLahirPetugas" value="<?= $Petugas->TglLahirPetugas;?>">
        <input type="text" name="NoTelpPetugas" value="<?= $Petugas->NoTelpPetugas;?>">
        <input type="text" name="EmailPetugas" value="<?= $Petugas->EmailPetugas;?>">
        <input type="text" name="AlamatPetugas" value="<?= $Petugas->AlamatPetugas;?>">
        <input type="text" name="ProdiPetugas" value="<?= $Petugas->ProdiPetugas;?>">
        <input type="hidden" name="IDPetugas" value="<?= $Petugas->IDPetugas;?>">
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
                <strong>Petugas</strong> Input
            </div>
            <div class="card-body card-block">
                <form action="/Petugas/Edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Induk Petugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="NipPetugas" value="<?= $Petugas->NipPetugas;?>" placeholder="Isi Nomor Induk Petugas" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nama Petugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NamaPetugas" value="<?= $Petugas->NamaPetugas;?>" placeholder="Isi Nama Petugas" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Tanggal Lahir Petugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="email-input" name="TglLahirPetugas" value="<?= $Petugas->TglLahirPetugas;?>" placeholder="Isi Tanggal Lahir Petugas" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nomor Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NoTelpPetugas" value="<?= $Petugas->NoTelpPetugas;?>" placeholder="Isi Nomor Telp." class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="EmailPetugas" value="<?= $Petugas->EmailPetugas;?>" placeholder="Isi Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="textarea" name="AlamatPetugas" value="<?= $Petugas->AlamatPetugas;?>" id="textarea-input" rows="9" placeholder="Isi Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Mata Kuliah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="BagianPetugas" id="select" class="form-control">
                                <option value="<?= $Petugas->BagianPetugas;?>"><?= $Petugas->BagianPetugas;?></option>
                                <option value="Admin">Admin</option>
                                <option value="Accounting">Accounting</option>
                            </select>
                            <input type="hidden" name="IDPetugas" value="<?= $Petugas->IDPetugas;?>">
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
