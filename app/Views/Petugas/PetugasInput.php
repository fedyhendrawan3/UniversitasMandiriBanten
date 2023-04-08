<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Petugas</strong> Input
            </div>
            <div class="card-body card-block">
                <form action="/Petugas/Insert" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Induk Petugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="NipPetugas" placeholder="Isi Nomor Induk Petugas" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nama Petugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NamaPetugas" placeholder="Isi Nama Petugas" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Tanggal Lahir Petugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="email-input" name="TglLahirPetugas" placeholder="Isi Tanggal Lahir Petugas" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nomor Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NoTelpPetugas" placeholder="Isi Nomor Telp." class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="EmailPetugas" placeholder="Isi Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="AlamatPetugas" id="textarea-input" rows="9" placeholder="Isi Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Bagian</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="BagianPetugas" id="select" class="form-control">
                                <option>Pilih Bagiani</option>
                                <option value="Admin">Admin</option>
                                <option value="Accounting">Accounting</option>
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
