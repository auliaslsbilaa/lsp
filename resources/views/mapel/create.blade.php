@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>TAMBAH DATA MAPEL</h2>
            <form action="/mapel/store" method="POST">
            @csrf
                <table width="50%">
        
                    <tr>
                        <td class="bar">NAMA MAPEL</td>
                        <td class="bar">
                            <input type="text" name="nama_mapel">
                        </td>
                    </tr>
                    <tr>
                        <td cilspan="2">
                            <center><button class="button-primary" type="submit">SIMPAN</button></center>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
@endsection