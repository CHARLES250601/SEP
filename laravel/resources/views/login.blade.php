<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/signin.css">
  </head>

  <body class="text-center">

    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $err)
                <li class="alert alert-danger">{{$err}}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <main class="form-signin">
            @csrf
            <form action="{{route('dologin')}}" method="POST">
                @csrf
                <img class="mb-4" src="login.jpg" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>

                <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control"  name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
                <br>
                <br>
                <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                <br>
                <br>
                <a href="{{'register'}}"><button type="button" class="w-100 btn btn-lg btn-warning">Register</button></a>
            </form>
        </main>

@if (Session::has('pesan'))
    <div class="alert alert-danger">{{ Session::get('pesan') }}</div>
@endif

</body>
</html>
