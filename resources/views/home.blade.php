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
        <h1 class="text-center">asdad</h1>
        <div class="container">
        <div class="row">
            <form class="form-control" method="POST" action="{{ route('creates') }}">
                @csrf
         <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">

    </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="alamat">
      </div>
      <div class="mb-3">
        <label class="form-label">No Hp</label>
        <input type="text" name="nohp" class="form-control" placeholder="nohp">
      </div>
      <button class="btn btn-primary" type="submit">Okay</button>
      <a href="{{ route('liats') }}" class="btn btn-secondary">Cari</a>

        </div>
    </form>
         <!--logout-->
    <a class="btn btn-danger" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>

 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Hp</th>
        <th scope="col">Ubah</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tampil as $tampils)
        <tr>
        <th scope="row">{{ $tampils -> id }}</th>
        <td>{{ $tampils -> nama }}</td>
        <td>{{ $tampils -> alamat }}</td>
        <td>{{ $tampils -> nohp }}</td>
        <td><a href="/home/edit/{{ $tampils -> id }}" class="btn btn-warning">Ubah</td></a>
        <td><a href="/home/delete/{{ $tampils -> id }}" class="btn btn-danger">Hapus</td></a>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>

    </section>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
