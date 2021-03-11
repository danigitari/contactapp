
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-4 ">
            <a href="/" class="navbar-brand"><h2>CONTACT LIST</h2></a>
            <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarNavSupportedContent">
                <span class="navbar-toggler-icon"></span></button> 
             <
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent ">
               
            <ul class="navbar-nav md-auto"> 
                
                <li class="nav-item mr-auto">
                <form action={{ route('logout') }} method="post">
                    @csrf
                    <button class="btn btn-outline-primary " type="submit" > LOGOUT </button>
                </form>
            </li> 
            <span><pre>  </pre></span>
                <li class="nav-item mr-auto">
                <a href="/dashboard" class="btn btn-outline-primary fas fa-user-plus "> Add contact</a> </li>
                <span><pre>  </pre></span>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
    
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/">HOME</a>
            
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
        @if (Session::has('contact deleted'))
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

    
    <br>
     </div></div></div>
  
         
    
</body>
</html>
