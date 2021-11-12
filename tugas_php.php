<?php
    include('connection.php');
    include('biodata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimas Aditya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: url(liu.JPG);background-size: cover;background-attachment: fixed;">
    <div class="wrap">
        <h1 align="center">HELLO I'M <span>DIMAS ADITYA</span></h1>
        <table>
            <tr>
                <td rowspan="8" width="100px"> <img src="aku.png" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:30px" border="2px" ></td>
            </tr>
            <tr>
                <td><b>Nama Lengkap</b></td>
                <td>:</td> <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td><b>Status</b></td><td>:</td> <td><?php echo $status; ?></td>
            </tr>
            <tr>
                <td><b>Universitas</b></td><td>:</td> <td><a href="https://www.upnjatim.ac.id/"><?php echo $universitas; ?></a></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td><td>:</td> <td><?php echo $jk; ?></td>
            </tr>
            <tr>
                <td><b>Alamat</b></td><td>:</td> <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td><b>Email</b></td><td>:</td><td><?php echo $email; ?></a></td>
            </tr>
        </table>
    </div>
    <div class="wrap" align="center">
        <h2 align="center">GET <span>IN TOUCH</span></h2>
        <a class="icon" href="<?php echo $instagram; ?>"><img src="instagram.png" alt="" width="40px"></a>
        <a class="icon" href="<?php echo $facebook; ?>"><img src="facebook.png" alt="" width="40px"></a>
        <a class="icon" href="<?php echo $twitter; ?>"><img src="twitter.png" alt="" width="40px"></a>
        <a class="icon" href="<?php echo $youtube; ?>"><img src="youTube.png" alt="" width="40px"></a>
        <a class="icon" href="<?php echo $wa; ?>"><img src="wa.png" alt="" width="40px"></a>
    </div>
</body>
</html>