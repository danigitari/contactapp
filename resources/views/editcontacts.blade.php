<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
    <header>
        <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
            <ul>   
            </ul>
        </nav>
    </header>
</head>
<body>
    <br><br>
       <div class="container">
          <h1> EDIT CONTACT</h1><br>
          @if(Session::has('contact_updated'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('contact_updated')}}
          </div>
          @endif
           <form action="/update/{{$change ->id }}" method="POST" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="id" id="id" value="{{ $change->id }}">

               <div class="form-group">
                   <label for="fullname" >Fullname</label>
                   <input type="text" name="fullname"class="form-control"  value="{{ $change->fullname }}">
               </div>
               <div class="form-group">
                   <label for="phonenumbers">Phonenumbers</label>
                   <input type="text" name="phonenumbers"class="form-control" value="{{ $change->phonenumbers }}">
               </div>
               <div class="form-group">
                <label for="email" >Email</label>
                <input type="email" name="email" class="form-control"  value="{{ $change->email }}">
            </div>
            <div class="form-group">
                <label for="uploadimage ">Upload image</label>
                <input type="file" name="file" class="form-control"  value="{{ $change->image }}">
               
            </div>
            <button type="submit" id="uploadimage" class="btn btn-info"> UPDATE </button></form>
            <br>
        
           </form>
           <br>
           <form action="/" method="get">
            @csrf
                <button  class="btn btn-primary">home</button></form>
       </div>
  
</body>
</html>