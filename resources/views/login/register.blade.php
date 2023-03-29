<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registrasi | Pengaduan Masyarakat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('dashmin/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dashmin//css/bootstrap.min.css') }}" rel="stylesheet">

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


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="" class="">
                                <h3 class="text-primary">Layanan Pengaduan Masyarakat</h3>
                            </a>
                            {{-- <h5>Sign Up</h5> --}}
                        </div>
                        <form id="formAuthentication" action="{{ route('simpanregister') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="nik"  placeholder="nik" autocomplete="off">
                                <label for="nik">NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama"  placeholder="nama" autocomplete="off">
                                <label for="name">Nama</label>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email"  placeholder="name@example.com" autocomplete="off"> 
                                        <label for="email">Email address</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="password" name="password"  placeholder="password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="telp"  placeholder="telp" autocomplete="off">
                                <label for="telp">Telepon</label>
                            </div>

                            <div class="row mb-4">
                                <label class="col-form-label pt-0">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="jenkel" value="laki-laki" checked> Laki-laki
                                    <input type="radio" name="jenkel" value="perempuan"> Perempuan
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea type="text" class="form-control" name="alamat" placeholder="alamat" autocomplete="off"></textarea>
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="rt" name="rt" placeholder="rt" autocomplete="off">
                                        <label for="rt">RT</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="rw" name="rw" placeholder="rw" autocomplete="off">
                                        <label for="rw">RW</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="kode_pos" name="kode_pos"  placeholder="kodepos" autocomplete="off">
                                <label for="kode_pos">Kode Pos</label>
                            </div>

                            <label for="province_id">Provinsi</label>
                            <div class="mb-3">
                                <select class="form-select" name="province_id" id="provinsi">
                                    <option selected>Pilih Provinsi</option>
                                        @foreach($provinces as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                            
                            <label for="regency_id">Kabupaten</label>
                            <div class="mb-3">
                                <select class="form-select" name="regency_id" id="kabupaten">
                                </select>
                            </div>

                            <label for="district_id">Kecamatan</label>
                            <div class="mb-3">
                                <select class="form-select" name="district_id" id="kecamatan">
                                </select>
                            </div>

                            <label for="village_id">Desa</label>
                            <div class="mb-3">
                                <select class="form-select" name="village_id" id="desa">
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Daftar</button>
                            <p class="text-center mb-0">Sudah memiliki akun?<a href="login"> Masuk</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
    <script src="{{ asset('dashmin/js/main.js') }}"></script>

    <script>
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
            });
    
            $(function(){
                $('#provinsi').on('change',function(){
                    let id_provinsi = $('#provinsi').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkabupaten')}}",
                        data : {id_provinsi:id_provinsi},
                        cache : false,
    
                        success: function(msg){
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
    
                $('#kabupaten').on('change',function(){
                    let id_kabupaten = $('#kabupaten').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkecamatan')}}",
                        data : {id_kabupaten:id_kabupaten},
                        cache : false,
    
                        success: function(msg){
                            $('#kecamatan').html(msg);
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
    
                $('#kecamatan').on('change',function(){
                    let id_kecamatan = $('#kecamatan').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getdesa')}}",
                        data : {id_kecamatan:id_kecamatan},
                        cache : false,
    
                        success: function(msg){
                            $('#desa').html(msg);
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
            });
        });
    </script>
</body>

</html>