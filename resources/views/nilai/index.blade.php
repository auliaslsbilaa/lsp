@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST NILAI</h2>
        <a href="/nilai/create" class="button-primary">Tambah Data</a>

        @if(session('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif

        <table cellpadding="10">
            <tr>
                <td>NO</td>
                <td>GURU MAPEL</td>
                <td>NAMA SISWA</td>
                <td>UH</td>
                <td>UTS</td>
                <td>UAS</td>
                <td>NA</td>
                <td>ACTION</td>
                
            </tr>

                @foreach ($nilai as $each)
            <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $each->mengajar->guru->nama_guru}} {{$each->mengajar->mapel->nama_mapel}} {{$each->mengajar->kelas->nama_kelas}}</td>
                    <td>{{ $each->siswa->nama_siswa}}</td>
                    <td>{{ $each->uh}}</td>
                    <td>{{ $each->uts}}</td>
                    <td>{{ $each->uas}}</td>
                    <td>{{ $each->na}}</td>
                    <td>
                        <a href="/nilai/edit/{{$each->id}}" class="button-warning">EDIT</a>
                        <a href="/nilai/destroy/{{$each->id}}" class="button-danger" onclick="return confirm('Yakin Hapus')">HAPUS</a>
                    </td>
                    
            </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection