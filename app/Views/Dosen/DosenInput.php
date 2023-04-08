<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Dosen</strong> Input
            </div>
            <div class="card-body card-block">
                <form action="/Dosen/Insert" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Induk Dosen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="NidDosen" placeholder="Isi Nomor Induk Dosen" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nama Dosen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NamaDosen" placeholder="Isi Nama Dosen" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Tanggal Lahir Dosen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="email-input" name="TglLahirDosen" placeholder="Isi Tanggal Lahir Dosen" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Nomor Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="NoTelpDosen" placeholder="Isi Nomor Telp." class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="EmailDosen" placeholder="Isi Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="AlamatDosen" id="textarea-input" rows="9" placeholder="Isi Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Mata Kuliah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="MataKuliahDosen" id="select" class="form-control">
                                <option>Pilih Mata Kuliah</option>
                                <option value="AIK">AIK</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Pemrogaman">Pemrogaman</option>
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
