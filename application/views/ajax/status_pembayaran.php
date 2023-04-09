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