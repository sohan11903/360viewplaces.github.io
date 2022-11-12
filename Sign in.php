<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="signin.css">
</head>
<body>
  
<header class="text-gray-600 body-font">
        <div class="flex flex-wrap p-5 flex-col md:flex-row items-center header1">
          <p class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <!-- <svg xmlns="" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
             <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> 
            </svg> -->
            <img src="https://img.icons8.com/nolan/64/blog.png"/>
            <p class="ml-3 text-xl header">OLD HERITAGE INDIA</p>
          </p>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:font-bold text-xl" href="">Home</a>
            <!-- <a class="mr-5 hover:font-bold text-xl" href="headercategories.php">Categories</a> -->
            <a class="mr-5 hover:font-bold text-xl" href="">Trip Book</a>
            <a class="mr-5 hover:font-bold text-xl" href="">Contact Us</a>
            <!-- <a class="mr-5 hover:font-bold text-xl" href="">Contact Us</a> -->
          </nav>
          
        </div>
      </header>
  
  
  <!-- sign in box -->

  
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
      
      <!-- footer  -->
      
      <footer class="text-gray-600 body-font f-container">
        
        
        <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="f-title"><u>Pages</u></h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Home</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Categories</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Register as Professionals</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Contact Us</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="f-title"><u>Resources</u></h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Terms and Condition</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">About us</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Returns</a>
              </li>
              
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="f-title"><u>Services</u></h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Appliances Repair</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Electrician</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Plumbing</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">House Cleaning</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Beauty and Spa</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Online Instructor</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Event Managment</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800 f-a">Business</a>
              </li>
            </nav>
          </div>
          
          
          
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="f-title"><u>Follow Us</u></h2>
            <nav class="list-none mb-10">
              <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a class="text-gray-500 f-a">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500 f-a">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500 f-a">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500 f-a">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
                </a>
              </span>
              
            </nav>
          </div>
          
        </div>
        
      </footer>
    

</body>
</html>