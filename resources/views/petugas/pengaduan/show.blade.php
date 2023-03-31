@section("menu","pengaduan")
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Pengaduan Detail | Pengaduan Masyarakat</title>
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
                <h6 class="mb-4">Detail Pengaduan</h6>
              <div class="bg-light rounded h-100 p-4">
                @foreach($pengaduan->pengaduan as $item)

                    <div class="mb-3">
                        <label class="col-sm-2 text-dark">NIK :</label>
                        <div class="col-sm-10">
                                <p>{{ $item->user->nik ?? ''}}</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 text-dark">Tanggal Pengaduan :</label>
                        <div class="col-sm-10">
                                <p>{{ $item->tanggal_pengaduan }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-sm-2 text-dark">Isi Laporan :</label>
                        <div class="col-sm-10">
                                <p>{{ $item->isi_laporan }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-sm-2 text-dark">Foto :</label>
                        <div class="col-sm-10">
                            <img src="{{ asset('image/'. $pengaduan->file) }}" height="30%" width="30%" alt="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-sm-2 text-dark">Status :</label>
                        <div class="col-sm-10">
                            @if ($item->status == '0')
                            <a href="#" class="badge bg-primary">Pending</a>
                            @elseif ($pengaduan->status == 'proses')
                            <a href="#" class="badge bg-warning">Proses</a>
                            @else
                            <a href="#" class="badge bg-success">Selesai</a>
                            @endif
                            
                        </div>
                        <br>
                        @endforeach
                        <div class="d-flex">
                        <form action="{{ route('pengaduan.statusOnchange1', $pengaduan->id_pengaduan)}}" method="post">
                        @csrf
                            <select name="status" class="form-select" onchange="javascript:this.form.submit()">
                                <option value="0" @if($pengaduan->status == 0) selected @endif>Pending</option>
                                <option value="proses" @if($pengaduan->status == "proses") selected @endif>Proses</option>
                                <option value="selesai" @if($pengaduan->status == "selesai") selected @endif>Selesai</option>
                            </select>
                        </form>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-success m-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                Tanggapi
                                </button>
                                <a href="/petugas/pengaduan" class="btn btn-sm btn-outline-secondary m-2">Kembali</a>

                                <!-- Modal -->
                                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Masukkan Tanggapan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="/petugas/pengaduan/show/{id}">
                                            {{ csrf_field() }}

                                                <div class="modal-body">
                                                    <input type="hidden" name="tanggal_tanggapan" value="{{Carbon\Carbon::today()}}">
                                                    <input type="hidden" name="id_pengaduan" value="{{request()->route('id')}}">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="nameWithTitle" class="form-label">Petugas</label>
                                                            <textarea name="tanggapan" rows="5" class="form-control" placeholder="isi tanggapan .."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
              </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <h6 class="mb-4">Tanggapan</h6>
                <div class="bg-light rounded h-100 p-4">
                    @if (empty(@$data_tanggapan->tanggapan))
                    Belum ada tanggapan
                    @else
                    {{@$data_tanggapan->tanggapan}}
                    @endif

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-success m-2" data-bs-toggle="modal" data-bs-target="#modal">
                        Edit tanggapan
                    </button>
                
                        <!-- Modal -->
                        <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle">Edit Tanggapan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="/pengaduan/update/{{$pengaduan->id_pengaduan}}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameWithTitle" class="form-label">Petugas</label>
                                                    <textarea name="tanggapan" rows="5" class="form-control">{{@$data_tanggapan->tanggapan}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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