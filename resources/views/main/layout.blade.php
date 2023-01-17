<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>LARACT PENILAIAN SISWA</title>
</head>

<body>
    <!-- {header} -->
    <div class="header">
        <img src="{{asset('/gambar/header.jpg')}}" width="100%" height="40%">
    </div>
    <!-- menu -->
    <div class="menu">
        <b>
        <a href="/home">HOME<a>
      
        <a href="/guru/index">Guru</a>
                    <a href="/jurusan/index">Jurusan</a>
                    <a href="/kelas/index">Kelas</a>
                    <a href="/siswa/index">Siswa</a>
                    <a href="/mapel/index">Mapel</a>
                    <a href="/mengajar/index">Mengajar</a>
                   
                    <a href="/nilai/index">Nilai</a>
             
                <a href="/logout">Logout</a>
            </b>
        </div>
   <!-- content -->
   @yield('content')
   <!-- footer -->
   <div class="footer">
    <center>
        <p>
            &copy; {{date('Y')}} - UJIKOM LSP
        </p>
    </center>
    </div>
    </body>
</html>