<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style1.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/login.css"> 


    </div>
    <title>Document</title>
</head>
<body>
   {{--<div class="content" >
       --}}
       
        {{-- <form action="{{route ('login') }}" class="" method="post">
          @csrf
            <div class="form-group">
                <label for="username"> <pre><h2>username</h2></pre> </label>
                <input type="text" class="form-control" placeholder="username" name="username" value="">
            </div>
            <br>
            <div class="form-group">
                <label for="password"> <pre><h2>password</h2></pre>  </label>
                <input type="password" class="form-control" placeholder="password" id="password" name="password" value="" ></div>
            <br>
        {{-- </div> --}}
        {{-- <br>
        <br>
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
              
          
              <!-- Login Form -->
              <form action="{{route ('login') }}" class="" method="post">
                @csrf
                <label for="username"> <h4>username</h4> </label>
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
                <label for="password"> <h4> password</h4></label><br>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <br>
                
                <input type="submit" class="fadeIn fourth" value="Login">
                {{-- <button class="btn btn-success" type="submit" name="button" value="submit">login</button> --}}
              {{-- </form>
            </div>
             
              <div id="formFooter">
                <a class="underlineHover" href="{{ route('register') }}">register</a><br> --}}
                {{-- <a href={{ route('register') }}> register </a> --}}
              {{-- </div>
          
            </div>
          </div>
  
        
    

    </form>
</div>
</body>
</html>   --}}


<div class="container">
  <div class="row">
      <div class="col-md-6">
          <div class="card">
              <form class="box" action="{{route ('login') }}" method="post">
                @csrf
                <br>
                  <h1>Login</h1>
                  <br>
                  <p class="text-muted"> Please enter your login and password!</p> 
                  
                  <input type="text" name="username" placeholder="Username"> 
                  
                  <input type="password" name="password" placeholder="Password">
                  {{-- <a class="forgot text-muted" href="#">Forgot password?</a> --}}
                  <br>
                  <button class="btn btn-primary " type="submit" name="button" value="submit">login</button>
                  
              </form>
          </div>
      </div>
  </div>
</div>
</body>
</html>