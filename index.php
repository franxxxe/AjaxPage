<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script defer type="text/javascript" src="./assets/JS_Index.js?ver=<?php echo time(); ?>"></script>
  <link rel="stylesheet" href="./assets/CSS_Index.css?ver=<?php echo time(); ?>">
  <title>AJAX Page</title>
</head>
<body>

  <div class="main-root">
    <div class="main-header">
      <div class="header-box1">
        <h2>Ajax Page</h2>
        <input type="text" placeholder = "Type to Check">
      </div>
      
      <div class="main-navigation">
        <ul>
          <li onclick="navLink(1)" class="nav-li1 active-nav">Home</li>
          <li onclick="navLink(2)" class="nav-li2 inactive-nav">About</li>
          <li onclick="navLink(3)" class="nav-li3 inactive-nav">Contact</li>
        </ul>
      </div>
    </div>

    <div class="main-container">
      <div class="AJAX-Load-Content">
        <?php include "./components/home.php"?> 
      </div>
    </div>
  </div>
  
</body>
</html>