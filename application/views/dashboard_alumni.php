<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url() ?>dist/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="icon" href="assets/icons/app/icon_SFM_Rounded.png" type="image/icon type"> -->
    <title>Student Financial Management</title>
    <!-- <link rel="manifest" href="manifest.json"> -->
    <script src="<?= base_url() ?>dist/js/qrcode.min.js"></script>
</head>

<body>
    <div class="min-h-screen">
        <div
            class="realtive h-64 w-full rounded-b-3xl bg-center cursor-pointer bg-no-repeat object-cover z-10 shadow-lg bg-gradient-to-r from-cyan-500 to-blue-500 grid grid-cols-3 justify-items-center place-content-evenly align-items-center px-5">
            <div class="col-span-2">
                <h2 class="text-2xl font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_nama'); ?>
                </h2>
                <p class="text-lg font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_jurusan'); ?><span> - </span>
                    <?= $this->session->userdata('user_tahunLulus'); ?>
                </p>
                <p class="text-lg font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_telp'); ?>
                </p>
                <p class="text-lg font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_email'); ?>
                </p>
                <p class="text-lg font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_pekerjaan'); ?>
                </p>
                <p class="text-lg font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_jabatan'); ?>
                </p>
                <p class="text-lg font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_namaPerusahaan'); ?>
                </p>
            </div>
            <div class="place-self-center">
                <img class="rounded-full w-28 h-28 shadow" src="<?= base_url() ?>dist/images/icons/logo.jpeg">
            </div>


        </div>
        <div class="grid grid-cols-1 justify-items-center w-full gap-3 p-5" id="allContent">
            <div id="scanQR" class="space-y-5">
                <h3 class="font-poppins font-bold text-center">Scan QR untuk Verifikasi</h3>

                <div id="qrcode"
                    class="grid grid-cols-1 justify-items-center bg-white h-64 w-64 rounded-2xl overflow-hidden p-3">

                </div>
                <script>
                    var qr = new QRCode(document.getElementById("qrcode"), {
                    });
                    qr.makeCode("<?= $this->session->userdata('user_uuid'); ?>");
                </script>
            </div>
            <a href="<?= base_url('auth/logout') ?>"
                class="px-7 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-opacity-80">


                <span class="text-sm font-poppins font-bold text-white">Logout</span>
            </a>
        </div>
        <div class="h-20 w-full"></div>

    </div>
    <div
        class="fixed bottom-0 w-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-t-3xl grid grid-cols-1 justify-items-center align-items-center place-content-center py-7">
        <h2 class="text-2xl font-bold font-poppins text-white">SMKN 2 PURWODADI</h2>
    </div>






    <script src="<?= base_url() ?>node_modules/flowbite/dist/flowbite.min.js"></script>

</body>

</html>