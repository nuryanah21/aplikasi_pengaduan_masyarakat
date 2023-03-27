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
                    Ubah Tanggapan
                </div>
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/tanggapan/update/{{ $tanggapan->id_tanggapan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Pengadu</label>
                            <input type="text" name="pengaduan_id" class="form-control" placeholder="pengadu .." value="{{ $tanggapan->pengaduan_id }}">
 
                            @if($errors->has('pengaduan_id'))
                                <div class="text-danger">
                                    {{ $errors->first('pengaduan_id')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal tanggapan</label>
                            <input type="datetime-local" name="tanggal_tanggapan" class="form-control" placeholder="Tanggal tanggapan .." value="{{ $tanggapan->tanggal_tanggapan }}">
 
                            @if($errors->has('tanggal_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder="isi tanggapan ..">{{ $tanggapan->tanggapan }}</textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Petugas</label>
                            <input type="text" name="petugas_id" class="form-control" placeholder="petugas .." value="{{ $tanggapan->petugas_id }}">
 
                            @if($errors->has('petugas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('petugas_id')}}
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