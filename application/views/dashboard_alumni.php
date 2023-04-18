<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url() ?>dist/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?= base_url() ?>dist/js/qrcode.min.js"></script>
    <link rel="icon" href="<?= base_url() ?>dist/images/icons/logo.jpeg" type="image/icon type">
    <title>Reuni Bukber SMKN 2 PWD</title>
    <!-- <link rel="manifest" href="manifest.json"> -->
</head>

<body>
    <div class="min-h-screen">
        <div
            class="realtive h-64 w-full rounded-b-3xl bg-center cursor-pointer bg-no-repeat object-cover z-10 shadow-lg bg-gradient-to-r from-cyan-500 to-blue-500 grid grid-cols-3 justify-items-center place-content-evenly align-items-center px-5">
            <div class="col-span-2">
                <h2 class="text-md font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_nama'); ?>
                </h2>
                <p class="text-sm font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_jurusan'); ?><span> - </span>
                    <?= $this->session->userdata('user_tahunLulus'); ?>
                </p>
                <p class="text-sm font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_telp'); ?>
                </p>
                <p class="text-sm font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_email'); ?>
                </p>
                <p class="text-sm font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_pekerjaan'); ?>
                </p>
                <!--<p class="text-sm font-bold font-poppins text-white">-->
                <!--    <?= $this->session->userdata('user_jabatan'); ?>-->
                <!--</p>-->
                <p class="text-sm font-bold font-poppins text-white">
                    <?= $this->session->userdata('user_namaPerusahaan'); ?>
                </p>
            </div>
            <div class="place-self-center">
                <img class="rounded-full w-24 h-24 shadow" src="<?= base_url() ?>dist/images/icons/logo.jpeg">
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
        <div class="h-36 w-full"></div>

    </div>
    <div
        class="fixed bottom-0 w-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-t-3xl grid grid-cols-1 justify-items-center align-items-center place-content-center py-7">
        <a href="https://wa.me/6282242279859?text=Halo+Skansawira+Riset+and+Development+Technology.."
            class="mb-3 px-7 py-3 rounded-lg bg-white hover:bg-opacity-80 w-fit">


            <span class="text-sm font-poppins font-bold text-blue-500">Hubungi Kami</span>
        </a>
        <marquee direction="left" loop="" scrollamount="15">
            <h2 class="text-2xl font-bold font-poppins text-white">Website ini dibuat oleh SKANSAWIRA RISET &
                DEVELOPMENT TECHNOLOGY, Kami melayani segala kebutuhan teknologi digital anda. Silahkan hubungi kami
                dengan klik tombol diatas.</h2>
        </marquee>
    </div>






    <script src="<?= base_url() ?>node_modules/flowbite/dist/flowbite.min.js"></script>

</body>

</html>