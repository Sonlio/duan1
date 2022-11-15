<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Loại', 'Số Lượng', { role: 'style' }], 
            ['Rolex', 2, 'fill-color: rgb(0, 0, 0)'], 
            ['Omega', 4, 'fill-color: rgb(0, 0, 0)'], 
            ['Casio', 5, 'fill-color: rgb(0, 0, 0)'], 
            ['Casio', 5, 'fill-color: rgb(0, 0, 0)'], 
        ]);

        var options = {
            is3D: true,
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_3d'));
        chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="content-panel">
                    <!-- STATISTICS -->
                    <div class="statistics">
                        <a href="<?= $ADMIN_URL ?>/bill" class="statistics-item">                          
                            <div class="statistics-item-icon">
                                <i class="fa-solid fa-cart-plus"></i>
                            </div>
                            <div class="statistics-item-content">
                                <p>Tổng số đơn hàng</p>
                                <span>3</span>
                            </div>                          
                        </a>
                        <a href="<?= $ADMIN_URL ?>/goods" class="statistics-item">
                            <div class="statistics-item-icon">
                                <i class="fa-solid fa-cookie-bite"></i>
                            </div>
                            <div class="statistics-item-content">
                                <p>Tổng số sản phẩm</p>
                                <span>5</span>
                            </div>
                        </a>
                        <a href="<?= $ADMIN_URL ?>/customer" class="statistics-item">
                            <div class="statistics-item-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="statistics-item-content">
                                <p>Tổng số khách hàng</p>
                                <span>3</span>
                            </div>
                        </a>
                        <a href="<?= $ADMIN_URL ?>/comment" class="statistics-item">
                            <div class="statistics-item-icon">
                                <i class="fa-sharp fa-solid fa-comments"></i>
                            </div>
                            <div class="statistics-item-content">
                                <p>Tổng số bình luận</p>
                                <span>4</span>
                            </div>
                        </a>
                    </div>

                    <!-- CHART -->
                    <div class="chart">
                        <div class="title-chart">
                            <p>Biểu đồ thống kê số lượng sản phẩm theo loại</p>
                        </div>
                        <div class="main-chart">
                            <div id="columnchart_3d"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>