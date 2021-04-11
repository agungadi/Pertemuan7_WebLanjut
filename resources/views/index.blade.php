@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
            </div>
            <form method="get" action="/search">
                <div class="float-left my-2" style="margin-right:20px;">
                    <button type="submit" class="btn btn-warning">Search</button>
                </div>

                <div class="float-left my-2">
                    <input type="search" name="search" class="form-control" id="cari" aria-describedby="search" >
                </div>

            </form>
        </div>
    </div>

 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif
    <table class="table table-bordered">
        <tr>
        <th>Nim</th>
        <th>Email</th>
        <th>Nama</th>
        <th>Tgl Lahir</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_Handphone</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswas as $Mahasiswa)
        <tr>

        <td>{{ $Mahasiswa->Nim }}</td>
        <td>{{ $Mahasiswa->Email }}</td>
        <td>{{ $Mahasiswa->Nama }}</td>
        <td>{{ $Mahasiswa->TglLahir }}</td>
        <td>{{ $Mahasiswa->Kelas }}</td>
        <td>{{ $Mahasiswa->Jurusan }}</td>
        <td>{{ $Mahasiswa->No_Handphone }}</td>
        <td>
        <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nim) }}" method="POST">

        <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->Nim) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->Nim) }}">Edit</a>
        @csrf
        @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
    </tr>
        @endforeach
    </table>
    <div class="d-flex">
        {{ $mahasiswas->links() }}
    </div>
        @endsection
