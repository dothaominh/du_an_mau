
<div class="row2">
         <div class="row2 font_title">
          <h1>BIỂU ĐỒ</h1>
         </div>
         <div class="row2 form_content ">
         <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        data = google.visualization.arrayToDataTable([
          // ['Task', 'Hours per Day'],
          // ['Work',     11],
          // ['Eat',      2],
          // ['Commute',  2],
          // ['Watch TV', 2],
          // ['Sleep',    7]
          ['Danh mục', 'Số lượng'],
          <?php
              foreach ($dsthongke as  $thongke) {
                extract($thongke);
                  echo "['$name',$soluong],";
              }
          ?>
        ]);

        var options = {
          title: 'BIỂU ĐỒ THỐNG KÊ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
     <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
         </div>
        </div>



       
    </div>
