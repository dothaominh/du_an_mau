<?php
    if (is_array($car)) {
        extract($car);
    }
?>
<main class="catalog  mb ">
    <div class="boxleft">
        <div class="box_title">Cập nhật tài khoản</div>
        <div class="box_content form_account">
            <form action="index.php?act=updatetk" method="post">
                <div>
                    <p>Email</p>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="email" name="email" placeholder="email" value="<?php echo $email ?>">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" placeholder="user" value="<?php echo $user ?>">
                </div>
                Mật khẩu
                <div>
                    <input type="password" name="pass" placeholder="pass" value="<?php echo $pass ?>">
                </div>
                <div>
                    <p>Địa chỉ</p>
                    <input type="text" name="address" placeholder="Địa chỉ" value="<?php echo $address ?>">
                </div>
                <div>
                    <p>Số Điện Thoại</p>
                    <input type="text" name="tel" placeholder="nhập số điện thoại" value="<?php echo $tel ?>">
                </div>
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại">
            </form>
            <?php 
                if(isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
        </div>

    </div>
    <!-- 
    include "view/boxright.php";
    ?> -->

</main>
