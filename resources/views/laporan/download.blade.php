<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laporan venturo</title>
    <link href="http://127.0.0.1:8000/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"
        type="text/css" />

    <link href="http://127.0.0.1:8000/assets/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css" />

    <link href="http://127.0.0.1:8000/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"
        type="text/css" />

    <link href="http://127.0.0.1:8000/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" type="text/css" />

    <link href="http://127.0.0.1:8000/assets/vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet"
        type="text/css" />

    <link href="http://127.0.0.1:8000/assets/css/style.css" rel="stylesheet" type="text/css" />

    <link href="http://127.0.0.1:8000/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Venturo - Laporan penjualan tahunan per menu
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/laporan" method="GET">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <select name="tahun" id="my-select" class="form-control">
                                            <option value="">Pilih Tahun</option>
                                            <option value="2021" selected>2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                                    <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu"
                                        class="btn btn-secondary">Json Menu</a>
                                    <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2021" target="_blank"
                                        rel="Array Transaksi" class="btn btn-secondary">
                                        Json Transaksi
                                    </a>
                                    <a href="http://127.0.0.1:8000/download-html" download="webpage.html">Download
                                        HTML</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" style="margin: 0;">
                                <thead>
                                    <tr class="table-dark">
                                        <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">
                                            Menu</th>
                                        <th colspan="12" style="text-align: center;">Periode Pada
                                            2021
                                        </th>
                                        <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">
                                            Total</th>
                                    </tr>
                                    <tr class="table-dark">
                                        <th style="text-align: center;width: 75px;">Jan</th>
                                        <th style="text-align: center;width: 75px;">Feb</th>
                                        <th style="text-align: center;width: 75px;">Mar</th>
                                        <th style="text-align: center;width: 75px;">Apr</th>
                                        <th style="text-align: center;width: 75px;">Mei</th>
                                        <th style="text-align: center;width: 75px;">Jun</th>
                                        <th style="text-align: center;width: 75px;">Jul</th>
                                        <th style="text-align: center;width: 75px;">Ags</th>
                                        <th style="text-align: center;width: 75px;">Sep</th>
                                        <th style="text-align: center;width: 75px;">Okt</th>
                                        <th style="text-align: center;width: 75px;">Nov</th>
                                        <th style="text-align: center;width: 75px;">Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tabel-secondary" colspan="14">
                                            <b>makanan</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nasi Goreng</td>
                                        <td>130000</td>
                                        <td>170000</td>
                                        <td>50000</td>
                                        <td>100000</td>
                                        <td>0</td>
                                        <td>65000</td>
                                        <td>10000</td>
                                        <td>10000</td>
                                        <td>50000</td>
                                        <td>10000</td>
                                        <td>40000</td>
                                        <td>30000</td>
                                        <td>665000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Mie Freno</td>
                                        <td>40000</td>
                                        <td>60000</td>
                                        <td>50000</td>
                                        <td>70000</td>
                                        <td>40000</td>
                                        <td>80000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>60000</td>
                                        <td>40000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>440000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Nasi Teriyaki</td>
                                        <td>13000</td>
                                        <td>65000</td>
                                        <td>39000</td>
                                        <td>13000</td>
                                        <td>43000</td>
                                        <td>13000</td>
                                        <td>13000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>26000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>225000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Nasi Ayam Katsu</td>
                                        <td>70000</td>
                                        <td>10000</td>
                                        <td>33000</td>
                                        <td>90000</td>
                                        <td>10000</td>
                                        <td>10000</td>
                                        <td>50000</td>
                                        <td>130000</td>
                                        <td>20000</td>
                                        <td>40000</td>
                                        <td>20000</td>
                                        <td>20000</td>
                                        <td>503000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Nasi Goreng Mawut</td>
                                        <td>52000</td>
                                        <td>39000</td>
                                        <td>39000</td>
                                        <td>52000</td>
                                        <td>52000</td>
                                        <td>26000</td>
                                        <td>52000</td>
                                        <td>104000</td>
                                        <td>26000</td>
                                        <td>39000</td>
                                        <td>13000</td>
                                        <td>26000</td>
                                        <td>520000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td class="tabel-secondary" colspan="14">
                                            <b>minuman</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teh Hijau</td>
                                        <td>60000</td>
                                        <td>70000</td>
                                        <td>90000</td>
                                        <td>190000</td>
                                        <td>10000</td>
                                        <td>150000</td>
                                        <td>40000</td>
                                        <td>10000</td>
                                        <td>40000</td>
                                        <td>0</td>
                                        <td>20000</td>
                                        <td>30000</td>
                                        <td>710000</td>

                                    </tr>
                                    <tr>
                                        <td>Teh Lemon</td>
                                        <td>50000</td>
                                        <td>50000</td>
                                        <td>10000</td>
                                        <td>5000</td>
                                        <td>45000</td>
                                        <td>50000</td>
                                        <td>30000</td>
                                        <td>10000</td>
                                        <td>0</td>
                                        <td>5000</td>
                                        <td>25000</td>
                                        <td>0</td>
                                        <td>280000</td>

                                    </tr>
                                    <tr>
                                        <td>Teh</td>
                                        <td>6000</td>
                                        <td>51000</td>
                                        <td>18000</td>
                                        <td>21000</td>
                                        <td>12000</td>
                                        <td>48000</td>
                                        <td>18000</td>
                                        <td>24000</td>
                                        <td>9000</td>
                                        <td>9000</td>
                                        <td>3000</td>
                                        <td>6000</td>
                                        <td>225000</td>

                                    </tr>
                                    <tr>
                                        <td>Kopi Hitam</td>
                                        <td>18000</td>
                                        <td>48000</td>
                                        <td>12000</td>
                                        <td>51000</td>
                                        <td>21000</td>
                                        <td>13000</td>
                                        <td>3000</td>
                                        <td>15000</td>
                                        <td>21000</td>
                                        <td>0</td>
                                        <td>21000</td>
                                        <td>3000</td>
                                        <td>226000</td>

                                    </tr>
                                    <tr>
                                        <td>Kopi Susu</td>
                                        <td>30000</td>
                                        <td>42000</td>
                                        <td>9000</td>
                                        <td>12000</td>
                                        <td>24000</td>
                                        <td>9000</td>
                                        <td>12000</td>
                                        <td>0</td>
                                        <td>3000</td>
                                        <td>0</td>
                                        <td>15000</td>
                                        <td>15000</td>
                                        <td>171000</td>

                                    </tr>
                                    <tr>
                                        <td class="tabel-secondary"><b>Total</b></td>
                                        <td>469000</td>
                                        <td>605000</td>
                                        <td>350000</td>
                                        <td>604000</td>
                                        <td>257000</td>
                                        <td>464000</td>
                                        <td>228000</td>
                                        <td>303000</td>
                                        <td>229000</td>
                                        <td>169000</td>
                                        <td>157000</td>
                                        <td>130000</td>
                                        <td>3965000</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="http://127.0.0.1:8000/assets/vendor/global/global.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js">
    </script>

    <script src="http://127.0.0.1:8000/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/plugins-init/datatables.init.js"></script>

    <script src="http://127.0.0.1:8000/assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/peity/jquery.peity.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/apexchart/apexchart.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/dashboard/dashboard-1.js"></script>

    <script src="http://127.0.0.1:8000/assets/vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/moment/moment.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/plugins-init/fullcalendar-init.js"></script>

    <script src="http://127.0.0.1:8000/assets/js/custom.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/deznav-init.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/demo.js"></script>
</body>

</html>
