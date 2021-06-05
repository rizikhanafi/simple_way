<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section>
        <h1 class="text-center">Form Isi</h1>

        <div class="container">
        <div class="row">
            <form class="form-control">
          @foreach ($s as $ss)
         <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="cari" value="{{ $ss -> nama }}" class="form-control" id="exampleFormControlInput1">
    </div>
      <button class="btn btn-primary">Okay</button> <br> <br>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="text" readonly value="{{ $ss -> alamat }}" class="form-control" id="exampleFormControlInput1">
        </div><div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fungsi</label>
            <input type="text" readonly value="{{ $ss -> nohp }}" class="form-control" id="exampleFormControlInput1">
        </div>
        @endforeach
    </form>
    </div>

    </div>

    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
