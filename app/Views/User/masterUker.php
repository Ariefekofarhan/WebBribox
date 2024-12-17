<?= $this->extend('templates/index'); ?>

<?= $this->section('pagecontent'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Master Uker</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Default Example <small>Users</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <p class="text-muted font-13 m-b-30">
                                                Daftar nama uker Bribox
                                            </p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#createModal">Add <iconify-icon icon="ic:baseline-plus"
                                                    width="20"></iconify-icon></button>
                                        </div>
                                        <!-- Modal Add Gudang -->
                                        <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                                            aria-labelledby="createModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="createModalLabel">Tambah Gudang</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="" method="POST">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="id_kanwil">Wilayah (Kanwil):</label>
                                                                <select name="id_kanwil" id="id_kanwil"
                                                                    class="form-control" required>
                                                                    <option value="">Pilih Wilayah</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_gudang">Nama Gudang:</label>
                                                                <input type="text" name="nama_gudang"
                                                                    class="form-control"
                                                                    placeholder="Masukkan nama gudang" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat_gudang">Alamat Gudang:</label>
                                                                <textarea name="alamat_gudang" class="form-control"
                                                                    rows="4" placeholder="Masukkan alamat gudang"
                                                                    required></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="PIC">PIC:</label>
                                                                <input type="text" name="PIC" class="form-control"
                                                                    placeholder="Masukkan nama PIC" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table id="datatable" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kanwil</th>
                                                    <th>Kode Kanca</th>
                                                    <th>Kanca</th>
                                                    <th>Kode Unit</th>
                                                    <th>Unit</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($uker as $data): ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $data->nama_kanwil ?></td>
                                                        <td><?= $data->kode_kanca ?></td>
                                                        <td><?= $data->kanca ?></td>
                                                        <td><?= $data->kode_unit ?></td>
                                                        <td><?= $data->nama_unit ?></td>
                                                        <td>
                                                            <!-- Edit -->
                                                            <button class="btn btn-success" data-toggle="modal"
                                                                data-target="#editModal<?= $data->id_kanca ?>"><iconify-icon
                                                                    icon="material-symbols:edit"
                                                                    width="20"></iconify-icon></button>

                                                            <!-- Delete -->
                                                            <button class="btn btn-danger" data-toggle="modal"
                                                                data-target="#deleteModal<?= $data->id_kanca ?>"><iconify-icon
                                                                    icon="ic:baseline-delete"
                                                                    width="20"></iconify-icon></button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>