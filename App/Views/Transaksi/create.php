<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #cfe2ff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            color: #007bff;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            color: #0056b3;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #a0c4ff;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-custom {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            color: #fff;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .btn-blue {
            background-color: #4dabf7;
        }

        .btn-blue:hover {
            background-color: #74c0fc;
        }

        .btn-gray {
            background-color: #adb5bd;
        }

        .btn-gray:hover {
            background-color: #868e96;
        }

        p {
            font-size: 1em;
            color: #333;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        .total-harga {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Transaksi</h1>
        <form action="index.php?controller=transaksi&action=store" method="POST">
            <div class="form-group">
                <label for="id_transaksi">ID Transaksi:</label>
                <input type="number" id="id_transaksi" name="id_transaksi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kode_barang">Kode Barang:</label>
                <input type="text" id="kode_barang" name="kode_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan:</label>
                <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga_barang">Harga Barang:</label>
                <input type="number" id="harga_barang" name="harga_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" class="form-control" required>
            </div>
            
            <p>Total Harga: <span id="total_harga" class="total-harga">0</span></p>

            <!-- Submit and Back Buttons -->
            <a class="btn btn-medium btn-blue" onclick="document.forms[0].submit();">Simpan</a>
            <a href="index.php?controller=transaksi&action=index" class="btn btn-custom btn-gray">Kembali</a>
        </form>
    </div>

    <!-- JavaScript to Calculate Total Price -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
