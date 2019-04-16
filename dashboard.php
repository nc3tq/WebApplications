<!-- // Aria Kumar(ak8fk) and Neha Chopra(nc3tq)
 -->
<?php

if (!isset($_COOKIE['email']) && !isset($_SESSION['email'])) {
  header('Location: signin.php');
}

?>
<!DOCTYPE html>
<html lang="en" class="gr__cs_virginia_edu">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- required to handle IE -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> if you downloaded bootstrap to your computer  -->
  <link rel="stylesheet" href="index.css">
  <!-- required scripts for IE -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="nav.css">


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Awesome Fonts -->
  <link href="style/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <style>
    #name {
      font-weight: bold;
    }
  </style>




  <title>Home</title>

</head>

<body data-gr-c-s-loaded="true">

  <script src="./WebApplications/jquery.min.js"></script>
  <script src="./WebApplications/bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="dashboard.html">Tutor Hoos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CS 2150
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="cs2150tutors.html">Tutors</a>
            <a class="dropdown-item" href="cs2150favorite.html">Favorited Tutors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="forums.html">Forum</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CS 2110
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="cs2110tutors.html">Tutors</a>
            <a class="dropdown-item" href="cs2110favorite.html">Favorited Tutors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="forums.html">Forum</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COMM 2010
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="commerce2010tutors.html">Tutors</a>
            <a class="dropdown-item" href="comm2010favorite.html">Favorited Tutors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="forums.html">Forum</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COMM 2020
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="commerce2020tutors.html">Tutors</a>
            <a class="dropdown-item" href="comm2020favorite.html">Favorited Tutors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="forums.html">Forum</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EVSC 2020
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="evsctutors2020tutors.html">Tutors</a>
            <a class="dropdown-item" href="evsc2020favorite.html">Favorited Tutors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="forums.html">Forum</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 pull-right" style="padding-top: 10px;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>


      <!-- Navigation bar for all the classes enrolled in. Students can select which website to go to:
      either browse for tutors depending on the specific class or see their previous favorited tutors -->

    </div>
    <ul class="navbar-nav mr-auto my-lg-0 pull-right">
      <li class="nav-item">
        <a class="nav-link" style="align-content:right;" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="align-content:right;" href="signin.php">Log Out</a>
      </li>
    </ul>
  </nav>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">

      <h1 class="display-4">Welcome Back, <?php if (isset($_COOKIE['name_user'])) {
                                            echo $_COOKIE['name_user'];
                                          } else {
                                            echo 'Hello!';
                                          } ?></h1>
      <p class="lead">Choose from your favorited tutors below or select a class and browse for one! </p>
    </div>
  </div>
  <!-- This is a display of all the favorited tutors. It is useful especially if a student wants to get quickly
      get into contact with one and schedule a meet up without having to search. -->

  <h3><b> COMM 2010: </b></h3>
  <table border="1px" class="bios" class="hoverTable">

    <tr>
      <td id="comp">
        <font color="yellow" size="5%"><i class="fas fa-star"></i></font>
        <img src="images/blank.jpg"><br>
        <div id="name">John Smith</div><br>
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Donec at ex vitae lectus vehicula congue. Mauris dictum dictum elit. Aenean semper
        augue ut erat gravida ornare. Fusce imperdiet posuere metus.


      </td>
      <td id="comp">
        <font color="yellow" size="5%"><i class="fas fa-star"></i></font>
        <img src="images/blank.jpg"><br>
        <div id="name">Jane Doe</div><br>
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Donec at ex vitae lectus vehicula congue. Mauris dictum dictum elit. Aenean semper
        augue ut erat gravida ornare. Fusce imperdiet posuere metus.


      </td>
      <td id="cogsci">
        <font color="yellow" size="5%"><i class="fas fa-star"></i></font>
        <img src="images/blank.jpg"><br>
        <div id="name">John Smith</div><br>
        Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Donec at ex vitae lectus vehicula congue. Mauris dictum dictum elit. Aenean
        semper augue ut erat gravida ornare. Fusce imperdiet posuere metus.
      </td>



    </tr>

  </table>

  <h3><b> CS 2150: </b></h3>

  <table border="1px" class="bios">
    <tr>
      <td id="comm">
        <font color="yellow" size="5%"><i class="fas fa-star"></i></font>
        <img src="images/blank.jpg"><br>
        <div id="name">Jane Doe</div><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ex vitae
        lectus vehicula congue. Mauris dictum dictum elit. Aenean semper augue ut erat gravida ornare. Fusce
        imperdiet posuere metus.


      </td>
      <td id="comm">
        <font color="yellow" size="5%"><i class="fas fa-star"></i></font>
        <img src="images/blank.jpg"><br>
        <div id="name">John Smith</div><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ex vitae
        lectus vehicula congue. Mauris dictum dictum elit. Aenean semper augue ut erat gravida ornare. Fusce
        imperdiet posuere metus.

        xt
      </td>
      <td id="envsci">
        <font color="yellow" size="5%"><i class="fas fa-star"></i></font>
        <img src="images/blank.jpg"><br>
        <div id="name">Jane Doe</div><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
        at ex vitae lectus vehicula congue. Mauris dictum dictum elit. Aenean semper augue ut erat gravida
        ornare. Fusce imperdiet posuere metus.

      </td>
    </tr>
  </table>


</body>

<script src="js/backdashboard.js"></script>

<?php
session_start();

$hostname = "localhost";
$database = "project";
$username = "nc3tq";
$password = "WebPL4640";


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully";
}


if (isset($_GET['name'])) {
  $name = $_GET['name'];
  $sql = "SELECT * FROM Tutor WHERE tutor_name='$name'";

  $result = $conn->query($sql);

  if (mysqli_num_rows($result) > 0) {

    if ($row = $result->fetch_assoc()) {
      echo '<table style="width: 100%;" border="1px" class="bios" class="hoverTable">';
      echo '<tr>';
      echo '<td>';
      echo '<font color="yellow" size="5%"><i class="fas fa-star"></i></font>';
      echo '<img src="images/blank.jpg"><br>';
      echo '<div id="name">'.  $row["tutor_name"]. '</div><br>';
      echo "<br>";
      echo $row["tutor_bio"];
      echo "<br>";
      echo $row["tutor_classes"];
      echo "<br>";
      echo '</td>';
      echo '</tr>';
    }
    echo '</table>';
  } else {
    echo "0 results";
  }
} else {

  echo '<h3><b> Tutors </b></h3>';

  $sql = "SELECT * FROM Tutor";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      echo '<table border="1px" class="bios" class="hoverTable">';
      echo '<tr>';
      echo '<td>';
      echo '<font color="yellow" size="5%"><i class="fas fa-star"></i></font>';
      echo '<div id="name">'.  $row["tutor_name"]. '</div><br>';
      echo "<br>";
      echo $row["tutor_bio"];
      echo "<br>";
      echo $row["tutor_classes"];
      echo "<br>";
      echo '</td>';
      echo '</tr>';
    }
  } else {
    echo "0 results";
  }
}

?>


</html>