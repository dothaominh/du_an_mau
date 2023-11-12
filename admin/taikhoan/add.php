
<main class="catalog  mb ">
    <div class="boxleft">
        <div class="box_title">Thêm mới tài khoản</div>
        <div class="box_content form_account">
            <form action="index.php?act=addtk" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email" required>
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" placeholder="user" required>
                </div>
                Mật khẩu
                <div>
                    <input type="password" name="pass" placeholder="pass" required>
                </div>
                <div>
                    <p>Địa chỉ</p>
                    <input type="text" name="address" placeholder="Địa chỉ" required>
                </div>
                <div>
                    <p>Số Điện Thoại</p>
                    <input type="text" name="tel" placeholder="nhập số điện thoại" required>
                </div>
                <input type="submit" value="Thêm mới" name="themmoi">
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
