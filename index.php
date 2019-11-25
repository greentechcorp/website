<?php
session_start();
if (isset($_SESSION['loggedin'])) {
	header('Location: index_logged.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert Company Name</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <ul id="nav" class="clearfix">
      <li><a href="#home">Homepage</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#maps">Map</a></li>
      <li><a href="#contact">Contact</a></li>
      <li style="float:right" ><a href="login.php">Login</a></li>
      <li style="float:right" ><a href="blog.php">Blog</a></li>
    </ul>
  <div id="home" class="section1">
    <div class="ptext">
      <span class="border">
        Insert Company Name
      </span>
    </div>
  </div>

  <section id="products" class="section section-light">
    <h2>Products</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in. Distinctio provident dolorem modi cumque illo enim quidem tempora deserunt nostrum voluptate labore repellat quisquam quasi cum suscipit dolore ab consequuntur, ad porro earum temporibus. Laborum ad temporibus ex, omnis!
    </p>
  </section>

  <div class="section2">
    <div class="ptext">
      <span class="border trans">
        Image Two Text
      </span>
    </div>
  </div>

  <section id="team" class="section section-dark">
    <h2>This is us!</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="section3">
    <div class="ptext">
      <span class="border trans">
        Image Three Text
      </span>
    </div>
  </div>


  <section id="maps" class="section section-dark">
     <h2>Maps</h2>

     <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    </head>
    <body>
      <!--The div element for the map -->
      <div id="map"></div>
      <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var AT = {lat: 55.9444, lng: -3.1870};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 16, center: AT});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: AT, map: map});
        }
      </script>
      <!--Load the API from the specified URL
      * The async attribute allows the browser to render the page while the API loads
      * The key parameter will contain your own API key (which is not needed for this tutorial)
      * The callback parameter executes the initMap() function
      -->
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArLQlqxDaDLUqsu7KnMhl0Ud1FNIA9-zo&callback=initMap">
      </script>
    </body>


  </section>

  <section id="contact" class="section section-light">
    <h2>Contact</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>


  <div class="section1">
    <div class="ptext">
      <span class="border">
        Woooooow
      </span>
    </div>
  </div>
  <footer>
    <div class="foot">
      <p>LEGAL STUFF</p>
    </div>
  </footer>
  <script src="sticky_bar.js"></script>
</body>
</html>
