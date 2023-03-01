
<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
@include('template.head')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      @include('template.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('template.navbar')
      <!-- End Navbar -->
      <!-- Main Content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Tanggal Pengaduan</th>
                                        <th>NIK</th>
                                        <th>Isi Laporan</th>
                                        <th width="1%">Foto</th>
                                        <th>Status</th>
                                        <th>OPSI</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    @foreach($pengaduan as $p)
                                        <tr>
                                            <td>{{ $p->tanggal_pengaduan }}</td>
                                            <td>{{ $p->nik }}</td>
                                            <td>{{ $p->isi_laporan }}</td>
                                            <td><img src="{{asset('image/'.$p->file)}}" height="50%" width="100%" alt=""></td>
                                            <td>{{ $p->status }}</td>
                                            <td>
                                                <a href="/pengaduan/delete/{{ $p->id_pengaduan }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                         </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- /.content -->
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('template.script')
</body>

</html>
