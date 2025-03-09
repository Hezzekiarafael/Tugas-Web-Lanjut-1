<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form NIM dan Nama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'Mahasiswa.php';

    $mahasiswa_1 = new Mahasiswa();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        $mahasiswa_1->setData($nim, $nama);
    }
    ?>
    <div class="container">
        <div class="title">Form Nim & Nama</div>
            <div class="content">
                <form  class=" form-group"action="" method="post">

                <label for="nim">NIM :</label>
                <input type="text" id="nim" name="nim" required><br><br>
          
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" required><br><br>
         

                <div class="button">
                <button type="submit">Submit</button>
                </div>
                </form>
                <br>   
                <div class="hasil" >
                <p><?= $mahasiswa_1->getData()[0]; ?>&nbsp;&nbsp;<?= $mahasiswa_1->getData()[1]; ?></p>

                </div>
            </div>
    </div>

</body>
</html>
