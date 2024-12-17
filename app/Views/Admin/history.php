<?= $this->extend('templates/index');?>

<?= $this->section('pagecontent');?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>History</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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
              <div class="col-md-12">
                <div class="x_panel">

                  <div class="x_content">

                  <div class="row justify-content-between">
                                <div class="col-4">
                                  <p class="text-muted font-13 m-b-30">
                                    Riwayat pemindahan perangkat                     
                                  </p>
                                </div>
                                <div class="col-4 text-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Print <iconify-icon icon="material-symbols:print" width="20"></iconify-icon></button>
                                </div>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 40%">Data Perangkat</th>
                          <th style="width: 40%">Tujuan</th>
                          <th style="width: 19%">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i =1;?>
                        <tr>
                          <td><?= $i++;?></td>
                          <td>
                          <div class="row ">
                            <div class="col-4">
                              <p>Serial Number
                                <br>
                                <small>#####</small>
                              </p>
                              <p>Nama Perangkat
                                <br>
                                <small>#####</small>
                              </p>
                              <p>Kondisi
                                <br>
                                <small>#####</small>
                              </p>
                            </div>
                            <div class="col-4">
                              <p>Lokasi
                                <br>
                                <small>######</small>
                              </p>
                              <p>EOS
                                <br>
                                <small>######</small>
                              </p>
                            </div>
                            </div>
                            <br>
                            <p>Deskripsi Perangkat
                              <br />
                              <small>######</small>
                            </p>
                          </td>
                          <td class="project_progress">
                          <p>Lokasi Pemindahan
                              <br>
                              <small>#####</small>
                            </p>
                            <p>Tanggal
                              <br>
                              <small>#####</small>
                            </p>
                            <p>Keterangan
                              <br>
                              <small>#####</small>
                            </p>
                          </td>
                          <td>
                            <p>Pandding</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?= $this->endSection();?>