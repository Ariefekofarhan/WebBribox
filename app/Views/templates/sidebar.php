<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="<?=base_url(); ?>/Assets/images/user.png" alt="..." class="img-circle profile_img mb-4">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
            <h2><?= 'username' ;?></h2>
    </div>
</div>
            <!-- /menu profile quick info -->

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('/'); ?>">Dashboard</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('/eos'); ?>">EOS</a></li>
                    <li><a href="<?= base_url('/pm'); ?>">PM</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-arrows-alt"></i> Movement <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('/request'); ?>">Form Request</a></li>
                    <li><a href="<?= base_url('/approving'); ?>">Approvement</a></li>
                    <li><a href="<?= base_url('/history'); ?>">History</a></li>
                </ul>
            </li>
    </div>
    <div class="menu_section">
        <h3>Addition</h3>
            <ul class="nav side-menu">
                <li><a href="<?= base_url('/master_data'); ?>"><i class="fa fa-folder"></i> Master Data</a></li>
                <li><a href="<?= base_url('/gudang'); ?>"><i class="fa fa-industry"></i> Gudang</a></li>
                <li><a href="<?= base_url('/uker'); ?>"><i class="fa fa-building"></i> Unit Kerja</a></li>
            </ul>
    </div>
</div>