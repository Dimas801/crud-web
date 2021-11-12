<?php
    include('connection.php');

    $sqlData = "SELECT * FROM datadiri WHERE nama_lengkap = 'Dimas Aditya Putra'";
    $resultData = $conn->query($sqlData);
    
    if ($resultData->num_rows > 0) {
        // output data of each row
        while($row = $resultData->fetch_assoc()) {
            $name = $row['nama_lengkap'];
            $status = $row['status'];
            $universitas = $row['universitas'];
            $jk = $row['jenis_kelamin'];
            $alamat = $row['alamat'];
            $email = $row['email'];
        }
    }

    $sqlSosmed = "SELECT * FROM sosmed WHERE id = 1";
    $resultSosmed = $conn->query($sqlSosmed);
    
    if ($resultSosmed->num_rows > 0) {
        // output data of each row
        while($row = $resultSosmed->fetch_assoc()) {
            $instagram = $row['instagram'];
            $facebook = $row['facebook'];
            $twitter = $row['twitter'];
            $youtube = $row['youtube'];
            $wa = $row['whatsapp'];
        }
    }
?>