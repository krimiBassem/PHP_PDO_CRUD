<?php session_start();
include('dbcon.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP PDO CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">

        <?php if (isset($_SESSION['message'])) :  ?>
          <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
        <?php
          unset($_SESSION['message']);
        endif;
        ?>

        <div class="card">
          <div class="card-header">
            <h3>PHP PDO CRUD
              <a href="student-add.php" class="btn btn-primary float-end">Add student</a>
            </h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM students";
                $statement = $conn->prepare($query);
                $statement->execute();

                $statement->setFetchMode(PDO::FETCH_OBJ); // FETCH_ASSOC  on ecrit comme ca  $row['fullname']; 
                $result = $statement->fetchAll();
                if ($result) {
                  foreach ($result as $row) {
                ?>
                    <tr>
                      <td><?= $row->id; ?></td>
                      <td><?= $row->fullname; ?></td>
                      <td><?= $row->email; ?></td>
                      <td><?= $row->phone; ?></td>
                      <td><?= $row->course; ?></td>
                      <td>
                        <a href="student-edit.php?id=<?= $row->id; ?>" class="btn btn-primary">Edit</a>
                      </td>
                      <td>
                        <form action="code.php" method="POST">
                          <button type="submit" name="delete_student" value="<?= $row->id; ?>" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="5">No Record Found</td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>