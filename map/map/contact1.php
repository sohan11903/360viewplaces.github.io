<?php


$severname="localhost";
$username="root";
$password="";
$database="login";

$con  = mysqli_connect($severname, $username, $password, $database);
if(!$con)
{
    die("error.deleting.record:".mysqli_error($con));
}


//include 'abc.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $description=$_POST['description'];
    
     //$location=$_POST['locatio'];
    // // $chk="";
    // // foreach($location as $chk1)
    // // {
    // //     $chk.=$chk1.",";
    // // }
//$visitplace=$_POST['problem'];
  
  
    $sql="INSERT INTO contact(Name,Email,Phone,Description) VALUES('$name','$email','$number','$description')";
    if(mysqli_query($con,$sql))
    {
      header("location:  test.php");
        exit;
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
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
  <h2 class="text-gray-900 text-lg font-medium title-font mb-5 cat-font"><u>Contact Us</u></h2>
  




  <form action="" method="POST">
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" placeholder="Enter Your Username" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="name" id="inputEmail4">
      </div>
      
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" placeholder="Enter Your Email" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="email" id="inputEmail411">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Phone</label>
        <input type="number" placeholder="Enter Your Number" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="number" id="inputEmail41">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Description</label>
        <textarea type="description" placeholder="Enter your description" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="description" id="inputPassword4">
        </textarea>
      </div>
      
      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg b-submit">Submit</button>
      </div>
    </form>
    </div>
  </form>


</body>
</html>