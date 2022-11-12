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
    $totalmember=$_POST['totalmember'];
    $phone=$_POST['phone'];
    
     //$location=$_POST['locatio'];
    // // $chk="";
    // // foreach($location as $chk1)
    // // {
    // //     $chk.=$chk1.",";
    // // }
$visitplace=$_POST['problem'];
  
  
    $sql="INSERT INTO tripdata(name,email,totalmember,phone,visitplace) VALUES('$name','$email','$totalmember','$phone','$problem')";
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

<html>

<head>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Doc,,</title>
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
    <!-- <center> -->
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center cen">

<div class="bg-gray-100 rounded-lg p-8 flex flex-col w-full mt-10 width100 cat-box">
  <h2 class="text-gray-900 text-lg font-medium title-font mb-5 cat-font"><u>Book Your Trip</u></h2>
  
        <form action="" method="POST">
        <form class="row g-3">

            <!-- <table border="2"> -->
            <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="name" placeholder="enter your name" required>
            </div>
            <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text"class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="email" placeholder="enter your Email " required>
            </div>
            <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">total member</label>
                <input type="number" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="totalmember" placeholder="enter total member" required>
            </div>
            <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">phone</label>
                    <input type="number" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="phone" placeholder="enter your phone number" required>
            </div>
              
            <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">visit place</label>
                    <input type="text" class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="problem" placeholder="enter location show in the map" required>

            </div>
                <!-- <tr>
                    <td><input type="checkbox" name="city[]" value="surat"></td>
                    <td>surat</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="city[]" value="baroda"></td>
                    <td>baroda</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="city[]" value="bharuch"></td>
                    <td>bharuch</td>
                </tr> -->
               
                <!-- <tr>
                     <td>problem</td>
                    <td><input type="text" name="problem" placeholder="enter problem" required></td>
                </tr> -->
                <div class="col-12">
                            <input type="submit" class="btn btn-primary text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg b-submit" name="submit" value="submit">
                </div>
                <!-- </table> -->
                </form>
</form>
                </center>
</div>
</div>
                
</body>

</html>