@extends('layouts.master')

@section('judulTab','Biodata')

@section('judulHal','Halaman Tampil')

@section('content')

<form method="POST" action="/tambahdata">
{{ csrf_field() }}

  @if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong style="font-size: 14px">{{ $message }}</strong>
				</div>
	@endif

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama">
        @if($errors->has('nama'))
            <div class="text-danger mt-1" style="font-size: 14px">
                {{$errors->first('nama')}}
            </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="nis" name="nis">
        @if($errors->has('nis'))
            <div class="text-danger mt-1" style="font-size: 14px">
                {{$errors->first('nis')}}
            </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="kelas" name="kelas">
        @if($errors->has('kelas'))
            <div class="text-danger mt-1" style="font-size: 14px">
                {{$errors->first('kelas')}}
            </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Tempat Lahir" name="tmtlhr">
        @if($errors->has('tmtlhr'))
            <div class="text-danger mt-1" style="font-size: 14px">
                {{$errors->first('tmtlhr')}}
            </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" placeholder="Tanggal Lahir" name="tgllhr">
        @if($errors->has('tgllhr'))
            <div class="text-danger mt-1" style="font-size: 14px">
                {{$errors->first('tgllhr')}}
            </div>
        @endif
    </div>        
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
  </div>
</form>

@endsection