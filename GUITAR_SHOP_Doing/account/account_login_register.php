<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<div class="ad-part-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Đăng nhập</h5>
                        <form class="form-signin" action="." method="post" id="login_form">
                            <input type="hidden" name="action" value="login">
                            <div class="form-label-group">
                                <input name="email" value="<?php echo htmlspecialchars($email); ?>" size="30" type="email" id="inputEmail" class="form-control" placeholder="Nhập địa chỉ email..." required autofocus>
                                <?php echo $fields->getField('email')->getHTML(); ?>
                                <label for="inputEmail">Email</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="password" size="30" id="inputPassword" class="form-control" placeholder="Nhập password..." required>
                                <?php echo $fields->getField('password')->getHTML(); ?><br>
                                <label for="inputPassword">Mật khẩu</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
                            <hr class="my-4">
                            <?php if (!empty($password_message)) : ?>
                                <span class="error"><?php echo htmlspecialchars($password_message); ?></span><br>
                            <?php endif; ?>
                        </form>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="view_register">
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include '../view/footer.php'; ?>

<style>
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.5rem;
    }

    .card-signin {
        border: 1px solid #252525;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        /* border-radius: 5rem; */
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group input {
        height: 40px;
        border-radius: 0.5rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    .btn-google {
        color: white;
        background-color: #ea4335;
    }

    .btn-facebook {
        color: white;
        background-color: #3b5998;
    }
</style>