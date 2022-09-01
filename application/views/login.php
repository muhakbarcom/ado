<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <<div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <span class="m-2"><?= $this->session->flashdata('pesan')?></span>
                                    <form method="POST" action="<?= base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username" name="username">
                                                <?= form_error('username','<div class="text-danger text-small">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Masukkan Password" name="password">
                                                 <?= form_error('password','<div class="text-danger text-small">','</div>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('register') ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/new') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/new') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/new') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/new') ?>/js/sb-admin-2.min.js"></script>

</body>