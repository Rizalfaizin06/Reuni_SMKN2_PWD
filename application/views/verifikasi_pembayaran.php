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
            <h2 colspan="10"
                class="text-center text-2xl bg-gradient-to-r from-cyan-300 to-blue-400 font-bold rounded-lg text-white w-full m-5 p-3">
                alumni
            </h2>
        </div> -->
        <div class="h-8 w-full pl-3 pt-8">
            <a href="<?= base_url() ?>"
                class="px-7 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-opacity-80">


                <span class="text-sm font-poppins font-bold text-white">Home</span>
            </a>
        </div>
        <div class="w-full p-5">
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
                            <th scope="col" class="px-2 py-3">
                                Jabatan
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Nama Perusahaan
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
                                <td scope="row"
                                    class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $row->jabatan; ?>
                                </td>
                                <td scope="row"
                                    class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $row->namaPerusahaan; ?>
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

                                <?php $count++; endforeach; ?>
                        </tr>




                    </tbody>


                </table>

            </div>
        </div>
        <div class="h-fit w-full  grid grid-cols-1 gap-3 justify-items-center place-content-evenly align-items-center ">

            <h2 class="text-xl font-poppins font-bold text-center mr-2 md:mr-8 mt-2">Total Peserta :
                <?= $totalRow; ?>
            </h2>


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
        <h2 class="text-2xl font-bold font-poppins text-white">SMKN 2 PURWODADI</h2>
    </div>












    <script src="<?= base_url() ?>node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>