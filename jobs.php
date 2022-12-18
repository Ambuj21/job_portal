<?php include 'heading.php' ?>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate name</th>
      <th scope="col">Position</th>
      <th scope="col">Passout Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $server = "localhost";
      $username = "root";
      $password = "";
      $database = "jobs";

      $conn = mysqli_connect($server, $username, $password, $database);
    $sql = "SELECT name, apply, year from candidates";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    if($result -> num_rows > 0)
    {
      while($rows = $result->fetch_assoc())
      {
        echo'
    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['apply'].'</td>
      <td>'.$rows['year'].'</td>
    </tr>';
  }
}
else{
  echo"";
}
    ?>
  </tbody>
</table>
</div>