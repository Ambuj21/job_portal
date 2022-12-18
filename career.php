
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="careerstyle.css">
    <title>Career</title>
</head>
<body>

    <div class="container-itmes">
    <nav>
        <h4>JOB PORTAL</h4>
        <p>Best Jobs available matching your skills</p>
    </nav>
    </div>
    <div class="container">
      <?php 
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "jobs";

      $conn = mysqli_connect($server, $username, $password, $database);

      $sql = "SELECT `id`, `cname`, `pos`, `jobdesc`, `skills`, `CTC` from job";
      $result = mysqli_query($conn, $sql);
      if($result -> num_rows > 0)
      {
         
        while($rows = $result->fetch_assoc())
        {
          echo'<div class="jumbotron" style ="height : 350px">
                  <h3>'.$rows['pos'].'</h3>
                  <h4>'.$rows['cname'].'</h4>
                  <p>'.$rows['jobdesc'].'</p>
                  <p>'.$rows['skills'].'</p>
                  <p>'.$rows['CTC'].'</p>
                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                            Apply
                          </button>
              </div>';
        }
      }
      ?>
    </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form Action = "config.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name = "name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class = "form-control" name="Apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualifications</label>
            <input type="text" class="form-control" name = "Qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Passout Year</label>
            <input type="text" class="form-control" name = "Year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name = "applyNow" class="btn btn-primary">Apply</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>