
<div class="row2">
         <div class="row2 font_title">
          <h1>giỏ hàng</h1>
         </div>
         <div class="row2 form_content ">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
               <th>stt</th>
                <th>hình</th>
                <th>sản phẩm</th>
                <th>đơn giá</th>
                <th>số lượng</th>
                <th>thành tiền</th>
                <th>thao tác</th>
              
            </tr>
          <?php
            echo var_dump( $_SESSION['mycart']);
            if((isset($_SESSION['mycart']) &&( $_SESSION['mycart'])>0)){
              $i=1;
             foreach ($_SESSION['mycart'] as $sp) {
              $tt= (int)$sp[3] * (int) $sp[4];
             }
              echo '
              <tr>
              <td>'.$i.'</td>
              <td>'.$sp[2].'</td>
              <td>'.$sp[1].'</td>
              <td>'.$sp[3].'</td>
              <td>'.$sp[4].'</td>
              <td>'.$tt.'</td>
              <td><a href="#">xóa</a></td>
              </tr>
              ';
            }
            $i++;
          ?>
           
           </table>
           </div>
    
         </div>
        </div>



       
    </div>
