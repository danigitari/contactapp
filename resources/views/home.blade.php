<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
    <header>
        <nav>
            <h2>
                CONTACTS APP 
           </h2>
       
            <ul> 

                @guest
                <li>  
                    <form action="{{ route('get_login') }}" method="get">
                        
                        <button type="submit" class="btn btn-primary">login</button></form></li>
                <li>
                    <form action="{{ route('register') }}" method="get">
                        
                        <button type="submit" class="btn btn-primary" method="get">register</button></form>
                </li> 
                  
                    
                @endguest
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary">logout</button></form>  
                    </li>

                    <li>
                        @csrf
                        <form action="{{ route('dashboard') }}" method="get">
                           
                            <button type="submit" class="btn btn-primary" >create new contact</button></form>

                    </li>

                    <li>
                        @csrf

                    <form action="/display" method="get">
                        <button  class="btn btn-primary">List</button></form>
                    </li>
                @endauth 
            </ul>
        </nav>
    </header>
</head>
<body>
   @guest
    <h3>Please register and login to use the app.</h3>
    @endguest


    @auth

    <br>
    <div class="d-flex justify-content-center">
       
        <h1> 

            WELCOME!!!
        
        </h1>
        @endauth
    </div>
</body>
</html>
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/display.css">
    <title>Document</title>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-4">
            <a href="/" class="navbar-brand"><h2>CONTACT LIST</h2></a>
            <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarNavSupportedContent">
                <span class="navbar-toggler-icon"></span></button> 
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
            <ul class="navbar-nav md-auto">  
                <li class="nav-item mr-auto">
                 <a href="/" class="nav-link btn-md">home</a>         
                    </li> 
             <li class="nav-item">
       <a href="{{route('display')}}" class="nav-link">list</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/">HOME</a>
                </div>
                  <a class="dropdown-item" href="/display">CONTACT LIST</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/dashboard">ADD CONTACT</a>
                </div>
              </li>
        </ul>
    </div>
        </nav>
    </header>

</head>
<body>
    <style>
        body{
            background: rgb(255, 255, 255);
        }
        h4{
            color: rgb(255, 255, 255);
        }
    </style>
    <br>
    <br>
    <br>
    <div class="container-fluid">
    
    <div class="row">
        <div class="col-md-8 offset-2 ">   
     <table class="table table-striped table-bordered table-dark">
     <thead class="thead-dark"><tr>
         <th scope="col" class="pt-4"><h4>fullname</h4></th>
         <th scope="col"><h4>phonenumbers</h4></th>
         <th scope="col"><h4>email</h4></th>
         <th scope="col"><h4>contactphoto</h4></th>
         <th> <h4>EDIT</h4> </th>
         <th><h4> DELETE</h4> </th>
        @if(Session::has('contact deleted'))
        <div class="alert alert-danger" role="alert">
          {{ Session::get('contact deleted')}}
        </div>
        @endif
         @foreach ($contacts as $item)
         <tr>
             <td>{{ $item->fullname }}</td>
             <td>{{ $item->phonenumbers }}</td>
             <td>{{ $item->email }}</td>
             <td> <img src="{{ asset('images/' . $item->file)}}" width="100px" alt="image">  </td> 
             <td><a href="/edit/{{ $item->id }}" class="btn btn-success"> EDIT </a></td>
             <td><a href="/delete/{{ $item->id }}" class="btn btn-danger"> DELETE </a></td>
             @endforeach
         </tr>
     </tbody> 
    
    </table>
    <a href="/" class="btn btn-primary fas fa-home btn-lg">  home</a>
    <a href="/" class="btn btn-primary fas fa-adress-book btn-lg"> Add contact</a></div></div></div>
</body>
</html> --}}