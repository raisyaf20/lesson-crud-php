<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-auto col-md-6">
                <form action="add_student.php" method="post">
                    <h3>Add Student</h3>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" name="nisn" class="form-control" id="nisn">
                    </div>
                    <div class="mb-3">
                        <label for="nm" class="form-label">Full Name</label>
                        <input type="text" name="nama" class="form-control" id="nm">
                    </div>
                    <div class="mb-3 form-check">
                        <label for="floatingTextarea2" class="form-label">Sreet Adrees</label>

                        <div class="form-floating">
                            <textarea class="form-control" name="adrres" placeholder="your adrres street,city" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <section class="mt-5">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('conection.php');
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM siswa");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nisn'] ?></td>
                            <td><?php echo $row['full_name'] ?></td>
                            <td><?php echo $row['addres'] ?></td>
                            <td class="text-center">
                                <a href="edit_data.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                <a href="delete_data.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>