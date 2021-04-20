<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>

    <div class="container"style="margin-left:700px">
        <div class="row"style="margin-top:100px" >

            <div class="col-md-4 col-md-offset-offset-4">
            <h3>User Login</h3>
                <hr>
                <form action="{{ route('auth.check') }}" method="post">
                @csrf
                <div class="results">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                        {{(Session::get('fail'))}}
                        </div>
                    @endif
                </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Email">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="register">Create an new Account now!!</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>