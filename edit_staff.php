<?php
    include_once("./connect.php");

    $ID = $_GET["ID"];

    $query_get_data = mysqli_query($db,"SELECT * FROM staff WHERE ID=$ID");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE staff SET Nama='$nama', Telp='$telp', Email='$email' WHERE ID=$ID");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT Staff</title>
</head>
<body>
    <h1>Form EDIT Data Staff</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff["Nama"]?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="telp">Telepon</label>
        <input value="<?php echo $staff["Telp"]?>" type="text" id="telp" name="telp">

        <br>
        <br>

        <label for="email">Email</label>
        <input value="<?php echo $staff["Email"]?>" type="email" id="email" name="email">

        <br>
        <br>

        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <br>

    <a href="./staff.php">Kembali Ke Halaman Staff</a>
</body>
</html>