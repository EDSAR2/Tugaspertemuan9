<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edin Saripudin</title>
</head>
<body>
    <h1>Tugas pertemuan 9</h1>
    <?php
    // Tugas Pertemuan 9
    $nim = "312310556";
    $nama = "Edin Saripudin";
    $kelas = "TI.23.CA1";

    // Tampilkan Data
    echo "<p><strong>NIM:</strong> $nim</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Kelas:</strong> $kelas</p>";
    ?>
</body>
<h2>Apa Itu Server-Side Scripting?</h2>
    <p>
        <strong>Server-side scripting</strong> adalah proses di mana skrip atau kode program dieksekusi di sisi server
        untuk menghasilkan halaman web dinamis, memproses data, atau menangani logika aplikasi sebelum mengirimkan hasilnya ke browser pengguna.
    </p>
    
    <h3>Bagaimana Cara Kerjanya?</h3>
    <ol>
        <li><strong>Permintaan dari Klien (Browser):</strong> 
            Browser pengguna mengirim permintaan ke server, biasanya melalui URL atau formulir.
        </li>
        <li><strong>Proses di Server:</strong> 
            Server menjalankan kode (misalnya PHP) untuk memproses permintaan tersebut. Kode dapat mengambil atau menyimpan data ke database.
        </li>
        <li><strong>Menghasilkan Output:</strong> 
            Server menghasilkan halaman HTML atau data lainnya (seperti JSON) sebagai hasil pemrosesan.
        </li>
        <li><strong>Mengirim ke Klien:</strong> 
            Hasil tersebut dikirim kembali ke browser pengguna untuk ditampilkan.
        </li>
    </ol>
    
    <h4>Contoh Kasus</h4>
    <p>Misalnya, ketika Anda login ke sebuah situs web, server-side script akan memverifikasi data login Anda di database. Jika valid, server akan menampilkan halaman dashboard Anda.</p>
</body>
</body>
</html>
