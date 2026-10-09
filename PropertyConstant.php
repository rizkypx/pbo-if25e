<?php

class Produk {
    //properti
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    //kostan
    public const PAJAK = 0.11;
}
//objek
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//output
$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk : " .$produk->nama;
echo "<br/>";
echo "Harga : " .$produk->harga;
echo "<br/>";
echo "Stok : " .$produk->stok;
echo "<br/>";
echo "Pajak : " .$pajak;
echo "<br/>";
echo "Total harga setelah pajak : Rp." .$total;

