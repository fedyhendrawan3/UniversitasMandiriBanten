<?php $this->extend('Template/index') ?>

<?php $this->section('page-content') ?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Data Dosen</h2>
            <div class="table-responsive table--no-card m-b-40">
            <a href="<?php echo base_url('Dosen/Input/') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <th>NID</th>
                        <th>NAMA</th>
                        <th>TGL LAHIR</th>
                        <th>NO TELP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>MATA KULIAH</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php foreach($Dosen as $key => $Read) : ?>
                            <tr>
                                <td><?php echo $Read['NidDosen'] ?></td>
                                <td><?php echo $Read['NamaDosen'] ?></td>
                                <td><?php echo $Read['TglLahirDosen'] ?></td>
                                <td><?php echo $Read['NoTelpDosen'] ?></td>
                                <td><?php echo $Read['EmailDosen'] ?></td>
                                <td><?php echo $Read['AlamatDosen'] ?></td>
                                <td><?php echo $Read['MataKuliahDosen'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('Dosen/Update/'.$Read['IDDosen']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="<?php echo base_url('Dosen/Delete/'.$Read['IDDosen']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>
               