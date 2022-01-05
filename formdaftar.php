<!DOCTYPE html>
<html>
<head>
    <title>FREQUENCY 2021</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="formdaftar.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="formdaftar.php">Daftar</a></li>
        <li><a href="listdata.php">Pendaftar</a></li>
        <li style="float:right"><a>FREQUENCY</a></li>
    </ul>
    <fieldset>
    <header>
        <h1>Formulir CA Frequency 2021</h1>
    </header>
  
    <left>
    <form action="prosesdaftar.php" method="POST">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" placeholder="NIM" />
        </p>
        <p>
            <label for="prodi">Prodi: </label>
            <input type="text" name="prodi" placeholder="Program Studi" />
        </p>
        <p>
            <label for="angkatan">Angkatan: </label>
            <select name="angkatan">
                <option> Pilih Tahun</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
</select>
        </p>
        <p>
            <label for="prodi">Provinsi: </label>
            <input type="text" name="provinsi" placeholder="Asal Provinsi" />
        </p>
        <hr>
        <p style="margin-top: 10px">
            <input type="submit" value="Daftar" name="daftar" class="button"/>
        </p>  
    </form>
</left>
    </fieldset>
    
    </body>
</html>