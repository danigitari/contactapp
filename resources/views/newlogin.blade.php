
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/global.css">
</head>
<body>
<br>
<br>

    <div class="row">
<div class="col-md-4 offset-md-4">
    <div class="container">
        <br>
        <br>

    <div class="d-flex justify-content-center">
      
        <h1>LOGIN</h1>
     </div>
     <br>
     <br>
    
        
    <form action="{{route ('new_login') }}" style="width: 500px; margin: auto;" class="form-container" method="POST">
    <div class="form-group">
      <label for="username" class="form-label"><h2>username</h2></label>
      <input type="text" placeholder="username" name="username" class="form-control">
    </div>
    <div class="form-group" class="form-label">
      <label for="password"><h2>password</h2></label>
      <input type="password" placeholder="password" name="password" class="form-control">
    </div>
    <br>
    <input type="submit" class="btn btn-outline-primary" value="Login">

  <br>
  <br>
  <br>
  
</form>
<br>
</div>
</div>
</div>
  
</body>
</html>