<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Selamat datang di halaman dashboard ALumni</h1>
    <?= $this->session->userdata('user_role'); ?>
    <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>

</body>

</html>


<!DOCTYPE html>
<html>

<head>
    <title>QR Code Generator</title>
    <script src="<?= base_url() ?>dist/js/qrcode.min.js"></script>
</head>

<body>
    <h1>QR Code Generator</h1>
    <div id="qrcode"></div>
    <script>
        var qr = new QRCode(document.getElementById("qrcode"), {
            width: 256,
            height: 256
        });
        qr.makeCode("<?= $this->session->userdata('user_uuid'); ?>");
    </script>
</body>

</html>