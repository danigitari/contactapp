<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <title>Document</title>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-4">
            <a href="/" class="navbar-brand"><h2>CONTACT APP</h2></a>
            <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarNavSupportedContent">
                <span class="navbar-toggler-icon"></span></button> 
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
            <ul class="navbar-nav md-auto">  
                <li class="nav-item mr-auto">
                 <a href="/" class="nav-link">home</a>         
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
         background: linear-gradient(to right, #5d2592, #863186);
        }
    .container{
        background: #52204f;

    }
    h2 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}
h4 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}
    </style>
    <br><br>
    <div class="row">
        <div class="col-md-6 offset-3">
       <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6 offset-3">
          <h2> CREATE NEW CONTACT</h2><br>
           <form action="{{ route('createcontact') }}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="fullname" ><h4>Fullname</h4></label>
                   <input type="text" name="fullname"class="form-control" placeholder="enter fullname">
               </div>
               <div class="form-group">
                   <label for="phonenumbers"><h4>Phonenumbers</h4></label>
                   <input type="text" name="phonenumbers"class="form-control"placeholder="enter phonenumbers">
               </div>
               <div class="form-group">
                <label for="email" ><h4>Email</h4></label>
                <input type="email" name="email" class="form-control" placeholder="enter email">
            </div>
            <div class="form-group">
                <label for="uploadimage"><h4>Upload image</h4></label>
                <input type="file" name="file" class="form-control pt-2" placeholder="upload image">
               
            </div>
            <button type="submit" id="uploadimage" class="btn btn-primary "> save</button></form>
            <br>
        
           </form>
        </div>
    </div>
        </div>
    </div>
           <br>
           
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>