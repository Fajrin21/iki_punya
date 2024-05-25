<?php
include_once('../koneksi.php');

if (isset($_GET['query'])) {
    $cari = $_GET['query'];
    $query = mysqli_query($conn, "SELECT * FROM login WHERE nama LIKE '%$cari%'");
} else {
    $query = mysqli_query($conn, "SELECT * FROM login");
}
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data User</title>
</head>

<body class="flex">
    <!-- Sidebar -->
    <div class="w-64 bg-green-500 text-white h-screen p-4">
        <div class="text-2xl font-bold mb-4"><a href="index.php">KIOS KY PURO</a></div>
        <ul>
            <li class="mb-2">
                <a href="../index.php" class="block py-2 px-4 rounded hover:bg-green-600">Data Barang</a>
            </li>
            <li class="mb-2">
                <a href="data.php" class="block py-2 px-4 rounded hover:bg-green-600">Data User</a>
            </li>
            <li class="mb-2">
                <a href="../logout.php" class="block py-2 px-4 rounded hover:bg-green-600">Logout</a>
            </li>
        </ul>
    </div>

    <div class="flex-1 p-8">
        <h1 class="text-3xl font-bold mb-5">Data User</h1><br>
        <table class="table-auto border-collapse w-full">
            <thead>
                <form action="data.php" method="GET">
                    <input type="text" name="query" placeholder="Masukkan Nama Barang..."
                        class="border px-4 py-2 rounded inline-block mb-1">
                    <button type="submit"
                        class="bg-yellow-500 hover:bg-white-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Cari</button>
                </form>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Password</th>
                    <th class="border px-4 py-2">Level</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($query)) :
                ?>
                <tr>
                    <td class="border px-4 py-2"><?= $no ?></td>
                    <td class="border px-4 py-2"><?= $data['nama'] ?></td>
                    <td class="border px-4 py-2"><?= $data['email'] ?></td>
                    <td class="border px-4 py-2"><?= $data['password'] ?></td>
                    <td class="border px-4 py-2"><?= $data['level'] ?></td>
                    <td class="border px-4 py-2">
                        <a href="detail-data.php?id=<?= $data['id'] ?>" class="bg-green-500 hover:bg-green-700
                            text-white font-bold py-2 px-4 rounded inline-block mb-1">Detail</a>
                        <a href="edit-data.php?id=<?= $data['id'] ?>" class="bg-yellow-500 hover:bg-yellow-700
                            text-white font-bold py-2 px-4 rounded inline-block mb-1">Edit</a>
                        <a href="hapus-data.php?id=<?= $data['id'] ?>" class="bg-red-500 hover:bg-red-700
                            text-white font-bold py-2 px-4 rounded inline-block mb-1" onclick="return confirm
                            ('Yakin Ingin Menghapus Data ini?')">Delete</a>
                    </td>
                </tr>
                <?php
                $no++;
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>