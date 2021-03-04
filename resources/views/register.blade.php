<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>


 
  
       <div class="container">  
          <div class="col-md-6 offset-md-3 ">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center">  
                     <h1>REGISTER</h1>
                  </div>
                  <div class="card">
                        <form action="{{route ('register') }}" class="" method="post">
            @csrf
                             <div>
                                 <label for="username"> <pre><h2>username</h2></pre> </label>
                <input type="text" id="username" placeholder="username" name="username" value="{{ old('username') }}">
                @error('username')
                <div class="err_username">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br> 
            <div >
                <label for="name"> <pre><h2>name</h2></pre>  </label>
                <input type="text" placeholder="name"  class="fadeIn third" id="name" name="name" value="" >
                </div>
                @enderror</div>
            <br>
            
            <div >
                <label for="email"> <pre><h2>email</h2></pre>  </label>
                <input type="email"  placeholder="email"   class="fadeIn fourth" id="email" name="email" value="" ></div>
            <br>
            <div >
                <label for="password"> <pre><h2>password</h2></pre>  </label>
                <input type="password" placeholder="password" id="password"  class="fadeIn fifth" name="password" value="" ></div>
            <br>
            <div>
                <label for="password_confirmation"><pre><h2>repreat password</h2></pre></label>
                <input type="password" id="password_confirmation"  class="fadeIn sixth" placeholder="repeat password" name="password_confirmation" >
            <br><br>
            </div>
            <button type="submit" name="button" value="submit">Register</button>
            <a href={{ route('get_login') }}> login </a>
        </form>
    </div>
         </div>
       </div>
      </div> 
    </div> 
</body>
</html>