<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengkat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Masukkan Tanggapan
                </div>
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/tanggapan/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Pengadu</label>
                            <input type="text" name="id_pengaduan" class="form-control" placeholder="Pengadu ..">
 
                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal tanggapan</label>
                            <input type="datetime-local" name="tanggal_tanggapan" class="form-control">
 
                            @if($errors->has('tanggal_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder="isi tanggapan .."></textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Petugas</label>
                            <input type="text" name="id_petugas" class="form-control" placeholder="Petugas ..">
 
                            @if($errors->has('id_petugas'))
                                <div class="text-danger">
                                    {{ $errors->first('id_petugas')}}
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