@extends('template.default') 
 
@section('content') 
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success')}}
        </div>
    @endif
    <div class="row"> 
        <div class="col-md-6"> 
            <h3>pemasok</h3> 
        </div> 
        <div class="col-md-6"> 
            <a href="{{ route('pemasok.create')}}" class="btn btn-success btn-sm float-end"> 
                <i class="fa fa-plus-circle"></i> Tambah 
            </a> 
        </div> 
    </div> 
    <div class="row mt-3"> 
        <div class="col"> 
            <table class="table bg-white rounded shadow-sm table-hover"> 
                <thead> 
                    <tr> 
                        <th scope="col" width="50"></th> 
                        <th scope="col">Nama pemasok</th> 
                        <th scope="col">Nama Kontak</th> 
                        <th scope="col">Nomor Hp</th> 
                        <th scope="col">Alamat</th> 
                        <th scope="width:200px">Aksi</th> 
                    </tr> 
                </thead> 
                <tbody> 
                @foreach ($pemasoks as $pemasok)  
                        <tr>  
                            <td>{{ $loop->iteration }} </td>  
                            <td>{{ $pemasok['nama_pemasok'] }} </td>  
                            <td>{{ $pemasok['nama_kontak'] }} </td> 
                            <td>{{ $pemasok['nomor_hp'] }} </td> 
                            <td>{{ $pemasok['alamat'] }} </td> 
                            <td>@include('pemasok.action')</td>  
                        </tr>  
                    @endforeach
                </tbody> 
            </table> 
        </div> 
    </div> 
    <form action="" method="post" id="deleteForm">
        @csrf
        @method('DELETE')
        <input type="submit" value="Hapus" style="display: none;">
    </form>
@endsection