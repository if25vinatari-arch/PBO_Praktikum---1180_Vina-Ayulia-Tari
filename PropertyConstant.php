<?php

class produk {

    //property//
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant//
    public const PAJAK = 0.11;

}

//object//
$produk = new Produk();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 1000000;
$produk->stok = 5;

//hitung pajak//
$pajak = PRODUK::PAJAK * 100; //11%
$jumlahPajak = $produk->harga * PRODUK::PAJAK; //tambahan 1,1juta

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $pajak;
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.", $total;