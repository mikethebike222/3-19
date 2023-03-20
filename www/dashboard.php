<?php
include "includes/db.php";


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3vx" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Your Mom</title>
</head>

<body>
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>
	 <p> Our Kingdom awaits, <?php ; echo $_SESSION['username'] ?> , to your personal dashboard</p> 
	<div id="accordion">
   <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Update Username
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
		  <form method="post">
       <div class="input-group p-2">
        <span class="input-group-text">Username</span>
                        <input type="" class="form-control" id=""  name="username" value=" <?php echo $_SESSION['username']; ?> ">
		   <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="mikesthebest">Update Username</button>
        </div>
                    </div>  </form>
	<?php
if (isset($_POST['mikesthebest'])) {
    $_SESSION['username'] = $_POST['username'];
   
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
		  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Update Email
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body"><form method="post">
		  <div class="input-group p-2">
        <span class="input-group-text">Email</span>
                        <input type="" class="form-control" id=""  name="email" value="<?php echo $_SESSION['email']; ?>">
			  <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="mikesbest">Update Email</button>
        </div>
                    </div></form>
	<?php
if (isset($_POST['mikesbest'])) {
    $_SESSION['email'] = $_POST['email'];
   
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Update Age
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
		  <form method="post">
        <div class="input-group p-2">
        <span class="input-group-text">Age</span>
                        <input type="" class="form-control" id=""  name="age" value="<?php echo $_SESSION['age']; ?>">
			<div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="updateAge">Update Age</button>
				
        </div>
			  </div></form><?php
if (isset($_POST['updateAge'])) {
    $_SESSION['age'] = $_POST['age'];
   
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
	
		</div>
	  </div>
		</div>
		<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Update Password
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
		  <form method="post">
        <div class="input-group p-2">
        <span class="input-group-text">Password</span>
                        <input type="" class="form-control" id=""  name="password" value="<?php echo $_SESSION['password']; ?>">
			<div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="mikescool">Update Password</button>
        </div>
			  </div></form>
	<?php
if (isset($_POST['mikescool'])) {
    $_SESSION['password'] = $_POST['password'];
   
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
		</div>
	  </div>
		</div>
	</div>
</body>
</html>