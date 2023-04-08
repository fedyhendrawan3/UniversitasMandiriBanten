<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Data Petugas</h2>
            <div class="table-responsive table--no-card m-b-40">
            <a href="<?php echo base_url('Petugas/Input/') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                            <th>NIP</th>
                            <th>NAMA</th>
                            <th>TGL LAHIR</th>
                            <th>NO TELP</th>
                            <th>EMAIL</th>
                            <th>ALAMAT</th>
                            <th>BAGIAN</th>
                            <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php foreach($Petugas as $key => $Read) : ?>
                            <tr>
                                <td><?php echo $Read['NipPetugas'] ?></td>
                                <td><?php echo $Read['NamaPetugas'] ?></td>
                                <td><?php echo $Read['TglLahirPetugas'] ?></td>
                                <td><?php echo $Read['NoTelpPetugas'] ?></td>
                                <td><?php echo $Read['EmailPetugas'] ?></td>
                                <td><?php echo $Read['AlamatPetugas'] ?></td>
                                <td><?php echo $Read['BagianPetugas'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('Petugas/Update/'.$Read['IDPetugas']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="<?php echo base_url('Petugas/Delete/'.$Read['IDPetugas']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $this->endSection() ?>

