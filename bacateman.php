<?php

    // deklarasi alamat server
    $server = "localhost";

    // deklarasi username
    $user = "root";

    // deklarasi nama database
    $namadb = "tiumy";

    // deklarasi password
    $password = "";

    // membuat koneksi ke dalam db
    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    // membuat yang berisi query untuk menampilkan data
    $result = mysqli_query($conn, "select * from teman");

    // membuat variabel json yang berjenis data array
    $json = array();

    // membaca isi data dari db
    while ($row = mysqli_fetch_assoc($result)){
        $json[] = $row;
    }

    echo json_encode($json);
    mysqli_close($conn);

?>