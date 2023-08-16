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
                                            <option value="2021">2021</option>
                                            <option value="2022" selected>2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                                    <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu"
                                        class="btn btn-secondary">Json Menu</a>
                                    <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2022" target="_blank"
                                        rel="Array Transaksi" class="btn btn-secondary">
                                        Json Transaksi
                                    </a>
                                    <a href="http://127.0.0.1:8000/download-html" target="_blank" rel="Array Transaksi"
                                        class="btn btn-secondary" download="webpage.html">Download HTML</a>
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
                                            2022
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
                                        <td>40000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>40000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Mie Freno</td>
                                        <td>20000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>20000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Nasi Teriyaki</td>
                                        <td>65000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>65000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Nasi Ayam Katsu</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td>Nasi Goreng Mawut</td>
                                        <td>26000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>26000</td>
                                        <!-- Menampilkan total penjualan per baris -->
                                    </tr>
                                    <tr>
                                        <td class="tabel-secondary" colspan="14">
                                            <b>minuman</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teh Hijau</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Teh Lemon</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Teh</td>
                                        <td>12000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>12000</td>

                                    </tr>
                                    <tr>
                                        <td>Kopi Hitam</td>
                                        <td>12000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>12000</td>

                                    </tr>
                                    <tr>
                                        <td>Kopi Susu</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td class="tabel-secondary"><b>Total</b></td>
                                        <td>175000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>175000</td>
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
