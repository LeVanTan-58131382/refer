<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<?php
if (!isset($password_message)) {
       $password_message = '';
}
?>
<div class="ad-part-content">
       <div class="container">
              <div class="row">
                     <div class="col-sm-9 col-md-9 col-lg-7 mx-auto">
                            <div class="card card-signin my-5">
                                   <div class="card-body">
                                          <h5 class="card-title text-center">Đăng ký</h5>
                                          <form class="form-signin" form action="." method="post" id="register_form">
                                                 <h4 class="card-title text-center">Thông tin khách hàng</h4>
                                                 <input type="hidden" name="action" value="register">
                                                 <div class="form-label-group">
                                                        <input class="form-control" type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" size="30" placeholder="Nhập email..." required autofocus>
                                                        <?php echo $fields->getField('email')->getHTML(); ?>
                                                        <label for="email">Email</label>
                                                 </div>

                                                 <div class="form-label-group">
                                                        <input type="password" name="password_1" id="password_1" size="30" placeholder="Nhập mật khẩu..." class="form-control" required>
                                                        <?php echo $fields->getField('password_1')->getHTML(); ?>
                                                        <span class="error"><?php echo htmlspecialchars($password_message); ?></span><br>
                                                        <label for="password_1">Mật khẩu</label>
                                                 </div>

                                                 <div class="form-label-group">
                                                        <input type="password" name="password_2" id="password_2" class="form-control" required size="30" placeholder="Nhập lại mật khẩu...">
                                                        <label for="password_2">Nhập lại mật khẩu</label>
                                                        <?php echo $fields->getField('password_2')->getHTML(); ?><br>
                                                 </div>

                                                 <div class="form-label-group">
                                                        <input type="text" name="first_name" id="first_name" value="<?php echo htmlspecialchars($first_name); ?>" size="30" class="form-control" placeholder="Nhập first name..." required>
                                                        <?php echo $fields->getField('first_name')->getHTML(); ?><br>
                                                        <label for="first_name">First Name:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="last_name" id="last_name" value="<?php echo htmlspecialchars($last_name); ?>" class="form-control" placeholder="Nhập last name..." size="30">
                                                        <?php echo $fields->getField('last_name')->getHTML(); ?><br>
                                                        <label for="last_name">Last Name:</label>
                                                 </div>

                                                 <h4 class="card-title text-center">Địa chỉ giao hàng</h4>

                                                 <div class="form-label-group">
                                                        <input type="text" name="ship_line1" id="ship_line1" value="<?php echo htmlspecialchars($ship_line1); ?>" class="form-control" size="30" placeholder="Nhập địa chỉ giao hàng...">
                                                        <?php echo $fields->getField('ship_line1')->getHTML(); ?><br>
                                                        <label for="ship_line1">Địa chỉ 1:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="ship_line2" id="ship_line2" value="<?php echo htmlspecialchars($ship_line2); ?>" class="form-control" size="30" placeholder="Nhập địa chỉ giao hàng...">
                                                        <?php echo $fields->getField('ship_line2')->getHTML(); ?><br>
                                                        <label for="ship_line2">Địa chỉ 2:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="ship_city" id="ship_city" value="<?php echo htmlspecialchars($ship_city); ?>" class="form-control" size="30" placeholder="Nhập tên thành phố...">
                                                        <?php echo $fields->getField('ship_city')->getHTML(); ?><br>
                                                        <label for="ship_city">Thành phố:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="ship_state" id="ship_state" value="<?php echo htmlspecialchars($ship_state); ?>" class="form-control" size="30" placeholder="Nhập tên tỉnh/thành phố...">
                                                        <?php echo $fields->getField('ship_state')->getHTML(); ?><br>
                                                        <label for="ship_state">Tỉnh/Thành phố:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="ship_zip" id="ship_zip" value="<?php echo htmlspecialchars($ship_zip); ?>" class="form-control" size="30" placeholder="Nhập mã bưu chính...">
                                                        <?php echo $fields->getField('ship_zip')->getHTML(); ?><br>
                                                        <label for="ship_zip">Zip Code (Mã bưu chính):</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="ship_phone" id="ship_phone" value="<?php echo htmlspecialchars($ship_phone); ?>" class="form-control" size="30" placeholder="Nhập số điện thoại...">
                                                        <?php echo $fields->getField('ship_phone')->getHTML(); ?><br>
                                                        <label for="ship_phone">Số điện thoại:</label>
                                                 </div>

                                                 <h4 class="card-title text-center">Địa chỉ thanh toán</h4>

                                                 <div class="form-label-group">
                                                        <label for="use_shipping"> Sử dụng cho địa chỉ giao hàng&nbsp;</label>
                                                        <input type="checkbox" name="use_shipping" id="use_shipping" <?php if ($use_shipping) : ?>checked<?php endif; ?> class="form-control" size="30">
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="bill_line1" id="bill_line1" value="<?php echo htmlspecialchars($bill_line1); ?>" class="form-control" size="30" placeholder="Nhập địa chỉ...">
                                                        <?php echo $fields->getField('bill_line1')->getHTML(); ?><br>
                                                        <label for="bill_line1">Địa chỉ:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="bill_line2" id="bill_line2" value="<?php echo htmlspecialchars($bill_line2); ?>" class="form-control" size="30" placeholder="Nhập địa chỉ...">
                                                        <?php echo $fields->getField('bill_line2')->getHTML(); ?><br>
                                                        <label for="bill_line2">Địa chỉ 2:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="bill_city" id="bill_city" value="<?php echo htmlspecialchars($bill_city); ?>" class="form-control" size="30" placeholder="Nhập tên thành phố...">
                                                        <?php echo $fields->getField('bill_city')->getHTML(); ?><br>
                                                        <label for="bill_city">Thành phố:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="bill_state" id="bill_state" value="<?php echo htmlspecialchars($bill_state); ?>" class="form-control" size="30" placeholder="Nhập tên tỉnh/thành phố...">
                                                        <?php echo $fields->getField('bill_state')->getHTML(); ?><br>
                                                        <label for="bill_state">Tỉnh/Thành phố:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="bill_zip" id="bill_zip" value="<?php echo htmlspecialchars($bill_zip); ?>" class="form-control" size="30" placeholder="Nhập mã bưu chính...">
                                                        <?php echo $fields->getField('bill_zip')->getHTML(); ?><br>
                                                        <label for="bill_zip">Zip Code (Mã bưu chính):</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <input type="text" name="bill_phone" id="bill_phone" value="<?php echo htmlspecialchars($bill_phone); ?>" class="form-control" size="30" placeholder="Nhập số điện thoại...">
                                                        <?php echo $fields->getField('bill_phone')->getHTML(); ?><br>
                                                        <label for="bill_phone">Số điện thoại:</label>
                                                 </div>
                                                 <div class="form-label-group">
                                                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                                                 </div>

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
              height: 45px;
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