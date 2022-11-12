<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- <title>Country Map Example</title> -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <style>
      .header1{
    background-color: darkblue;
    color: white;
}
#navbar1{
    display: flex;
    align-items: center;
    position: sticky;
    top: 0px;
}
.ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
    color: #fff;

  }
  .ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
    /* color: #38c; */
    font-weight: 0;
}
.ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
    /* color: #38c; */
    font-weight: 01;
}
.ui-page-theme-a a:visited, html .ui-bar-a a:visited, html .ui-body-a a:visited, html body .ui-group-theme-a a:visited {
    color: #fff;
}
.ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
    color: #fff;
    font-weight: 00;
}
.ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
    color: #fff;
    font-weight: 000;
}
#navbar1::before{
    content: "";
    background-color: lightgrey;
    position: absolute;
    top:0px;
    left:0px;
    height: 100%;
    width:100%;
    z-index: -1;
    opacity: 0.9;
}

.h-button{
    background-color: #7277c6;
    margin: 0px 10px;
    border-radius: 30px 50px;
    padding: 10px;
}
.h-button:hover{
    background-color: skyblue;
    color: black;
    border-radius: 50px 30px;
}
.header{
    color: white;
}
.map{
  height: 90%;
  width: 70%;
  margin: auto;
  margin-top: 50px;
}
.xyz{
  width: 250px;
  margin: auto;
  height: 100px;
}
.search{
  /* background-color: darkblue; */
  width: 50px;
  font-size: 26px;
  color: darkblue;
  margin: auto;
  margin-top: 25px;
}
#logo img{
    height: 5.3rem;
}
.fora{
  text-decoration: none;
  color: white;
}

  .container1{
    text-align: center;
    align-items: center;
    justify-content: center;
    
  }
  .center11{
    text-align: center;
    align-items: center;
    justify-content: center;
    
  }
.width100{
  width: 25%;
}
.boxmake{
  color: darkblue;
  font-size: 20px;
  font-weight: bold;
}

</style>
<script src="mapdata.js"></script>
<script src="countrymap.js"></script>
</head>
<body>
  <!-- <h1>HTML5/Javascript Country Map</h1> -->
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
        <a class="mr-5 hover:font-bold text-xl" href="test.php">Home</a>
        <!-- <a class="mr-5 hover:font-bold text-xl" href="headercategories.php">Categories</a> -->
        <a class="mr-5 hover:font-bold text-xl" href="tripbook1.php">Trip Book</a>
        <a class="mr-5 hover:font-bold text-xl" href="contact1.php">Contact Us</a>
        <!-- <a class="mr-5 hover:font-bold text-xl" href="">Contact Us</a> -->
      </nav>
      
    </div>
  </header>
  
  <div>
    <div class="search">
      
      <h1>Search</h1>
    </div>
    <div data-role="main" class="ui-content xyz">
      <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="search any place">
        <li><a href="./ajanta caves.html" target="_blank">Ajanta caves</a></li>
        <li><a href="./suntemple.html" target="_blank">Sun temple</a></li>
        <li><a href="./tajmal.html" target="_blank">Taj mahal</a></li>
        <li><a href="./khajuraho.html" target="_blank">Khajuraho group of monuments</a></li>
        <li><a href="./hampi.html" target="_blank">group of monuments at hampi</a></li>
        <li><a href="./fatehpur sikri.html" target="_blank">Fatehpur sikri</a></li>
            <li><a href="./elephant.html" target="_blank">Elephanta caves</a></li>
            <li><a href="./chola.html" target="_blank">great living chola temples</a></li>
            <li><a href="./bhimbetka.html" target="_blank">Rock shelters of Bhimbetka</a></li>
            <li><a href="./pavagadh.html" target="_blank">pavagadha</a></li>
            <li><a href="./jesalmer.html" target="_blank">jesalmer</a></li>
            <li><a href="./Ambaji.html" target="_blank">Ambaji</a></li>
            '<li><a href="./Kanchendzonga.html" target="_blank">khangchendzonga national park</a></li>
            <li><a href="./bhisnupur.html" target="_blank">Temples at Bhisnupur</a></li>
            <li><a href="./mugalgarden.html" target="_blank">Mughal garden</a></li>
            <li><a href="./chilikalake.html" target="_blank">chilika lake</a></li>
            
            
            
          </div>
        </ul>
        <div data-role="footer">
        <!-- <h1>&copy; oston code cypher 2017</h1> -->
    </div>
</div>
</div>
    <div class="map" id="map"></div>
    
<!--     
      <p>This map was created and can be edited at <a href="http://simplemaps.com/custom/country/IyOCar3o">http://simplemaps.com/custom/country/IyOCar3o</a>
    
    
      <p>To remove the "Simplemaps.com Trial" text, <a href="http://simplemaps.com/pricing" />purchase a map license</a>.  
      
      Then, register your license at the link above (Options > Register Purchase).  Or, simply replace the countrymap.js file in this folder (trial version) with the countrymap.js file that you are emailed (full version).
      
      </p>
     -->
    <!-- <p>To learn how to install this map on your web page, see the <a href="http://simplemaps.com/docs">Documentation</a>.</p> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
          offset: 300,
          duration: 10000,
      });
      </script>
      
	</body>
</html>
      
    

