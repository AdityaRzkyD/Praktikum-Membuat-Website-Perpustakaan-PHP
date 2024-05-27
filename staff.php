<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <h1>Daftar Staff</h1>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Telepon</td>
            <td>Email</td>
            <td>Action</td>
        </tr>

        <?php foreach($query as $data) {?>
            <tr>
                <td><?php echo $data["Nama"] ?></td>
                <td><?php echo $data["Telp"] ?></td>
                <td><?php echo $data["Email"] ?></td>
                <td>
                    <a href=<?php echo "edit_staff.php?ID=" . $data["ID"] ?>>EDIT</a> |
                    <a href=<?php echo "hapus_staff.php?ID=" . $data["ID"] ?>>DELETE</a>
                </td>
            </tr>
        <?php  }?>
    </table>

    <br>
    <a href="./tambah_staff.php">Tambah Data Staff</a>
    <br>
    <a href="./index.php">Kembali Ke Halaman Utama</a>
</body>
</html>