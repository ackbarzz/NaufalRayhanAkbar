<?php
    $Nama = "Naufal Rayhan Akbar";
    $Nim = "20252005";
    $Alamat = "Kec.Kutoarjo";
    $AlamatEmail = "naufalrayhanakbar1@gmail.com";
    $BidangMinat = "Programer";
    ?>
<html>
    <head>
        <style>
    table {
        background-color: blue;
    }
    p {
        text-align: center;
    }
    </style>
    <body>
    <table>
    <P><b>BIODATA DIRI</b></P>
    <tr>
    <td><?php echo "Nama ";?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $Nama ?></td>
    <td rowspan="9">
    <img src="nopal.jpeg" width="130" height="200">
    </td>
    </tr>
    <tr>
    <td><?php echo "NIM"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $Nim ;?></td>
    </tr>
    <td><?php echo "Alamat"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $Alamat ;?></td>
    </tr>
    <tr>
    <td><?php echo "Alamat Email"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $AlamatEmail ;?></td>
    </tr>
    <tr>
    <td><?php echo "Bidang Minat"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $BidangMinat ;?></td>
    </tr>
    </table>
    </body>
    </head>
</html>







