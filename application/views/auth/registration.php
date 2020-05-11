<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?= base_url('auth/registration'); ?>" method="post">
                <span class="login100-form-title p-b-26">
                    Registration Form
                </span>
                <span class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <h4>Antar Food</h4>
                    </div>
                </span>
                <br>
                <div class=" wrap-input100">
                    <input class="input100" type="text" name="name" id="name" value="<?= set_value('name'); ?>">
                    <span class=" focus-input100" data-placeholder="Full Name"></span>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" wrap-input100">
                    <input class="input100" type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                    <span class=" focus-input100" data-placeholder="Email"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="wrap-input100">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password1" id="password1">
                    <span class="focus-input100" data-placeholder="Password"></span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="wrap-input100">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password2" id="password2">
                    <span class="focus-input100" data-placeholder="Repeat Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Registration Account
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-60">
                    <span class="txt1">
                        Already have an account?
                    </span>
                    <br>
                    <a class="btn" href="<?= base_url('auth'); ?>">
                        Login!
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>