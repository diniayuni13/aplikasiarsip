<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>No</td>
                <td><input type="text" name="no"></td>
            </tr>
            <tr> 
                <td>Tanggal Arsip</td>
                <td><input type="text" name="tanggalasrip"></td>
            </tr>
            <tr> 
                <td>Nomor Kotak</td>
                <td><input type="text" name="nomorkotak"></td>
            </tr>
            <tr> 
                <td>NIK</td>
                <td><input type="text" name="nik"></td>
            </tr>
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Tempat, Tanggal Lahir</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr> 
                <td>Add</td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $tanggalasrip = $_POST['tanggalasrip'];
        $nomorkotak = $_POST['nomorkotak'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $alamat = $_POST['alamat'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(tanggalasrip,nomorkotak,nik,nama,ttl,alamat) VALUES('$tanggalasrip','$nomorkotak','$nik', $nama, $ttl, $alamat)");

        // Show message when user added
        echo "User added successfully. <a href='indux.php'>View Users</a>";


    }
    ?>
</body>
</html>