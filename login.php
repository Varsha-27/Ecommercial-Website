<html>
<head>
<title> User login and registration</title>
<link rel="stylesheet" type="text/css" href="login.css">
<!-- font-->
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500&family=Kaushan+Script&family=Krona+One&family=Pacifico&family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body>
<header>
<div class="container">
<div class="col col-12 text-center">
<h1 class="heading py-2"><b> Shoppers Stop</b></h1>
</div>
</div>
</header>
<main>
<div class="container m-auto">
<div class="row p-5">

  <div class="col-md-6 login-left">
  <h2>Login Here</h2>
  <form action="validation.php" method="post">
  <div class="form-group"> 
    <label> Username</lable>
    <input type="text" name="user" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Password</lable>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  </form>
  </div>

  <div class="col-md-6 login-right">
    <h2>SignUp Here</h2>
    <form action="registration.php" method="post">
    <div class="form-group">
     <label> Username</lable>
     <input type="text" name="user" class="form-control" required>
    </div>
    <div class="form-group">
     <label>Password</lable>
     <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

</div>
</div>
</main>

</body>
</html>