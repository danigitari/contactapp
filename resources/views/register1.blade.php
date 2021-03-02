<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="panel-heading text-center">
        <h1>REGISTER</h1>
    </div>
    <div class="container col-xs-4">
        <div class="row col-md-6 col-md-offset-3 ">
            <div class="panel panel-primary">
           
            <br><br>
            <div class="panel-body">

                <form action="{{route ('register') }}" class="" method="post">
                    @csrf
                        <div class="form-group ">
                    <label for="username"> <h5>username</h5> </label>
                        <input type="text" id="username" placeholder="username" name="username" class="form-control"value="{{ old('username') }}">
                        @error('username')
                        <div class="err_username">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <br> 
                    <div class="form-group ">
                        <label for="name"> <h5>name</h5>  </label>
                        <input type="text" placeholder="name"  class="form-control" id="name" name="name" value="" ></div>
                    <br>
                    
                    <div class="form-group ">
                        <label for="email"> <h5>email</h5>  </label>
                        <input type="email"  placeholder="email"  class="form-control" id="email" name="email" value="" ></div>
                    <br>
                    <div class="form-group ">
                        <label for="password"><h5>password</h5> </label>
                        <input type="password" placeholder="password" id="password"  class="form-control" name="password" value="" ></div>
                    <br>
                    <div class="form-group">
                        <label for="password_confirmation"><h5>repreat password</h2></label>
                        <input type="password" id="password_confirmation"  class="form-control" placeholder="repeat password" name="password_confirmation" >
                    <br><br>
                    </div>
                    <button type="submit" class="btn btn-primary" name="button" value="submit">Register</button>
                    <a href={{ route('get_login') }}> login </a>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>