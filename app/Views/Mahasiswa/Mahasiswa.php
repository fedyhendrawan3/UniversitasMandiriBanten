<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Data Mahasiswa</h2>
            <div class="table-responsive table--no-card m-b-40">
            <a href="<?php echo base_url('Mahasiswa/Input/') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>TGL LAHIR</th>
                        <th>NO TELP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>PRODI</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php foreach($Mahasiswa as $key => $Read) : ?>
                            <tr>
                                <td><?php echo $Read['NimMahasiswa'] ?></td>
                                <td><?php echo $Read['NamaMahasiswa'] ?></td>
                                <td><?php echo $Read['TglLahirMahasiswa'] ?></td>
                                <td><?php echo $Read['NoTelpMahasiswa'] ?></td>
                                <td><?php echo $Read['EmailMahasiswa'] ?></td>
                                <td><?php echo $Read['AlamatMahasiswa'] ?></td>
                                <td><?php echo $Read['ProdiMahasiswa'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('Mahasiswa/Update/'.$Read['IDMahasiswa']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="<?php echo base_url('Mahasiswa/Delete/'.$Read['IDMahasiswa']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $this->endSection() ?>