<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>

    <body>
        <div class="card mx-auto mt-5 p-3" style="width: 550px; border: none; box-shadow: 0 0 5px 1px #eee">
            <form action="/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal text-center">Login</h1>
                <div class="form-group my-3">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password">
                </div>
                <button class="btn create-btn" type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
