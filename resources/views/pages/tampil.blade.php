@extends('layouts.master')

@section('judulTab','Biodata')

@section('judulHal','Halaman Tampil')

@section('content')

<table class="table table-hover" style="font-size: 14px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIS</th>
      <th scope="col">Kelas</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  <?php $n=1; ?>
    @foreach($bio as $p)
    <tr>
      <th scope="row">{{$n++}}</th>
      <td>{{$p->nama}}</td>
      <td>{{$p->nis}}</td>
      <td>{{$p->kelas}}</td>
      <td>{{$p->tmtlhr}}</td>
      <td>{{$p->tgllhr}}</td>
      <td>
        
        <form action="{{route('hapus',$p->id)}}" method="POST">
       
          @csrf 
          @method('DELETE')
          <a href="/ubah/{{$p->id}}" class="btn btn-warning btn-sm">ubah</a>
          
          <Button type="submit" class="btn btn-danger btn-sm">Hapus</Button>

        </form>
      </td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection