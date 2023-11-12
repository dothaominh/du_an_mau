
<div class="row2">
         <div class="row2 font_title">
          <h1>thống kê sản phẩm theo danh mục</h1>
         </div>
         <div class="row2 form_content ">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>id</th>
                <th>name</th>
                <th>soluong</th>
                <th>gia_min</th>
                <th>gia_max</th>
                <th>gia_avg</th>
               
            </tr>
            <?php
                foreach($dsthongke as $thongkesp){
                    extract($thongkesp);
                   
                    echo '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td> '.$soluong.'</td>
                    <td> '.$gia_min.'</td>
                    <td> ' .$gia_max.'</td>
                    <td> '.$gia_avg.'</td>
                   
                </tr>
                    ';
                }
            ?>
           </table>
           </div>
            <div class="row mb10 ">
                
                <a href="index.php?act=bieudo"> <input  class="mr20" 
                type="button" value="xem bieu do"></a>
           </div>
         </div>
        </div>



       
    </div>