

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
                    Tanggapan
                </div>
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">Berikan Tanggapan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Pengadu</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $t)
                            <tr>
                                <td>{{ $t->id_pengaduan }}</td>
                                <td>{{ $t->tanggal_tanggapan }}</td>
                                <td>{{ $t->tanggapan }}</td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $t->id_tanggapan }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/delete/{{ $t->id_tanggapan }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>