<?php
require_once "config.php";
$username = $password =$confirm_password = "";
$username_err = $password_err =$confirm_password_err = "";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(empty(trim($_POST["username"]))){
    $username_err="user cannot be blank";
  }
  else{
    $sql = "SELECT id FROM signupdata WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username = trim($_POST['username']);

      if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
      if(mysqli_stmt_num_rows($stmt) == 1)
      {
        $username_err="this username is already taken";
      }
      else{
        $username= trim($_POST['username']);
      }
      }
      else{
        echo "something went wrong";
      }
    }
  }
  mysqli_stmt_close($stmt);

if(empty(trim($_POST['password']))){
  $password_err= "password cannot be blank";
}
elseif(strlen(trim($_POST['password']))<5)
{
  $password_err = "password can't be less than 5 character";
}
else
{
  $password = trim($_POST['password']);
}

if(trim($_POST['password']) != trim($_POST['confirm_password'])){
  $password_err= "password should match";
}
 if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
 {
  $sql = "INSERT INTO signupdata (username , password) VALUES (?,?)";
  $stmt= mysqli_prepare($conn, $sql);
if($stmt)
{
  mysqli_stmt_bind_param($stmt,"ss",
  $param_username , $param_password);
$param_username= $username;
$param_password= password_hash($password, PASSWORD_DEFAULT);
if(mysqli_stmt_execute($stmt))
{
  header("location: logout.php");
  exit;
}  
else{
  echo  "something went wrong.. cannot redirect";
}
}
mysqli_stmt_close($stmt);
 }




mysqli_close($conn);
}
?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous"> -->
  <title>Document</title>

  <style>
    .header11 {
      background-color: darkblue;
      color: white;
    }

    .h-button11 {
      background-color: #7277c6;
      margin: 0px 10px;
      border-radius: 30px 50px;
      padding: 10px;
    }

    .h-button11:hover {
      background-color: skyblue;
      color: black;
      border-radius: 50px 30px;
    }

    .header11 {
      color: white;
    }


    .cat-box {
      background-color: rgb(193, 193, 232);
      border-radius: 5px;
      box-shadow: 20px 20px 50px 20px grey;
    }

    .cat-font {
      font-size: 1.3rem;
      font-weight: bold;
      /* letter-spacing: 2px; */
      padding: 0px 0px;
    }

    .width100 {
      width: 40%;
      /* align-items: center; */
      justify-content: center;
      /* text-align: center; */
    }

    .cen {
      justify-content: center;
    }

    .b-submit {
      background-color: rgb(1, 1, 73);
      margin-top: 10px;
      width : 100%;
    }
  </style>



</head>

<body>





  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center cen">

    <div class="bg-gray-100 rounded-lg p-8 flex flex-col w-full mt-10 width100 cat-box">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5 cat-font"><u>Sign Up</u></h2>
      




      <form action="" method="POST">
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Username</label>
            <input type="text" placeholder="Enter Your Username" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="username" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Full Name</label>
            <input type="text" placeholder="Enter Your Name" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="fname" id="inputEmail41">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" placeholder="Enter Your Email" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="email" id="inputEmail411">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Phone Number</label>
            <input type="number" placeholder="Enter Your Number" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="number" id="inputEmail41">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" placeholder="Enter your password" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="password" id="inputPassword4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Confirm Password</label>
            <input type="password" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="confirm_password" id="inputPassword4"
              placeholder="confirm password">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg b-submit">Submit</button>
          </div>
        </form>
        </div>
      </form>
    







    </div>
  </div>
  </body>

</html>