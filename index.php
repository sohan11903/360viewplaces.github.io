<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <style>
        .header1{
            background-color: darkblue;
            color: white;
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
        
        .container12 img{
    border: 4px solid black;
  
}     

.container13{
    border: 2px solid darkblue;
    margin: 20px;
    border-radius: 10px;
}
.container12{
    display: flex;
    /* border: 2px solid black; */
    margin: 10px;
    padding: 30px;
}
.container12 img{
    height: 250px;
    width: 250px;
}
.text12{
    display: flex;
    flex-direction: column;
    margin-right: 30px;
    margin-left: 30px;
    border: 2px solid black;
    border-radius: 10px;
    background-color: rgb(201, 223, 232);
}
.heading12{
    color: blue;
    font-size: 40px;
    margin: 10px;
}
.text12 p{
    font-size: 20px;
    margin: 15px;
}
.center{
    text-align: center;
    text-decoration: underline;
    font-weight: bold;
}
.progress-tracker {
    display: flex;
    margin: 60px auto;
    padding: 0;
    list-style: none;
  }
  
  .progress-step {
    flex: 1 1 0%;
    margin: 0;
    padding: 0;
    min-width: 24px;
  }
  .progress-step:last-child {
    flex-grow: 0;
  }
  .progress-step:last-child .progress-marker::after {
    display: none;
  }
  
  .progress-link {
    display: block;
    position: relative;
  }
  
  .progress-marker {
    display: block;
    position: relative;
  }
  .progress-marker::before {
    content: attr(data-text);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 20;
    width: 24px;
    height: 24px;
    padding-bottom: 2px;
    border-radius: 50%;
    transition: background-color, border-color;
    transition-duration: 0.3s;
  }
  .progress-marker::after {
    content: "";
    display: block;
    position: absolute;
    z-index: -10;
    top: 10px;
    right: -12px;
    width: 100%;
    height: 4px;
    transition: background-color 0.3s, background-position 0.3s;
  }
  
  .progress-text {
    display: block;
    padding: 8px 8px;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
  .progress-title {
    margin-top: 0;
  }
  
  .progress-step .progress-marker {
    color: #fff;
  }
  .progress-step .progress-marker::before {
    background-color: #b6b6b6;
  }
  .progress-step .progress-marker::after {
    background-color: #b6b6b6;
  }
  .progress-step .progress-text {
    color: #333;
  }
  .progress-step.is-active .progress-marker::before {
    background-color: #2196F3;
  }
  .progress-step.is-complete .progress-marker::before, .progress-step.is-progress .progress-marker::before {
    background-color: #1976D2;
  }
  .progress-step.is-complete .progress-marker::after, .progress-step.is-progress .progress-marker::after {
    background-color: #868686;
  }
  .progress-step.is-progress-10 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 10%, #b6b6b6 10%);
  }
  .progress-step.is-progress-20 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 20%, #b6b6b6 20%);
  }
  .progress-step.is-progress-30 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 30%, #b6b6b6 30%);
  }
  .progress-step.is-progress-40 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 40%, #b6b6b6 40%);
  }
  .progress-step.is-progress-50 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 50%, #b6b6b6 50%);
  }
  .progress-step.is-progress-60 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 60%, #b6b6b6 60%);
  }
  .progress-step.is-progress-70 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 70%, #b6b6b6 70%);
  }
  .progress-step.is-progress-80 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 80%, #b6b6b6 80%);
  }
  .progress-step.is-progress-90 .progress-marker::after {
    background-image: linear-gradient(to right, #868686 90%, #b6b6b6 90%);
  }
  .progress-step:hover .progress-marker::before {
    background-color: #56ADF5;
  }
  .progress-tracker--text .progress-step:last-child, .progress-tracker--center .progress-step:last-child, .progress-tracker--right .progress-step:last-child {
    flex-grow: 1;
  }
  
  .progress-tracker--center {
    text-align: center;
  }
  .progress-tracker--center .progress-marker::before, .progress-tracker--center .progress-text--dotted::before {
    margin-left: auto;
    margin-right: auto;
  }
  .progress-tracker--center .progress-marker::after {
    right: -50%;
  }
  
  .progress-tracker--right {
    text-align: right;
  }
  .progress-tracker--right .progress-marker::before, .progress-tracker--right .progress-text--dotted::before {
    margin-left: auto;
  }
  .progress-tracker--right .progress-marker::after {
    right: calc(-100% + 12px);
  }
  
  .progress-tracker--spaced .progress-marker::after {
    width: calc(100% - 40px);
    margin-left: 20px;
    margin-right: 20px;
  }
  
  .progress-tracker--border {
    padding: 4px;
    border: 2px solid #333;
    border-radius: 32px;
  }
  
  .progress-tracker--theme-red .progress-step .progress-marker {
    color: #fff;
  }
  .progress-tracker--theme-red .progress-step .progress-marker::before {
    background-color: #666;
  }
  .progress-tracker--theme-red .progress-step .progress-marker::after {
    background-color: #666;
  }
  .progress-tracker--theme-red .progress-step .progress-text {
    color: #333;
  }
  .progress-tracker--theme-red .progress-step.is-active .progress-marker::before {
    background-color: #A62D24;
  }
  .progress-tracker--theme-red .progress-step.is-complete .progress-marker::before {
    background-color: #D93B30;
  }
  .progress-tracker--theme-red .progress-step.is-complete .progress-marker::after {
    background-color: #333;
  }
  .progress-tracker--theme-red .progress-step:hover .progress-marker::before {
    background-color: #DF7B74;
  }
  .progress-text--dotted::before {
    content: "";
    display: block;
    width: 12px;
    height: 12px;
    margin: 6px -2px;
    background-size: 12px 18px;
    background-image: repeating-radial-gradient(circle at center 6px, #b6b6b6, #b6b6b6 5px, rgba(182, 182, 182, 0.5) 5.5px, rgba(182, 182, 182, 0.01) 6px, transparent 100%);
  }
  
  .progress-text--dotted-1::before {
    height: 12px;
  }
  
  .progress-text--dotted-2::before {
    height: 30px;
  }
  
  .progress-text--dotted-3::before {
    height: 48px;
  }
  
  .progress-text--dotted-4::before {
    height: 66px;
  }
  
  .progress-text--dotted-5::before {
    height: 84px;
  }
  
  .progress-text--dotted-6::before {
    height: 102px;
  }
  
  .progress-text--dotted-7::before {
    height: 120px;
  }
  
  .progress-text--dotted-8::before {
    height: 138px;
  }
  
  .progress-text--dotted-9::before {
    height: 156px;
  }
  
  .progress-text--dotted-10::before {
    height: 174px;
  }
  
  .progress-text--dotted-11::before {
    height: 192px;
  }
  
  .progress-text--dotted-12::before {
    height: 210px;
  }
  
  .progress-tracker--text-top .progress-text {
    height: 100%;
  }
  .progress-tracker--text-top .progress-marker {
    top: -24px;
  }
  
  .progress-tracker--text-inline {
    overflow: hidden;
  }
  .progress-tracker--text-inline .progress-step, .progress-tracker--text-inline .progress-marker {
    display: flex;
    align-items: center;
  }
  .progress-tracker--text-inline .progress-marker {
    flex-grow: 1;
  }
  .progress-tracker--text-inline .progress-marker::after {
    top: auto;
  }
  .progress-tracker--text-inline .progress-text {
    position: relative;
    z-index: 30;
    max-width: 70%;
    white-space: nowrap;
    padding-top: 0;
    padding-bottom: 0;
    background-color: #fff;
  }
  .progress-tracker--text-inline .progress-marker .progress-text {
    display: inline-block;
  }
  .progress-tracker--text-inline .progress-title {
    margin: 0;
  }
  
  .progress-tracker--square .progress-marker::before {
    border-radius: 0;
  }
  .progress-tracker--square .progress-marker::after {
    top: auto;
    bottom: 0;
  }
  
  @media (max-width: 575px) {
    .progress-tracker-wrapper {
      overflow-x: auto;
      scroll-snap-type: x proximity;
    }
    .progress-tracker-wrapper .progress-step {
      min-width: 50%;
      scroll-snap-align: start;
    }
  }
  .progress-tracker--vertical {
    flex-direction: column;
  }
  .progress-tracker--vertical .progress-step {
    display: flex;
    flex: 1 1 auto;
  }
  .progress-tracker--vertical.progress-tracker--right .progress-step {
    flex-direction: row-reverse;
  }
  .progress-tracker--vertical .progress-marker::after {
    right: auto;
    top: 12px;
    left: 10px;
    width: 4px;
    height: 100%;
  }
  .progress-tracker--vertical .progress-text {
    padding: 0 12px 24px 12px;
  }
  
  @keyframes scale-up {
    from {
      opacity: 1;
      transform: translate(-50%, -50%) scale(0);
    }
    to {
      opacity: 0;
      transform: translate(-50%, -50%) scale(1);
    }
  }
  .anim-ripple .progress-link::before, .anim-ripple-large .progress-link::before, .anim-ripple-splash .progress-link::before {
    content: "";
    display: block;
    width: 24px;
    height: 24px;
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 30;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    visibility: hidden;
  }
  .anim-ripple .progress-link:not(:active)::before, .anim-ripple-large .progress-link:not(:active)::before, .anim-ripple-splash .progress-link:not(:active)::before {
    animation: scale-up 0.3s ease-out;
  }
  .anim-ripple .progress-link:focus::before, .anim-ripple-large .progress-link:focus::before, .anim-ripple-splash .progress-link:focus::before {
    visibility: visible;
  }
  
  .anim-ripple.progress-tracker--center .progress-link::before, .anim-ripple.progress-tracker--center .progress-link::after, .progress-tracker--center .anim-ripple .progress-link::before, .progress-tracker--center .anim-ripple .progress-link::after, .anim-ripple-large.progress-tracker--center .progress-link::before, .anim-ripple-large.progress-tracker--center .progress-link::after, .progress-tracker--center .anim-ripple-large .progress-link::before, .progress-tracker--center .anim-ripple-large .progress-link::after, .anim-ripple-splash.progress-tracker--center .progress-link::before, .anim-ripple-splash.progress-tracker--center .progress-link::after, .progress-tracker--center .anim-ripple-splash .progress-link::before, .progress-tracker--center .anim-ripple-splash .progress-link::after, .anim-ripple-double.progress-tracker--center .progress-link::before, .anim-ripple-double.progress-tracker--center .progress-link::after, .progress-tracker--center .anim-ripple-double .progress-link::before, .progress-tracker--center .anim-ripple-double .progress-link::after {
    left: 50%;
  }
  .anim-ripple.progress-tracker--right .progress-link::before, .anim-ripple.progress-tracker--right .progress-link::after, .progress-tracker--right .anim-ripple .progress-link::before, .progress-tracker--right .anim-ripple .progress-link::after, .anim-ripple-large.progress-tracker--right .progress-link::before, .anim-ripple-large.progress-tracker--right .progress-link::after, .progress-tracker--right .anim-ripple-large .progress-link::before, .progress-tracker--right .anim-ripple-large .progress-link::after, .anim-ripple-splash.progress-tracker--right .progress-link::before, .anim-ripple-splash.progress-tracker--right .progress-link::after, .progress-tracker--right .anim-ripple-splash .progress-link::before, .progress-tracker--right .anim-ripple-splash .progress-link::after, .anim-ripple-double.progress-tracker--right .progress-link::before, .anim-ripple-double.progress-tracker--right .progress-link::after, .progress-tracker--right .anim-ripple-double .progress-link::before, .progress-tracker--right .anim-ripple-double .progress-link::after {
    left: calc(100% - 12px);
  }
  
  .anim-ripple-splash .progress-link::before {
    width: 48px;
    height: 48px;
    box-shadow: 0 0 6px 6px rgba(0, 0, 0, 0.35);
  }
  
  .anim-ripple-double .progress-link::before, .anim-ripple-double .progress-link::after {
    content: "";
    display: block;
    width: 24px;
    height: 24px;
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 30;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    visibility: hidden;
    background: none;
    border: 3px solid rgba(0, 0, 0, 0.3);
  }
  .anim-ripple-double .progress-link:not(:active)::before, .anim-ripple-double .progress-link:not(:active)::after {
    animation: scale-up 0.3s ease-out 0s;
  }
  .anim-ripple-double .progress-link:not(:active)::after {
    animation-delay: 0.15s;
  }
  .anim-ripple-double .progress-link:focus::before, .anim-ripple-double .progress-link:focus::after {
    visibility: visible;
  }
  
  .anim--large .progress-link::before, .anim--large .progress-link::after {
    width: 48px;
    height: 48px;
  }
  
  .anim--path .progress-marker::after {
    background-image: linear-gradient(to right, #b6b6b6 50%, #868686 50%);
    background-size: 200% 100%;
    background-position: 0% 100%;
    transition: background-position 0.3s ease-out;
  }
  .progress-step.is-complete .anim--path .progress-marker::after {
    background-position: -100% 100%;
  }
  .anim--path .progress-step.is-complete .progress-marker::after {
    background-position: -100% 100%;
  }
  
  [dir=rtl] .progress-marker::after {
    right: auto;
    left: -12px;
  }
  [dir=rtl] .progress-tracker--center .progress-marker::after {
    left: -50%;
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
    <title>Document</title>
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
            <a class="mr-5 hover:font-bold text-xl" href="index.php">Home</a>
            <!-- <a class="mr-5 hover:font-bold text-xl" href="headercategories.php">Categories</a> -->
            <a class="mr-5 hover:font-bold text-xl" href="">Trip Book</a>
            <a class="mr-5 hover:font-bold text-xl" href="">Contact Us</a>
            <!-- <a class="mr-5 hover:font-bold text-xl" href="">Contact Us</a> -->
          </nav>
          <a href="./signup.php" class="h-button inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-xl">Sign Up
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg> -->
          </a>
          <a href="./login.php" class="h-button inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-xl">Sign In
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg> -->
          </a>
        </div>
      </header>
      <h1 class="heading12 center"> MOST FAMOUS PLACES OF INDIA</h1>
      <div class="container13">
        <div class="container12">
            <!-- <div class="img12"> -->
            <img src="./img/ajnata caves.webp" alt="" border="5">
            <!-- </div> -->
            <div class="text12">
                <h1 class="heading12">Ajanta Caves</h1>
                <p>Location: Maharshtra</p>
                <p>The caves at Ajanta represent a collection of Buddhist art from two periods. First monuments date to
                    2nd
                    and 1st centuries BCE and were created by the followers of Theravada Buddhism. Further monuments
                    were
                    added in the 5th and 6th centuries CE, during the Vakataka dynasty, by the followers of Mahayana
                    Buddhism. The monuments are masterpieces of Buddhist art and exhibited strong influence in India and
                    in
                    the broader region, especially in Java</p>
            </div>
        </div>
        <div class="container12">
            <!-- <div class="img12"> -->
            <!-- </div> -->
            <div class="text12">
                <h1 class="heading12">Taj Mahal</h1>
                <p>Location: Uttar Pradesh</p>
                <p>Taj Mahal is the finest example of the Indo-Islamic architecture. It was built in Agra on the bank of
                    the
                    Yamuna river as a mausoleum of Mumtaz Mahal, the Persian wife of the Mughal emperor Shah Jahan,
                    between
                    1631 and 1648. It was designed by Ustad Ahmad Lahori and built in white marble with inlay with
                    precious
                    and semi precious stones. The tomb is surrounded by four free-standing minarets. The complex also
                    includes the main gate, a mosque, a guesthouse, and surrounding gardens.[</p>
            </div>
            <img src="./img/taj mahal.jpg" alt="" border="5">
        </div>
        <div class="container12">
            <!-- <div class="img12"> -->
            <img src="./img/sun temple.webp" alt="" border="5">
            <!-- </div> -->
            <div class="text12">
                <h1 class="heading12">Sun Temple</h1>
                <p>Location: Odisha</p>
                <p>The Hindu temple was built in the 13th century and is one of the finest examples of the Kalinga
                    architecture. It represents the chariot of the solar deity Surya: on the outer sides, it has 24
                    wheels, carved of stone and richly decorated, and it is pulled by six horses. Other decorative
                    motifs include lions, musicians, dancers, and erotic scenes.</p>
            </div>
        </div>
        <div class="container12">
            <!-- <div class="img12"> -->
            <!-- </div> -->
            <div class="text12">
                <h1 class="heading12">Mahabalipuram</h1>
                <p>Location: Tamil Nadu</p>
                <p>The monuments around the town of Mamallapuram were built in the 7th and 8th centuries, under the
                    Pallava dynasty. There are different types of monuments: the rathas, which are chariot-shaped
                    temples (Dharmaraja Ratha pictured), the mandapas (rock-cut temples), rock reliefs, including the
                    giant Descent of the Ganges, and other temples and archaeological remains. The artistic expression
                    of the monuments was influential in the broader region, including Cambodia, Vietnam, and Java.</p>
            </div>
            <img src="./img/mahabalipuram.jpg" alt="" border="5">
            </div>
            <div class="container12">
                <!-- <div class="img12"> -->
                <img src="./img/khajuraho.jpg" alt="" border="5">
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Khajuraho Group of Monuments</h1>
                    <p>Location: Madhya Pradesh</p>
                    <p>This site comprises 23 temples, both Hindu and Jain, that were built in the 10th and 11th
                        centuries, during the Chandela dynasty. The temples are built in the Nagara style. They are
                        richly decorated with stone carvings and sculptures that depict sacred and secular motifs,
                        including depictions of domestic life, musicians, dancers, and amorous couples. A detail from
                        the Lakshmana Temple is pictured.</p>
                </div>
            </div>
</div>
<div class="fullwidth center11">  
    <div class="container1 separator"> 
      <section class="text-gray-600 body-font relative">
      <h1 class="heading12 center"> Follow This All Steps</h1>
</section>
      <ul class="progress-tracker progress-tracker--vertical center11 width100"> 
        <li class="progress-step is-complete"> 
          <div class="progress-marker"></div> 
          <div class="progress-text"> 
            <span class="h-font boxmake">Step 1</span> 
            <h3 class="h1-font">first creat account on website</h3> 
          </div> 
        </li> 
        <li class="progress-step is-complete"> 
          <div class="progress-marker" data-aos="fade-in"></div> 
          <div class="progress-text" data-aos="fade-in"> 
            <span class="h-font boxmake">Step 2</span> 
            <h3 class="h1-font">then log in your id</h3> 
          </div> 
        </li> 
        <li class="progress-step is-complete"> 
          <div class="progress-marker" data-aos="fade-in"></div> 
          <div class="progress-text" data-aos="fade-in"> 
            <span class="h-font boxmake">Step 3</span> 
            <h3 class="h1-font">if you are intrested in trip you fill the form--> click tripbook</h3> 
          </div> 
        </li> 
        <li class="progress-step is-complete"> 
          <div class="progress-marker" data-aos="fade-in"></div> 
          <div class="progress-text" data-aos="fade-in"> 
            <span class="h-font boxmake">Step 4</span> 
            <h3 class="h1-font">see the all places with 360^ view.. and you can aslo watch blog </h3> 
          </div> 
        </li> 
        <li class="progress-step is-complete"> 
          <!-- <div class="progress-marker"></div> 
          <div class="progress-text"> 
            <h3 class="h-font">Step 4</h3> 
            <h3 class="h1-font">Our professional will reach to you as soon as possible.</h3> 
          </div>  -->
        </li> 

        
      </ul>         
     
    </div> 
  </div>
<div class="container13">
            <div class="container12">
                <!-- <div class="img12"> -->
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Fatehpur Sikri</h1>
                    <p>Location: Uttar Pradesh</p>
                    <p>For about a decade in the second half of the 16th century, Fatehpur Sikri was the capital of the Mughal Empire under Emperor Akbar, until the capital was moved to Lahore in 1585 and the city was mostly abandoned. The site comprises a large collection of monuments and temples in the Mughal style, such as the Jama Masjid (the gate to the mosque, the Buland Darwaza, pictured), the Panch Mahal palace, and the Tomb of Salim Chishti.
                    </p>
                </div>
                <img src="./img/fateehpur sikhri.jpg" alt="" border="5">
            </div>
            <div class="container12">
                <!-- <div class="img12"> -->
                <img src="./img/pattadakhal.jpg" alt="" border="5">
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Group of Monuments at Pattadakal</h1>
                    <p>Location: Karnataka</p>
                    <p>This site comprises nine Hindu and one Jain temple that were built in the 7th and 8th centuries under the Chalukya dynasty. They were constructed in the Badami Chalukya style that blends influences from northern and southern India. The Temple of Virupaksha is pictured.
                    </p>
                </div>
            </div>
            <div class="container12">
                <!-- <div class="img12"> -->
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Elephanta Caves</h1>
                    <p>Location: Maharshtra</p>
                    <p>The cave complex, located on the Elephanta Island in Mumbai Harbour, was constructed mainly in the 5th and 6th centuries, with remains of human occupation dating back to the 2nd century BCE. The temples are dedicated to Shiva. The caves are decorated with stone carvings, some of them colossal. A statue of Trimurti Shiva, flanked by the dvarapalas, is pictured.
                    </p>
                </div>
                <img src="./img/elephant.jpg" alt="" border="5">
            </div>
            <div class="container12">
                <!-- <div class="img12"> -->
                <img src="./img/chola.jpg" alt="" border="5">
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Great Living Chola Temples</h1>
                    <p>Location: Tamil Nadu</p>
                    <p>This site comprises three Hindu temples built in the 11th and 12th centuries under the Chola dynasty. They represent some of the best examples of Dravidian architecture of the Chola period. They are made of stone and decorated with stone and bronze sculptures. Initially, only the Brihadisvara Temple (picture) was listed as a World Heritage Site, two other temples, the Brihadisvara Temple and the Airavatesvara Temple were added in 2004 and the site was renamed to the current name
                    </p>
                </div>
            </div>
            <div class="container12">
                <!-- <div class="img12"> -->
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Rock Shelters of Bhimbetka</h1>
                    <p>Location: Maharshtra</p>
                    <p>This site comprises five clusters of rock shelters in the foothills of the Vindhya Range. They contain rock paintings from the hunter-gatherer societies of the Mesolithic to the historical period. The nearby villages still maintain some cultural practices similar to those depicted in the paintings
                     </p>
                </div>
                <img src="./img/bhim.jpg" alt="" border="5">
            </div>
            <div class="container12">
                <!-- <div class="img12"> -->
                <img src="./img/pavagadh.JPG" alt="" border="5">
                <!-- </div> -->
                <div class="text12">
                    <h1 class="heading12">Champaner-Pavagadh</h1>
                    <p>Location: Gujarat</p>
                    <p>The site contains remains from several periods, from the Chalcolithic to the remains of Champaner, a short-lived capital of the Gujarat Sultanate in the 16th century. Important buildings include the Hindu temple Kalika Mata, Jain temples, and Jama Mosque (pictured) which features both Hindu and Muslim architectural elements, and the remains of water-managing systems, fortifications, and 14th-century temples.
                    </p>
                </div>
            </div>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
          offset: 300,
          duration: 10000,
      });
      </script>
    
</body>
</html>