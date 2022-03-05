<?php

include("config.php");

if( isset($_GET['id_barang']) ){

    // ambil id dari query string
    $id_barang = $_GET['id_barang'];

    // buat query hapus
    $sql = "DELETE FROM pembelian WHERE id_barang=$id_barang";
    $query = mysql_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header("location: list-pembelian.php");
    } else {
        die("gagal menghapus...");
        }

} else {
    die("akses dilarang...");
}

?>