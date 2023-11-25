
<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    .navbar {
      overflow: hidden;
      background-color:#333;
  position: fixed;
  top: 0;
  width: 100%;
}
h1,
p{
  color: #fff;
}
.jobs{
 border: 1px solid black;
 box-shadow: 5px 5px 4px 5px grey;
 margin:10px;
 padding: 10px;
}
    </style>

    <title>Career</title>
</head>
<body>
 <!--div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
    </div>
</nav><br><br>-->
<div class="row">
  <div class="col-12">
   <div class="jumbotron jumbotron-fluid" style="background-image: url(bg2.jpg); background-size:cover;">
   <div class="container">
      <h1 class="display-4">Job Portal</h1>
      <p class="lead">Best Jobs available matching by our skills</p>
    </div>
  </div>
</div>
</div>
<div class="row">
<?php
$sql="SELECT `cname`,`position`,`jdesc`,`CTC`,`skills` from 'jobs'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
  while($rows=$result->fetch_assoc()){
    echo'
    <div class="col-md-4">
    <div class="jobs">
    <h3 style="text-align: center;">'.$rows['position'].'</h3>
    <h4 style="text-align: center;">'.$rows['cname'].'</h4>
    <p style="color: black; text-align:justify;">'.$rows['Jdesc'].'</p>
    <p style="color: black;"><b>skills Required:</b>'.$rows['skills'].'</p>
    <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
    Apply Now
  </button>
    </div>
    </div>';
    }
    }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for Jobs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" name="apply" class="form-control">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"name="new_apply">Apply</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>