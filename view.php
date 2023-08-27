<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include 'connection.php';
    $slt = "SELECT * FROM `studenttable`";
    $res = mysqli_query($conn,$slt);
    if($res){
        while($row = mysqli_fetch_assoc($res)){
            $id = $row['Id'];
            $Name = $row['Name'];
            $Email = $row['Email'];
            $Phone = $row['Phone'];
            $Address = $row['Address'];
            echo "<div class='container'>
            <div class='row'>
                <div class='col-3 m-2'>
                    <div class='card bg-light'>
                        <div class='card-body'>
                          <div class='card-title  text-primary '>ID : $id</div>
                            <div class='card-title text-primary '>Name : $Name</div>
                            <div class='card-title text-primary '>Name : $Email</div>
                            <div class='card-title text-primary '>Name : $Phone</div>
                            <div class='card-title text-primary '>Name : $Address</div>
                            <a href='delete.php?deleteid=$id' class='btn btn-outline-danger'>Delete</a>
                            <a href='update.php?updateid=$id' class='btn btn-outline-success'>Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
        }
    }
    mysqli_close($conn);
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>