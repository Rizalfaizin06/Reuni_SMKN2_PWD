<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <?php if (isset($error)): ?>
        <div style="color: red;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>


    <h2>Registrasi</h2>
    <form method="post" action="<?= base_url() ?>Auth/registrasi">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" value="">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" value="">
        </p>
        <p>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" value="">
        </p>
        <p>
            <label for="jurusan">Jurusan</label>
            <input type="jurusan" name="jurusan" value="">
        </p>
        <p>
            <label for="tahunLulus">Tahun Lulus</label>
            <input type="tahunLulus" name="tahunLulus" value="">
        </p>
        <p>
            <label for="telp">Nomor Telp</label>
            <input type="telp" name="telp" value="">
        </p>
        <p>
            <label for="email">Alamat Email</label>
            <input type="email" name="email" value="">
        <p>
            <button type="submit" name="registrasi" value="registrasi">Daftar</button>

        </p>
    </form>
    <a href="<?= base_url() ?>auth/login">Back</a>
</body>

</html>