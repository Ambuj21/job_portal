<?php include 'heading.php'?>
<div id="main" style="padding-top: 40px;">
        <div class="content">
        <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" 
  data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    POST
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form Action = "config.php" method = "POST">
    <div class="mb-3">
      <label for="Comapny Name" class="form-label">Company Name</label>
      <input type="text" class="form-control" name = "cname">
    </div>
      <div class="mb-3">
      <label for="exampleInputPosition" class="form-label">Postion</label>
      <input type="text" class="form-control" name = "pos">
    </div>
    <div class="mb-3">
      <label for = "jobDescription"
      class = "form-label">Job Description</label>
      <input type="text" class="form-control" name ="jobdesc">
    </div>
    <div class="mb-3">
      <label for = "skills"
      class = "form-label">Skills</label>
      <input type="text" class="form-control" name ="skills">
    </div>
    <div class="mb-3">
      <label for = "CTC"
      class = "form-label">CTC</label>
      <input type="text" class="form-control" name = "CTC">
    </div>
    <button type="submit" class="btn btn-primary" name = "job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company</th>
      <th scope="col">Postion</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
    <?php
    $server = "localhost";
      $username = "root";
      $password = "";
      $database = "jobs";

      $conn = mysqli_connect($server, $username, $password, $database);
      $sql = "SELECT * From job";
      $result = mysqli_query($conn, $sql);
      if($result -> num_rows > 0)
      { 
        $i = 0;
        while($rows = $result->fetch_assoc())
       { 
        echo "
        <tbody>
        <tr>
           <td>".++$i."</td>
           <td>".$rows['cname'] ."</td>
           <td>".$rows['pos']."</td>
           <td>".$rows['CTC']."</td>
        </tr>
        ";
       }
      }
      else{
        echo "";
      }
    ?>
    </tbody>
</table>
        </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>