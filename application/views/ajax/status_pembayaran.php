<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>


</head>

<body>
    <!-- <?php var_dump($konfirmasiBK); ?> -->
    <div id="container">
        <h1>
            <?= $status; ?>
            <?php
            if ($status == 1) {
                echo "Pembayaran terverifikasi";
            } else {
                echo "Menunggu Pembayaran";
            }
            ?>
        </h1>

    </div>

</body>

</html>