<?php $this->extend('templates/index'); ?>

<?php $this->section('pagecontent'); ?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Request</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group row pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Data</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> -->
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Serial Number</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Perangkat</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Deskripsi Perangkat</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <textarea type="text" class="form-control" data-inputmask="'mask': '99-999999'"> </textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kondisi</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Lokasi</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '99-99999999'">
                          <span class="form-control-feedback right" aria-hidden="true"><iconify-icon icon="mdi:location" width="20"></iconify-icon></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">EOS</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'">
                          <span class="form-control-feedback right" aria-hidden="true"><iconify-icon icon="mdi:user" width="20"></iconify-icon></span>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              
              <!-- /form input mask -->

              <!-- form destination -->
              
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Destination</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3  ">Lokasi Pemindahan</label>
                        <div class="col-md-6 col-sm-9  ">
                          <input type="text" class="demo1 form-control"/>
                          <span class="form-control-feedback right" aria-hidden="true"><iconify-icon icon="mdi:location" width="20"></iconify-icon></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3  ">Keterangan</label>
                        <div class="col-md-6 col-sm-9  ">
                          <div class="input-group demo2">
                            <textarea type="text" value="#e01ab5" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3  ">Date Range</label>
                        <div class="col-md-6 col-sm-9 input-prepend input-group ">
                        <span class="add-on input-group-addon"><iconify-icon icon="uil:calender" width="20"></iconify-icon></span>
                        <input type="text" style="width: 380px" name="reservation" id="reservation" class="form-control" value="01/01/2016 - 01/25/2016" />
                      </div>
                      </div>
                      <div class="col-md offset-md-7">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#approveModal">Submit</button>
                        </div>

                    </form>
                  </div>
                </div>
                <!-- Modal Approving.. -->
                <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body text-center">
                        <!-- Ikon Jam -->
                        <iconify-icon icon="mdi:clock-time-four" width="80" height="80"></iconify-icon>
                        <br>
                        <p>Approving...</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<?php $this->endSection(); ?>