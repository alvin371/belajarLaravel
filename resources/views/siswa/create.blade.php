<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Siswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">Tambah Data Siswa</h1>
                <a href="{{url('/siswa')}}">
                    <button class="btn btn-primary">Home</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 border mt-5 p-5">
                <form action="{{url('siswa/store')}}" method="post">
                    @csrf
                    <label for="nama" class="form-label">Nama Lengkap Siswa</label>
                    <input type="text" class="form-control" name="nama" id="nama">

                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas">

                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenisKelamin" class="form-control" id="jenisKelamin">

                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="text" class="form-control" name="nilai" id="nilai">

                    <button type="submit" class="btn btn-primary mt-2 rounded-pill py-2 px-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>