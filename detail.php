<?php
include_once('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM barang WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Barang</title>
</head>
<body>
    <nav class="bg-green-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-semibold text-lg"><a href="index.php">KIOS KY PURO</a></div>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <div class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="bg-green-500 text-center py-4">
                <h2 class="text-white   text-xl font-bold">Data Barang</h2>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Kode Barang: </p>
                    <p class="text-lg"><?= $data['kode_barang'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Nama:</p>
                    <p class="text-lg"><?= $data['nama_barang'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Kategori Barang:</p>
                    <p class="text-lg"><?= $data['kategori_barang'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Stok Barang:</p>
                    <p class="text-lg"><?= $data['stok'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Expire:</p>
                    <p class="text-lg"><?= $data['expire'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Harga Barang:</p>
                    <p class="text-lg"><?= $data['harga_barang'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Deskripsi Barang:</p>
                    <p class="text-lg"><?= $data['deskripsi'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Tanggal Barang:</p>
                    <p class="text-lg"><?= $data['tanggal_masuk'] ?></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Status Barang:</p>
                    <p class="text-lg"><?= $data['status'] ?></p>
                </div>


                <div class="mb-4">
                    <a href="index.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4
                    rounded inline-block mb-1">Kembali</a>
                    <a href="edit.php?id=<?= $data['id'] ?>" class="bg-yellow-500 hover:bg-yellow-700
                    text-white font-bold py-2 px-4 rounded inline-block mb-1">Edit</a>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>






































<?php
echo "Sitti Nispa";
?>