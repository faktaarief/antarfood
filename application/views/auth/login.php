<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?= base_url('auth'); ?>" method="post">
                <span class="login100-form-title p-b-26">
                    Login Form
                </span>
                <span class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <h4>Antar Food</h4>
                    </div>
                </span>
                <?= $this->session->flashdata('message'); ?>
                <br>
                <div class=" wrap-input100">
                    <input class="input100" type="text" name="email" id="email" name="email" value="<?= set_value('email'); ?>"> <span class="focus-input100" data-placeholder="Email"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>

                <div class="wrap-input100">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" id="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-50">
                    <span class="txt1">
                        Don’t have an account?
                    </span>
                    <br>
                    <a class="btn" href="<?= base_url('auth/registration'); ?>">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>