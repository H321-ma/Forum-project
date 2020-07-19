<?php
session_start();


echo '  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/FORUM PROJECT">Let\'s Discuss</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/fORUM PROJECT">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Top Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

       $sql = "SELECT category_name,category_id FROM `categories`";
       $result = mysqli_query($conn,$sql);
      
      while($row = mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item" href="threats.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a>';
        
      }  
     echo '</div>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="contact.php" tabindex="-1" >Contact Us</a>
    </li>
  </ul>
    <div class="row mx-2">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
      echo '
  <form class="form-inline my-2 my-lg-0 method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   <p class="text-light my-0" > Welcome ' .$_SESSION['useremail']. '</P>
   <a href="Partials/_logout.php" class="btn btn-success ml-2" >Logout</a>
</form>';
    }
    else{
      echo '
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      
  </form>
  <button class="btn btn-success ml-2" data-toggle="modal" data-target="#loginmodal">Login</button>
  <button class="btn btn-success mx-2" data-toggle="modal" data-target="#signupmodal">Signup</button>
    ';
  }

  echo ' </div>
</div>
</nav>';

include 'partials/_loginmodal.php';
include 'partials/_signupmodal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=='true'){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> You can now login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

?>