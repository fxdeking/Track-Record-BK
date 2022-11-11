<!-- Sale & Revenue Start -->
<style>
    .h {
        transition: ease-in-out 0.15s;
    }
    .h:hover {
        color: #EB1616;
        transition: ease-in-out 0.15s;
    }
</style>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{ route('cat') }}" class="text-reset text-decoration-none">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 h">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Data Pengunjung</p>
                                <h6 class="mb-0">5</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{ route('cat') }}" class="text-reset text-decoration-none">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 h">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Data Konselor</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{ route('cat') }}" class="text-reset text-decoration-none">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 h">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Data Laporan</p>
                                <h6 class="mb-0">30</h6>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="{{ route('cat') }}" class="text-reset text-decoration-none">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 h">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Catatan</p>
                                <h6 class="mb-0 h">{{ $catats->count() }}</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            -- Sales Chart End --> 


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4 h">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <p class="mb-0" style="font-size:20px;"><b>Kategori Keluhan</b></p>
                        <a href="{{ route('kat') }}">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col" style="text-align:center;">No.</th>
                                    <th scope="col" style="text-align:center;">Kategori Keluhan</th>
                                    <th scope="col" style="text-align:center;">Deskripsi Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="{{ route('profil') }}" class="text-reset text-decoration-none">
                        <div class="h-100 bg-secondary rounded p-4 h">
                            <div class="align-items-center justify-content-between mb-2">
                                <div style="text-align:center;">
                                    <img class="rounded-circle" src="{{ asset('foto') }}/{{ Auth::user()->foto }}" alt="" style="width: 200px; height: 200px;">
                                </div>
                            </div>
                            <div class="align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div style="text-align:center;" class="w-100 justify-content-between">
                                    <br>
                                        <p class="mb-0" style="font-size:30px;"><b>Kunjungi Profil</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4 h">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <p class="mb-0" style="font-size:20px;"><b>Kalender</b></p>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="{{ route('aboutus') }}" class="text-reset text-decoration-none">
                        <div class="h-100 bg-secondary rounded p-4 h">
                            <div class="align-items-center justify-content-between mb-2">
                                <div style="text-align:center;">
                                <i class="fa fa-users me-lg-2" style="font-size:12em;"></i>
                                </div>
                            </div>
                            <div class="align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div style="text-align:center;" class="w-100 justify-content-between">
                                        <p class="mb-0" style="font-size:25px;"><b>Ketahui Lebih Banyak Tentang Kami</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->