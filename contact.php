<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
    #contact {
        min-height: 430px;
    }
    </style>
    
    <title>let's Discuss-coading forum</title>
</head>

<body>
<?php include 'partials/_dbconnect.php';  ?>
    <?php include 'partials/_header.php';  ?> 

    <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
    $result = mysqli_query($conn,$sql);
   
    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

    

  }
  ?>

   <div class="container mt-3" id="contact">
  <h1>Contact us for your concerns</h1>
    <form action="contact.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
</div>

    <?php include 'partials/_footer.php';  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>