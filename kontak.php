<html>
    <head>
        <title>Form Data Pegawai</title>
    </head>

    <body>
        <h1>Form Data Kontak</h1>
        <form action="simpan_kontak.php" method="POST">
            <p>
                <label for="id">ID</label><br>
                <label ><input type="text" name="id"></label>
            </p>

            <p>
                <label for="Nama">Nama</label><br>
                <label ><input type="text" name="Nama"></label>
            </p>

            <p>
                <label for="jkel">Jenis Kelamin</label><br>
                <label ><input type="radio" name="jkel" value="laki-laki">Laki-laki</label>
                <label ><input type="radio" name="jkel" value="Perempuan">Perempuan</label>
            </p>

            <p>
                <label for="Email">Email</label><br>
                <label ><input type="text" name="Email"></label>
            </p>

            <p>
                <label for="Alamat">Alamat</label><br>
                <label><input type="text" name="Alamat" id="Alamat"></label>
            </p>

            <p>
                <label for="Kota">Kota</label><br>
                <label ><input type="text" name="Kota"></label>
            </p>

            <p>
                <label for="Kota">Pesan</label><br>
                <textarea name="Pesan" id="Pesan" cols="30" rows="6"></textarea>
            </p>

            <input type="submit" name="simpan" value="Simpan" id="btn">
            <input type="reset" name="reset" value="Reset" id="btn">

        </form>
    </body>
</html>
