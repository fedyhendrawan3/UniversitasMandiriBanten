<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Mahasiswa</strong> Input
            </div>
            <div class="card-body card-block">
                <form action="/Mahasiswa/Insert" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Induk Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="NimMahasiswa" placeholder="Isi Nomor Induk Mahasiswa" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nama Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NamaMahasiswa" placeholder="Isi Nama Mahasiswa" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Tanggal Lahir Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="email-input" name="TglLahirMahasiswa" placeholder="Isi Tanggal Lahir Mahasiswa" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nomor Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NoTelpMahasiswa" placeholder="Isi Nomor Telp." class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="EmailMahasiswa" placeholder="Isi Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="AlamatMahasiswa" id="textarea-input" rows="9" placeholder="Isi Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Mata Kuliah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="ProdiMahasiswa" id="select" class="form-control">
                                <option>Pilih Program Studi</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
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
