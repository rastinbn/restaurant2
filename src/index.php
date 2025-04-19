<?php
// Database connection and query for popular menu items
require '../src/php/db.php';
$popularty = "SELECT * FROM `menus` WHERE populary=1";
$resualt = mysqli_query($conn, $popularty);
if (mysqli_num_rows($resualt) > 0) {
    $products = mysqli_fetch_all($resualt , MYSQLI_ASSOC);
}else{
    $products = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- CSS Dependencies -->
  <link rel="stylesheet" href="css/output.css" />                               <!-- Tailwind CSS output -->
  <link rel="stylesheet" href="css/animate.css">                                <!-- Animation framework -->

  <!-- Carousel/Slider Dependencies -->
  <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">          <!-- Owl Carousel core -->
  <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">     <!-- Owl Carousel theme -->

  <!-- Additional Styling and Functionality -->
  <link rel="stylesheet" href="css/services/responsive-tabs.css">              <!-- Responsive tabs styling -->
  <link rel="stylesheet" href="css/services/responsive-tabs.min.css">
  <link rel="stylesheet" href="css/restuarant.css">                           <!-- Custom restaurant styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- Icons -->
  
  <!-- JavaScript Dependencies -->
  <script src="js/jquery-3.6.0.min.js"></script>                              <!-- jQuery core -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />  <!-- Flowbite UI -->
</head>

<body class="dark:bg-gray-900">
    <?php
    // Session management for navigation
    session_start();
    // Display different navbar based on login status
    if (isset($_SESSION['statate']) && $_SESSION['statate'] == true){
        include "php/navbarlogin.php";    // Logged in navbar
    }else{
        include "php/navbarno.php";       // Guest navbar
    }
    ?>
    <div class="hero-section flex flex-col gap-10 justify-center items-center mt-20 text-white">
      <h1 class="font-bold text-6xl">

        We give you best service
      </h1>
      <p class="text-balance italic w-[400px] text-xl text-center">we try to give you best time in the resturant and
        have a good taste to response a good feedback</p>
      <button
        class="block rounded-md bg-orange-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-orange-700 dark:bg-purple-500 dark:hover:bg-purple-700 ">Join
        us!</button>
    </div>
  </section>


  <main class="">

    <!-- popular item -->
    <section class="mt-[10px]" id="popular">
      <h1 class="font-sans text-2xl ml-3 font-bold dark:text-white">Popular Item:</h1>
      <div id="popularproduct" class="owl-carousel owl-theme animate__animated animate__backInRight ">
<!--        poroduct box-->
        <?php foreach ($products as $product): ?>
            <div class="flex flex-col h-fit rounded  shadow-lg m-4  ">
                <div class="relative h-64 w-full popular-image-hover rounded">
                    <img class="w-full h-full object-cover z-1 rounded" src="<?= $product['imageurl'] ?>" alt="${data[index].name}">
                    <div class="absolute top-[35%] text-white z-[-1] duration-500 transition text-hover" >
                        <h1 class="text-center text-xl font-bold"><?= $product['name'] ?></h1>
                        <p class="text-center text-lg"><?= $product['description'] ?></p>
                    </div>
                </div>

            </div>
          <?php endforeach; ?>
      </div>
    </section>
    <!-- the finest -->
      <section class="items-center mx-16 md:mx-16 flex flex-col md:flex-row gap-6 md:gap-[60px] bg-orange-200/50 h-auto md:h-[35rem] rounded mt-10 dark:bg-gray-700" id="finest">
        <div class="w-[60%] md:w-[50%]">
          <img src="img/3.png" class="w-full h-auto finest-imagebox" alt="">
        </div>
        <div class="grow pt-8 md:pt-[150px] px-4 md:pl-5 finest-textbox">
          <h1 class="text-2xl md:text-3xl font-bold text-orange-500 tracking-normal finest-header mb-3 dark:text-white">Thai Cuisine</h1>
          <h1 class="text-2xl md:text-3xl font-bold text-orange-500 tracking-normal finest-header mb-3 dark:text-white">The Finest</h1>
          <p class="break-words w-full md:w-[60%] dark:text-white">At Thai Phuket we thrive at creating the best Thai dish.
        With over 50 dishes to choose from, explore what our menu
        has to offer.</p>
          <button class="mt-5 bg-orange-300 text-white w-[50%] md:w-[30%] text-start rounded flex flex-row justify-between px-3 py-2 items-center transition duration-500 hover:bg-orange-200 hover:text-orange-500 dark:bg-gray-500 hover:text-white dark:hover:bg-gray-600">
        More <i class="fa fa-arrow-right"></i>
          </button>
        </div>
      </section>
     
      <!-- chefs section -->
      <section class="mt-7 flex flex-col items-center flex-wrap">
       <h1 class="font-bold text-3xl  mb-7 text-white">Our Chefs</h1>

          <div class="flex flex-row gap-8" id="chefs">
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-lg" src="img/cheif/chef%201.jpg" alt="" />
              </a>
              <div class="p-5">

                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">John northman</h5>

                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">station chief</p>

              </div>
          </div>
              <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="img/cheif/1%20(2).jpg" alt="" />
                  </a>
                  <div class="p-5">

                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">John northman</h5>

                      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">station chief</p>

                  </div>
              </div>
              <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="img/cheif/1%20(3).jpg" alt="" />
                  </a>
                  <div class="p-5">

                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">John northman</h5>

                      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">station chief</p>

                  </div>
              </div>
          </div>
      </section>
  </main>


  <footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
          <div class="sm:flex sm:items-center sm:justify-between">
              <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">

                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">INTENSE</span>
              </a>
              <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                  <li>
                      <a href="#" class="hover:underline me-4 md:me-6">About</a>
                  </li>
                  <li>
                      <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                  </li>
                  <li>
                      <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                  </li>
                  <li>
                      <a href="#" class="hover:underline">Contact</a>
                  </li>
              </ul>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="#" class="hover:underline">RastinBa™</a>. All Rights Reserved.</span>
      </div>
  </footer>


  <script src="js/custom.js"></script>
  <script src="js/Slider/owl.carousel.min.js"></script>
  <script src="js/filtering/isotope.pkgd.min.js"></script>
  <script src="js/way Point/jquery.waypoints.min.js"></script>
  <script src="js/Service tabs/jquery.responsiveTabs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
