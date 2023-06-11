<?php
include('conection.php');

$id = $_GET['id'];
$query = "SELECT * FROM siswa WHERE id_siswa = $id LIMIT 1";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update_data.php" method="POST">

                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control" />
                                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>" />
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="nm" value="<?php echo $row['full_name'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Addres</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['addres'] ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>