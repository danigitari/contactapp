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


    </div>
    <title>Document</title>
</head>
<body>
 
    <div class="content" >
      
       
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
        </div> --}}
        <br>
        <br>
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
              </div>
          
              <!-- Login Form -->
              <form action="{{route ('login') }}" class="" method="post">
                @csrf
                <label for="username"> <pre><h2>username</h2></pre> </label>
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
                <label for="password"> <pre><h2> password</h2></pre> </label><br>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <br>
                
                <input type="submit" class="fadeIn fourth" value="Login">
                {{-- <button class="btn btn-success" type="submit" name="button" value="submit">login</button> --}}
              </form>
          
             
              <div id="formFooter">
                <a class="underlineHover" href="{{ route('register') }}">register</a><br>
                {{-- <a href={{ route('register') }}> register </a> --}}
              </div>
          
            </div>
          </div>
  
        
    

    </form>
</div>
</body>
</html>