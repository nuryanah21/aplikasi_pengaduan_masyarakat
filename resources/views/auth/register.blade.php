@extends('layouts.applogin')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6">
            <div class="card shadow">
                <div class="card-body">
                    @if($messege = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $messege }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('masyarakat.register')}}" method="POST" accept-charset="utf-8">
                            @csrf
                            <h3 class="text-center">Registrasi</h3>
                            <br>
                            <div class="form-group">
                                <label for="nik">Nik</label>
                                <input type="text" name="nik" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input type="number" name="telp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rt">RT</label>
                                <input type="text" name="rt" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="rw">RW</label>
                                <input type="text" name="rw" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control">
                            </div>

                            <div class="form-floating">
                                <label>Provinsi</label>
                                <select class="form-control" name="province_id">
                                    <option value="">Pilih Provinsi</option>
                                        @foreach($provinces as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                </select>
                                            
                                @if($errors->has('province_id'))
                                    <div class="text-danger">
                                    {{ $errors->first('province_id')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-floating">
                                <label>Kota</label>
                                <select class="form-control" name="regency_id">
                                    <option value="">Pilih Kota</option>
                                        @foreach($regencies as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                </select>
                                            
                                @if($errors->has('regency_id'))
                                    <div class="text-danger">
                                    {{ $errors->first('regency_id')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-floating">
                                <label>Kecamatan</label>
                                <select class="form-control" name="district_id">
                                    <option value="">Pilih Kecamatan</option>
                                        @foreach($districts as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                </select>
                                            
                                @if($errors->has('district_id'))
                                    <div class="text-danger">
                                    {{ $errors->first('district_id')}}
                                    </div>
                                @endif
                            </div>
                            
                            <div class="form-floating">
                                <label>Desa</label>
                                <select class="form-control" name="village_id">
                                    <option value="">Pilih Kecamatan</option>
                                        @foreach($villages as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                </select>
                                            
                                @if($errors->has('village_id'))
                                    <div class="text-danger">
                                    {{ $errors->first('village_id')}}
                                    </div>
                                @endif
                            </div>

                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection