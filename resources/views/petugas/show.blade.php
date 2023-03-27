@section("menu","petugas")
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Petugas Detail</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet') }}">
<link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet') }}" />

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('dashmin/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('dashmin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('template.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            @include('template.navbar')
            <!-- Navbar End -->

          <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <h6 class="mb-4">Detail Petugas</h6>
              <div class="bg-light rounded h-100 p-4">
                <form action="/masyarakat/petugas">

                    <div class="mb-3">
                        <label for="nik" class="col-sm-2 text-dark">NIK :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->nik}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="col-sm-2 text-dark">Nama Lengkap :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->nama}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-sm-2 text-dark">Email :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->email}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="col-sm-2 text-dark">Telp :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->telp}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="col-sm-2 text-dark">Alamat :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->alamat}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="rt" class="col-sm-2 text-dark">RT :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->rt}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="rw" class="col-sm-2 text-dark">RW :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->rw}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kode_pos" class="col-sm-2 text-dark">Kode Pos :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->kode_pos}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="province_id" class="col-sm-2 text-dark">Provinsi :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->province->name}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="regency_id" class="col-sm-2 text-dark">Kabupaten :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->regency->name}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="district_is" class="col-sm-2 text-dark">Kecamatan :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->district->name}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="village_id" class="col-sm-2 text-dark">Desa :</label>
                        <div class="col-sm-10">
                                <p>{{ $petugas->village->name}}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="/petugas" class="btn btn-sm btn-outline-secondary m-2">Kembali</a>
                    </div>                 
                </form>
              </div>
            </div>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashmin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    @include('template.script')
</body>
</html>