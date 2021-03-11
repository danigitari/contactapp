<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="css/register.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
</head>
<body>

       {{-- <div class="container"> 
               <div class="d-flex justify-content-center">
                     <h1>REGISTER</h1>
                  </div>
                 
        <form action="{{route ('register') }}" style="width: 500px; margin: auto" method="post" class="form-container">
            @csrf
            <div class="form-group">
           <label for="username"> <h4>username</h4></label>
                <input type="text" id="username" placeholder="username" name="username" value="{{ old('username') }}">
                @error('username')
                <div class="err_username">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br> 
            <div class="form-group">
                <label for="name"> <h4>name</h4>  </label>
                <input type="text" placeholder="name"  class="form-control" id="name" name="name" value="" >
                </div>
               </div>
            <br>
            
            <div class="form-group"  >
                <label for="email"><h4>email</h4> </label>
                <input type="email"  placeholder="email"   class="form-control" id="email" name="email" value="" ></div>
            <br>
            <div >
                <label for="password"> <h4>password</h4>  </label>
                <input type="password" placeholder="password" id="password"  class="form-control" name="password" value="" ></div>
            <br>
            <div class="form-group">
                <label for="password_confirmation"><h2>repreat password</h2></label>
                <input type="password" id="password_confirmation"   class="form-control" placeholder="repeat password" name="password_confirmation" >
            <br><br>
            </div>
            <button type="submit" name="button" value="submit">Register</button>
            <a href={{ route('get_login') }}> login </a>
        </form>
    </div> --}}
 
          
</body>
</html>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="{{route ('login') }}" method="post">
                  @csrf
                  <br>
                    <h1>REGISTER</h1> 
                    <input type="text" placeholder="name"  id="name" name="name" value="" >
                    <input type="text" name="username" placeholder="Username">
                    <input type="email"  placeholder="email" id="email" name="email" value="" > 
                    <input type="password" name="Password" placeholder="Password">
                    <input type="password" id="password_confirmation"   placeholder="repeat password" name="password_confirmation" >
                    <br>
                    {{-- <a class="forgot text-muted" href="#">Forgot password?</a> --}}
                    <button class="btn btn-success " type="submit" name="button" value="submit">register</button>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">LOGIN</a>
                </form>
            </div>
        </div>
    </div>
  </div>
  </body>
  </html>