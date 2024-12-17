<?= $this->extend('templates/index'); ?>
<?= $this->section('pagecontent'); ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Master EOS</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="#">A</a></li>
                          <li><a href="#">B</a></li>
                          <li><a href="#">C</a></li>
                          <li><a href="#">D</a></li>
                          <li><a href="#">E</a></li>
                          <li>...</li>
                          <li><a href="#">W</a></li>
                          <li><a href="#">X</a></li>
                          <li><a href="#">Y</a></li>
                          <li><a href="#">Z</a></li>
                        </ul>
                      </div>

                      <div class="clearfix"></div>
                      <?php foreach($users as $user): ?>
                      <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?=$user->nama_kanwil ?></i></h4>
                            <div class="left col-md-7 col-sm-7">
                              <h2><?=$user->fullname ?></h2>
                              <p><strong>Role: </strong> <?=$user->role_name ?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> <?=$user->email ?></li>
                                <li><i class="fa fa-phone"></i> <?=$user->number ?></li>
                              </ul>
                            </div>
                            <div class="right col-md-5 col-sm-5 text-center">
                              <img src="<?= base_url();?>/Assets/images/user.png" alt="" class="img-circle img-fluid">
                            </div>
                          </div>
                          <div class=" profile-bottom text-center">
                            <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                                <i class="fa fa-user"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach ?>
                  </div>
                </div>
            </div>
          </div>
        </div>
<?= $this->endSection(''); ?>

