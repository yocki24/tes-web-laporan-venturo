<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laporan venturo</title>
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendor/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

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
                                            @if ($tahun == '2021')
                                                <option value="2021" selected>2021</option>
                                                <option value="2022">2022</option>
                                            @elseif ($tahun == '2022')
                                                <option value="2021">2021</option>
                                                <option value="2022" selected>2022</option>
                                            @else
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                                    @if ($tahun)
                                        <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu" class="btn btn-secondary">Json Menu</a>
                                        <a href="http://tes-web.landa.id/intermediate/transaksi?tahun={{$tahun}}" target="_blank" rel="Array Transaksi" class="btn btn-secondary">
                                            Json Transaksi
                                        </a>
                                        <a href="{{ route('downloadHtml'.$tahun) }}" target="_blank" rel="Array Transaksi" class="btn btn-secondary" download="webpage.html">Download HTML</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            @if ($tahun)
                                <table class="table table-hover table-bordered" style="margin: 0;">
                                    <thead>
                                        <tr class="table-dark">
                                            <th rowspan="2"
                                                style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                                            <th colspan="12" style="text-align: center;">Periode Pada
                                                {{ $tahun }}
                                            </th>
                                            <th rowspan="2"
                                                style="text-align:center;vertical-align: middle;width:75px">
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
                                        @foreach ($menuData as $menu)
                                            @if ($menu['kategori'] == 'makanan')
                                                <tr>
                                                    <td>{{ $menu['menu'] }}</td>
                                                    @php
                                                        $totalMenuSales = array_fill(1, 12, 0); // Inisialisasi array total penjualan per bulan
                                                    @endphp
                                                    @foreach ($transaksi as $ts)
                                                        @php
                                                            $bulanTransaksi = date('n', strtotime($ts['tanggal']));
                                                        @endphp
                                                        @if ($bulanTransaksi >= 1 && $bulanTransaksi <= 12 && $ts['menu'] == $menu['menu'])
                                                            @php
                                                                $totalMenuSales[$bulanTransaksi] += $ts['total'];
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    @foreach ($totalMenuSales as $totalBulan)
                                                        <td>{{ $totalBulan }}</td>
                                                    @endforeach
                                                    <td>{{ array_sum($totalMenuSales) }}</td>
                                                    <!-- Menampilkan total penjualan per baris -->
                                                </tr>
                                            @endif
                                        @endforeach
                                        <tr>
                                            <td class="tabel-secondary" colspan="14">
                                                <b>minuman</b>
                                            </td>
                                        </tr>
                                        @foreach ($menuData as $menu)
                                            @if ($menu['kategori'] == 'minuman')
                                                @php
                                                    $totalMenuSales = array_fill(1, 12, 0); // Initialize array for total sales per month
                                                @endphp
                                                <tr>
                                                    <td>{{ $menu['menu'] }}</td>
                                                    @foreach ($transaksi as $ts)
                                                        @php
                                                            $bulanTransaksi = date('n', strtotime($ts['tanggal']));
                                                        @endphp
                                                        @if ($bulanTransaksi >= 1 && $bulanTransaksi <= 12 && $ts['menu'] == $menu['menu'])
                                                            @php
                                                                $totalMenuSales[$bulanTransaksi] += $ts['total'];
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    @php
                                                        $totalRowSales = array_sum($totalMenuSales);
                                                    @endphp
                                                    @foreach ($totalMenuSales as $totalBulan)
                                                        <td>{{ $totalBulan }}</td>
                                                    @endforeach
                                                    <td>{{ $totalRowSales }}</td>

                                                </tr>
                                            @endif
                                        @endforeach
                                        <tr>
                                            <td class="tabel-secondary"><b>Total</b></td>
                                            @php
                                                $totalColumnSums = array_fill(1, 12, 0); // Initialize array for column sums
                                                foreach ($transaksi as $ts) {
                                                    $bulanTransaksi = date('n', strtotime($ts['tanggal']));
                                                    $totalColumnSums[$bulanTransaksi] += $ts['total'];
                                                }
                                            @endphp
                                            @foreach ($totalColumnSums as $totalBulan)
                                                <td>{{ $totalBulan }}</td>
                                            @endforeach
                                            <td>{{ array_sum($totalColumnSums) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/vendor/jqueryui/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/fullcalendar-init.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
</body>

</html>
