<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border="1">
        <tr>
            <td>Nama Buku</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>Action</td>
        </tr>

        <?php foreach($query as $data) {?>
            <tr>
                <td><?php echo $data["Nama_Buku"] ?></td>
                <td><?php echo $data["ISBN"] ?></td>
                <td><?php echo $data["Unit"] ?></td>
                <td>
                    <a href=<?php echo "edit_buku.php?ID=" . $data["ID"] ?>>EDIT</a> |
                    <a href=<?php echo "hapus_buku.php?ID=" . $data["ID"] ?>>DELETE</a>
                </td>
            </tr>
        <?php  }?>
    </table>

    <br>
    <a href="./tambah_buku.php">Tambah Data Buku</a>
    <br>
    <a href="./index.php">Kembali Ke Halaman Utama</a>
</body>
</html>