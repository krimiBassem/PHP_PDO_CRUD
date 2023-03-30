<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert data into database using PHP PDO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-8 mt-4">

        <div class="card">
          <div class="card-header">
            <h3>Insert data into database using PHP PDO
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h3>
          </div>
          <div class="card-body">

            <form action="code.php" method="POST">
                <div class="md-3">
                    <label>Full Name</label>
                    <input type="text" name="fullname" class="form-control" />
                </div>
                <div class="md-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" />
                </div>
                <div class="md-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" />
                </div>
                <div class="md-3">
                    <label>Course</label>
                    <input type="text" name="course" class="form-control" />
                </div>
                <div class="md-3">
                    <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                </div>
            </form>
             
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>