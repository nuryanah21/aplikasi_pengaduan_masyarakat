<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Pengaduan
                </div>
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="datetime-local" name="tanggal_pengaduan" class="form-control" placeholder="Tanggal Pengaduan pengaduan .." value="{{ $pengaduan->tanggal_pengaduan }}">
 
                            @if($errors->has('tanggal_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_pengaduan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nik" class="form-control" placeholder="nama pengaduan .." value="{{ $pengaduan->nik }}">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Laporan</label>
                            <textarea name="isi_laporan" class="form-control" placeholder="isi laporan pengaduan ..">{{ $pengaduan->isi_laporan }}</textarea>
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="file" class="form-control" value="{{ $pengaduan->file }}">
 
                            @if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="radio" name="status" value="0"> 0
                            <input type="radio" name="status" value="proses"> Proses
                            <input type="radio" name="status" value="selesai"> Selesai

                            @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>