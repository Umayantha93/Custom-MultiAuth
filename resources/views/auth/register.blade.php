<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>

    <div class="container"style="margin-left:700px">
        <div class="row"style="margin-top:100px" >

            <div class="col-md-4 col-md-offset-offset-4">
            <h3>User Registration</h3>
                <hr>
                <form action="{{ route('auth.create') }}" method="post">
                @csrf   
                <div class="results">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="email">Email</label>
                        <input type="text" class="form-control" name="email"  placeholder="Enter Email">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" name="password"  placeholder="Enter Password">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Password Confirm</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Password Confirmation">
                        <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
                    </div>
                    <br>





                                    <div class="form-group">
                                    <label for="user_types">Choose a User Type:</label>
                                        <br>
                                            <select name="is_admin" id="is_admin">
                                            <option value= 1 >Admin</option>
                                            <option value= 0 >User</option>
                                            </select> 
                                    </div>



                        <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                    </div>
                    <br>
                    <a href="login">I already have an Account!!</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>