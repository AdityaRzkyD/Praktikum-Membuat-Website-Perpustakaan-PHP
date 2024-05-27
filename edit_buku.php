<?php
    include_once("./connect.php");

    $ID = $_GET["ID"];

    $query_get_data = mysqli_query($db,"SELECT * FROM buku WHERE ID=$ID");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE buku SET Nama_Buku='$nama', ISBN='$isbn', Unit=$unit WHERE ID=$ID");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
</head>
<body>
    <h1>Form EDIT Data Buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku["Nama_Buku"]?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku["ISBN"]?>" type="text" id="isbn" name="isbn">

        <br>
        <br>

        <label for="unit">Unit</label>
        <input value="<?php echo $buku["Unit"]?>" type="number" id="unit" name="unit">

        <br>
        <br>

        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <br>

    <a href="./buku.php">Kembali Ke Halaman Buku</a>
</body>
</html>