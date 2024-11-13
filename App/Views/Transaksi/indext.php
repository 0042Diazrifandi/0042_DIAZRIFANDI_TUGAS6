<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General Styling */
        body {
            background-color: #f0f8ff; /* Light background for body */
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        nav {
            background-color: #87ceeb; /* Light sky blue */
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav a {
            color: #ffffff; /* White text */
            font-weight: bold;
            text-decoration: none;
        }

        nav a:hover {
            color: #e0ffff; /* Light cyan on hover */
        }

        /* Container Styling */
        .container {
            background-color: #ffffff; /* White background for content */
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        /* Heading Styling */
        h2 {
            color: #4682b4; /* Steel blue */
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Button Styling */
        .btn-blue {
            color: #ffffff; /* White text for button */
            background-color: #87cefa; /* Light baby blue */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-bottom: 20px; /* Space below button */
        }

        .btn-blue:hover {
            background-color: #4682b4; /* Darker blue on hover */
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #dee2e6; /* Light grey border */
        }

        th {
            background-color: #b0e0e6; /* Light blue for header */
            color: #343a40; /* Dark grey text for header */
            font-weight: bold;
        }

        td {
            background-color: #f5fafd; /* Light background for table data */
        }

        /* Action Buttons */
        .btn-edit, .btn-hapus {
            padding: 5px 10px;
            color: #ffffff;
            border-radius: 5px;
            font-size: 0.9rem;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #ffa500; /* Orange */
        }

        .btn-hapus {
            background-color: #dc3545; /* Red */
        }

        .btn-edit:hover {
            background-color: #ff8c00; /* Darker orange on hover */
        }

        .btn-hapus:hover {
            background-color: #c82333; /* Darker red on hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php?controller=home&action=index">Home</a></li>
                <li><a href="index.php?controller=barang&action=index">Barang</a></li>
                <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
                <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
            </ul>
        </nav>

        <h2>Daftar Transaksi</h2>
        <a href="index.php?controller=transaksi&action=create" class="btn btn-blue">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>Kode Barang</th>
                    <th>ID Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal Transaksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksiList as $key => $transaksi): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $transaksi['id_transaksi'] ?></td>
                        <td><?= $transaksi['kode_barang'] ?></td>
                        <td><?= $transaksi['id_pelanggan'] ?></td>
                        <td><?= $transaksi['jumlah'] ?></td>
                        <td><?= number_format($transaksi['total_harga'], 2, ',', '.') ?></td>
                        <td><?= date('d-m-Y', strtotime($transaksi['tanggal_transaksi'])) ?></td>
                        <td>
                            <a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>" class="btn-edit">Detail</a>
                            <a href="index.php?controller=transaksi&action=delete&id=<?= $transaksi['id_transaksi'] ?>" class="btn-hapus" onclick="return confirm('Kamu yakin akan menghapus data ini ?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
