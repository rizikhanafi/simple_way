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
        <h1 class="text-center">asdas</h1>
        <div class="container">
        <div class="row">
            <form class="form-control" method="POST" action="{{ route('updates') }}">
                @csrf
         <div class="mb-3">
             @foreach ($ids as $idd )
             <input type="text" value="{{ $idd -> id }}" hidden name="id" id="">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $idd -> nama }}" class="form-control" id="exampleFormControlInput1">
    </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" value="{{ $idd -> alamat }}" class="form-control" placeholder="alamat">
      </div>
      <div class="mb-3">
        <label class="form-label">No Hp</label>
        <input type="text" name="nohp" value="{{ $idd -> nohp }}" class="form-control" placeholder="nohp">
      </div>
      <button class="btn btn-primary" type="submit">Okay</button>
      @endforeach
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

    </div>

    </section>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
