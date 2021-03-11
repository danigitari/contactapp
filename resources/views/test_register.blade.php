<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="/css/global.css">
</head>
<body style="background: #fff">
    
    <br>
    <br>
    
    <div class="row">
    <div class="col-md-4 offset-3">
    
    <div class="container">
        <br>
        
    <div class="d-flex justify-content-center">
      
            <h1>REGISTER</h1>
         </div>
         <br>
         <br>
         
             <div class="form-holder">
         <form action="{{route ('test_register') }}" style="width: 500px; margin: auto;" class="form-container">
             <div class="form-group">
                 <label for="username" class="control_label"><h4>username</h4></label>
                 <input type="text" class="form-control" placeholder="username" name="username">
             </div>

             <div class="form-group">
                <label for="name" class="control_label"><h4>name</h4></label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>

             <div class="form-group">
                <label for="email"class="control_label"><h4>email</h4></label>
                <input type="text" class="form-control" placeholder="email" name="email" >
            </div>

            <div class="form-group">
                <label for="password" class="control_label"><h4>password</h4></label>
                <input type="text" class="form-control" placeholder="password" name="password">
            </div>

            <div class="form-group">
                <label for="confirm_password" class="control_label"><h4>confirm_password</h4></label>
                <input type="text" class="form-control" placeholder="repeat_password" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary" name="button" value="submit">Register</button>
        <a href={{ route('get_login') }} class="btn btn-outline-success"> login </a>
        </div>
        

         </form>

         {{-- <a href={{ route('get_login') }}> login </a> --}}
       <br>
       <br>
        </div>
           
    </div> 
</div>


    
</body>
</html>