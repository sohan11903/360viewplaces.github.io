<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regidter as professional</title>
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="regaspro.css">
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="flex flex-wrap p-5 flex-col md:flex-row items-center header1">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <p class="ml-3 text-xl header">Tailblocks</p>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:font-bold text-xl">Home</a>
            <a class="mr-5 hover:font-bold text-xl">Categories</a>
            <a class="mr-5 hover:font-bold text-xl">Register as Professionals</a>
            <a class="mr-5 hover:font-bold text-xl">User Dashboard</a>
            <a class="mr-5 hover:font-bold text-xl">Contact Us</a>
          </nav>
          <button class="h-button inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-xl">Sign In
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg> -->
          </button>
          <button class="h-button inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-xl">Sign Up
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg> -->
          </button>
        </div>
      </header>


      <div class="container px-5 title-1 mx-auto fmargin">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium mb-4 text-gray-900 reg-title">Analyze your sales and Performance</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base reg-text">You can analyze your sales and Performance by using the charts and make the deccisions accordingly.</p>
          <!-- <a class="reg-button">Register as Professional</a> -->
        </div> 
        </div>


      <!-- <section class="text-gray-600 body-font relative">
        <div class="container px-5 title mx-auto formargin">
          
      </section> -->
      <div class="container px-5 mx-auto cat-box">
        <div class="container--1">
            <div class="box-1">
                <!-- <img src="img/icons/quality-badge.svg" alt="" class="box1img center"> -->
                <h3 class="h-font">Sale tracking</h3>
                <h3 class="h1-font">Trake your sales and analyze your Performance by using the charts.</h3>
            </div>
            <div class="box-1">
                <!-- <img src="img/icons/handshake.svg" alt="" class="box1img center"> -->
                <h3 class="h-font">Freedom to choose client</h3>
                <h3 class="h1-font">You can choose to accept or reject the client request.</h3>
            </div>
            <div class="box-1">
                <!-- <img src="img/icons/thumbs-up-solid.svg" alt="" class="box1img center"> -->
                <h3 class="h-font">Notification</h3>
                <h3 class="h1-font">Get notified instanly about the status and requuests from the client.</h3>
            </div>
            
        </div>
      </div>

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center cen">
          
          <div class="bg-gray-100 rounded-lg p-8 flex flex-col w-full mt-10 width100 cat-box">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5 cat-font"><u>Sign In</u></h2>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-black">Email</label>
              <input type="email" id="email" name="email" placeholder="Email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="password" class="leading-7 text-black">Password</label>
              <input type="password" id="password" name="password"  placeholder="Password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg b-submit">Submit</button>
            <!-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> -->
          </div>
        </div>
      </section>
</body>
</html>