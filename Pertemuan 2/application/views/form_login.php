<body class="bg-gradient-primary">
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                </div>

                    <?php echo $this->session->flashdata('pesan') ?>
                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="masukan username anda..." name="username">
                            <?php echo form_error('username','<div class="text-danger small">','</div>');?>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Password" name="password">
                            <?php echo form_error('password','<div class="text-danger small">','</div>')?>
                        </div>
                        
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">RememberMe</label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary form-control ">login</button>
                    </form>
                    
                    <hr><div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    
                    <div class="text-center">
                        <a class="small" href="register.html">Create an Account!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>