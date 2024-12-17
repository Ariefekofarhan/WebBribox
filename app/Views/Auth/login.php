<?= $this->extend('Auth/Templates/index');?>

<?= $this->section('logcontent');?>

<div class="container">
        <!-- Outer Row -->
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form ">
                <img class="mb-4" src="<?= base_url(); ?>/Assets/images/logoBribox.png" style="width: 300px; height: auto; display: block; margin-left: auto; margin-right: auto;" alt="">
            <div class="card text-white mb-3 rounded-3" style="background-color: #0061B1; height: 350px;">
            <div style="position: absolute; top: 20px; left: 5px; z-index: 999;">
            </div>   
            <section class="login_content">
                    <form method="post">
                            <h1>Login</h1>
                            
                        <div>
                            <input type="email" name="login" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="text" name="login" class="form-control" placeholder="Email or Username" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" autocomplete="off" />
                        </div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" >
							</label>
						</div>

						<br>
                        <div>
                        <button type="submit" class="btn btn-block text-white rounded-pill" style="background-color: #FC8F54;"></button>
                        </div>

                        <div class="clearfix"></div>
                        </form>
                        
                </section>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();?>