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
          <h1> CREATE CONTACT</h1><br>
           <form action="{{ route('createcontact') }}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="fullname" >Fullname</label>
                   <input type="text" name="fullname"class="form-control" placeholder="enter fullname">
               </div>
               <div class="form-group">
                   <label for="phonenumbers">Phonenumbers</label>
                   <input type="text" name="phonenumbers"class="form-control"placeholder="enter phonenumbers">
               </div>
               <div class="form-group">
                <label for="email" >Email</label>
                <input type="email" name="email" class="form-control" placeholder="enter email">
            </div>
            <div class="form-group">
                <label for="uploadimage ">Upload image</label>
                <input type="file" name="file" class="form-control" placeholder="upload image">
               
            </div>
            <button type="submit" id="uploadimage" class="btn btn-primary"> save</button></form>
            <br>
        
           </form>
           <br>
           <form action="/" method="get">
            @csrf
                <button  class="btn btn-primary">home</button></form>
                <br>
      
       <form action="/display" method="get">
       <button  class="btn btn-primary">List</button></form>
    </div>
</body>
</html>