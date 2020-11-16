<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class=" col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center"><br><br>
                                    <img src="<?php echo base_url('assets/img/login/logo.png'); ?>" style="width:480px;height:254px;" alt="" />
                                </div>

                                <?= $this->session->flashdata('message') ?>

                                <form class="user" method="POST" action="<?= base_url('auth') ?> ">
                                    <div class="form-group">
                                        <input type=" text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan alamat email" value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small><p class="text-danger pl-3">', '</p></small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password">
                                        <?= form_error('password', '<small><p class="text-danger pl-3">', '</p></small>'); ?>
                                    </div><br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa kata sandi?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Buat akun baru!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>