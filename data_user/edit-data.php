<?php
include_once('../koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM login WHERE id = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    mysqli_query($conn, "UPDATE login SET nama = '$nama', password = '$password', email = '$email', level = '$level' WHERE id='$id'");
    header("Location: data.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data User</title>
</head>

<body>
    <nav class="bg-green-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-semibold text-lg"><a href="index.php">KIOS KY PURO</a></div>
            <div>
    </nav>
    <div class="container mx-auto p-8">
        <form method="POST">
            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-2">Edit Data User</h2>
                <p class="text-gray-500">Mohon isi Data dibawah ini dengan benar. </p>
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-md py-2 px-3 w-full"
                    value="<?= $data['nama'] ?>">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="text" id="email" name="email" class="border border-gray-300 rounded-md py-2 px-3 w-full"
                    value="<?= $data['email']?>">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password :</label>
                <input type="text" id="password" name="password" class="border border-gray-300
                rounded-md py-2 px-3w-full" value="<?= $data['password']?>">
            </div>

            <div class="mb-4">
                <label for="level" class="block text-gray-700 text-sm font-bold mb-2">Level:</label>
                <input type="text" id="level" name="level" class="border border-gray-300
                rounded-md py-2 px-3 w-full" value="<?= $data['level']?>">
            </div>

            <div>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"
                    name="tambah">Edit</button>
                <a href="index.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4
                    rounded inline-block mb-1">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>