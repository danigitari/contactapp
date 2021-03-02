<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <title>Document</title>
</head>
<body>
    <h1> CONTACT LIST</h1><br>
 <div class="container">
     <div class="jumbotron">
     <table class="table table-striped table-bordered">
     <thead class="thead-dark"><tr>
         <th scope="col">fullname</th>
         <th scope="col">phonenumbers</th>
         <th scope="col">email</th>
         <th scope="col">contactphoto</th>
         <th> EDIT </th>
     </tr></thead><tbody>
         @foreach ($DashBoards as $DashBoard)
         <tr>
             <td>{{ $DashBoard->fullname }}</td>
             <td>{{ $DashBoard->phonenumbers }}</td>
             <td>{{ $DashBoard->email }}</td>
             <td> <img src="{{ asset('uploads/contactphoto/' . $DashBoard->image)}}" width="100px" alt="image">  </td> --}}
             <td><a href="/update/{{ $DashBoard->id }}" class="btn btn-sucess"> EDIT </a></td>
         </tr>
     </tbody> 
    </table></div></div>
</body>
</html>