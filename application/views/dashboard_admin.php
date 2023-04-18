<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url() ?>dist/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url() ?>dist/images/icons/logo.jpeg" type="image/icon type">
    <title>Reuni Bukber SMKN 2 PWD</title>
    <!-- <link rel="manifest" href="manifest.json"> -->
</head>


<body>
    <!-- component -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- style="background-image:url('<?= base_url() ?>dist/images/background/appbar_bg.png')" -->
    <div class="min-h-screen">
        <div
            class="realtive h-64 w-full rounded-b-3xl bg-center cursor-pointer bg-no-repeat object-cover z-10 shadow-lg bg-gradient-to-r from-cyan-500 to-blue-500 grid grid-cols-3 justify-items-center place-content-evenly align-items-center px-5">
            <div class="h-28 col-span-2">
                <h2 class="text-2xl font-bold font-poppins text-white">Admin</h2>
                <p class="text-lg font-bold font-poppins text-white">
                    Reuni Akbar 2023
                </p>
                <p class="text-lg font-bold font-poppins text-white">
                    SMKN 2 PWD
                </p>

            </div>
            <div class="">
                <img class="rounded-full w-28 h-28 shadow" src="<?= base_url() ?>dist/images/icons/logo.jpeg">
            </div>
        </div>
        <div class="p-5 space-y-4 grid grid-cols-1 justify-items-center ">
            <div class="w-full max-w-md">
                <h4 class="text-3xl font-bold font-poppins justify-self-start text-cyan-500">Menu</h4>
            </div>
            <div class="grid m-0 grid-cols-2 gap-3 justify-center items-center w-full max-w-md">
                <a href="<?= base_url() ?>dashboard/verifikasi">
                    <div class=" bg-gradient-to-r from-cyan-500 to-blue-500 opacity-50 rounded-3xl grid grid-cols-1
                    justify-items-center align-items-center place-content-center gap-2 aspect-square">
                        <div class="h-2/5 w-2/5 justify-items-center grid">
                            <img class="" src="<?= base_url() ?>dist/images/icons/verification.png">
                        </div>
                        <p class="text-lg font-bold font-poppins text-white">
                            Confirmation
                        </p>
                    </div>
                </a>
                <a href="<?= base_url() ?>dashboard/cek_status">
                    <div
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 opacity-50 rounded-3xl grid grid-cols-1 justify-items-center align-items-center place-content-center gap-2 aspect-square">
                        <div class="h-2/5 w-2/5 justify-items-center grid">
                            <img class="" src="<?= base_url() ?>dist/images/icons/scan.png">
                        </div>
                        <p class="text-lg font-bold font-poppins text-white">
                            Verification
                        </p>
                    </div>
                </a>
                <a href="<?= base_url('Export') ?>" target="_blank"
                    class="col-span-2 px-7 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-opacity-80 text-sm font-poppins font-bold text-white text-center">
                    Download Rekap Kehadiran

                </a>
                <a href="<?php echo site_url('auth/logout'); ?>"
                    class="col-span-2 px-7 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-opacity-80 text-sm font-poppins font-bold text-white text-center">
                    Logout

                </a>
                <div class="h-36 w-full"></div>
            </div>

        </div>
        <!-- <div
            class="fixed bottom-0 w-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-t-3xl grid grid-cols-1 justify-items-center align-items-center place-content-center py-7">

            <h2 class="text-2xl font-bold font-poppins text-white">SMKN 2 PURWODADI</h2>
        </div> -->
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
    </div>





    <script src="<?= base_url() ?>node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>