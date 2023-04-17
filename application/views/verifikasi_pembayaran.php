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
        <!-- <div class="p-5">
            <h2 colspan="11"
                class="text-center text-2xl bg-gradient-to-r from-cyan-300 to-blue-400 font-bold rounded-lg text-white w-full m-5 p-3">
                alumni
            </h2>
        </div> -->
        <div class="h-24 md:h-8 w-full px-3 pt-8 grid grid-cols-1 md:grid-cols-2 gap-3">
            <a href="<?= base_url() ?>"
                class="px-7 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-opacity-80 w-fit">


                <span class="text-sm font-poppins font-bold text-white">Home</span>
            </a>


            <div class="">
                <form action="<?= base_url('dashboard/verifikasi') ?>" method="post">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="search" name="search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari nama" value="<?= (isset($search)) ? $search : '' ?>">
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="w-full p-5">
            <?php
            if ($totalRow != 0):

                ?>
                <div class="w-full overflow-y-auto pt-0" id="allContent">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-500 uppercase w-full">
                            <tr>
                                <th colspan="10" class="p-5">
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" class="px-2 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-2 py-3 sticky left-0 bg-white">
                                    Nama
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Jurusan
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Tahun Lulus
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Whatsapp
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Pekerjaan
                                </th>
                                <!--<th scope="col" class="px-2 py-3">-->
                                <!--    Jabatan-->
                                <!--</th>-->
                                <th scope="col" class="px-2 py-3">
                                    Nama Perusahaan
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Kehadiran
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Pembayaran
                                </th>
                            </tr>
                            <tr>
                                <th colspan="10">
                                    <div class="border-t-2 border-dashed border-gray-400 w-full"></div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $count = $row + 1;
                            foreach ($users->result() as $row):
                                ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                        <?= $count; ?>

                                    </th>
                                    <th scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white sticky left-0 bg-white">
                                        <?= $row->nama; ?>
                                    </th>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $row->jurusan; ?>
                                    </td>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $row->tahunLulus; ?>
                                    </td>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $row->telp; ?>
                                    </td>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $row->email; ?>
                                    </td>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $row->pekerjaan; ?>
                                    </td>
                                    <!--<td scope="row"-->
                                    <!--    class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">-->
                                    <!--    <?= $row->jabatan; ?>-->
                                    <!--</td>-->
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $row->namaPerusahaan; ?>
                                    </td>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= ($row->statusHadir == 1) ? 'Hadir' : 'Belum Hadir'; ?>
                                    </td>
                                    <td scope="row"
                                        class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        <form action="<?= base_url() ?>dashboard/update_confirmation" method="post">
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="id" value="<?= $row->idUser; ?>"
                                                    class="form-control">
                                                <!-- <input type="submit" name="confirm" value="Konfirmasi" class="btn btn-primary">
                                        <input type="submit" name="reject" value="Tolak" class="btn btn-primary"> -->
                                                <?php if ($row->statusBayar == 0): ?>
                                                    <button type="submit" name="konfirm" value="Konfirmasi"
                                                        onclick="return confirm('Konfirmasi Pembayaran?');"
                                                        class="px-3 py-2 rounded-lg bg-primary hover:bg-opacity-80">


                                                        <span class="text-xs font-poppins font-bold text-white">Konfirmasi</span>
                                                    </button>

                                                <?php else: ?>
                                                    <button type="submit" name="reject" value="Tolak"
                                                        onclick="return confirm('Batalkan Konfirmasi?');"
                                                        class="px-3 py-2 rounded-lg bg-red-400 hover:bg-opacity-80">
                                                        <span class="text-xs font-poppins font-bold text-white">Batalkan

                                                        </span>
                                                    </button>
                                                <?php endif; ?>
                                            </div>
                                        </form>
                                    </td>

                                    <?php $count++; endforeach;
                            ?>
                            </tr>




                        </tbody>


                    </table>

                </div>
            <?php endif; ?>
        </div>
        <div class="h-fit w-full  grid grid-cols-1 gap-3 justify-items-center place-content-evenly align-items-center ">


            <?php
            if ($totalRow == 0):

                ?>
                <h2 class="text-xl font-poppins font-bold text-center mr-2 md:mr-8 mt-24 text-red-500">
                    Tidak ada data alumni
                </h2>
            <?php else: ?>
                <h2 class="text-xl font-poppins font-bold text-center mr-2 md:mr-8 mt-2">
                    Total Peserta :
                    <?= $totalRow; ?>
                </h2>
            <?php endif; ?>


            <div>
                <?= $pagination; ?>
            </div>
        </div>
        <!-- <div class="h-5 w-full"></div>
        <a href="<?= base_url() ?>"
            class="px-7 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-opacity-80">


            <span class="text-sm font-poppins font-bold text-white">Home</span>
        </a> -->
        <div class="h-28 w-full"></div>

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
                dengan klik tombol dibawah.</h2>
        </marquee>
    </div>












    <script src="<?= base_url() ?>node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>