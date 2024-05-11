<?php

// fungsi penambahan
function penambahan($a, $b)
{
    $hasil = $a + $b;
    return $hasil;
}

// fungsi perkalian
function perkalian($a, $b)
{
    $hasil = $a * $b;
    return $hasil;
}

// fungsi pembagian
function pembagian($a, $b)
{
    if ($b == 0) {
        echo "Error: Pembagian oleh nol tidak diperbolehkan.\n";
        return 0;
    } else {
        $hasil = $a / $b;
        return $hasil;
    }
}

// fungsi pemangkatan
function pemangkatan($a, $b)
{
    $hasil = pow($a, $b);
    return $hasil;
}

// fungsi pengurangan
function pengurangan($a, $b)
{
    $hasil =  $a - $b;
    return $hasil;
}

while (true) {
    echo "\nPilihan Menu:\n";
    echo "1. Penambahan\n";
    echo "2. Perkalian\n";
    echo "3. Pembagian\n";
    echo "4. Pemangkatan\n";
    echo "5. Pengurangan\n";
    echo "6. Keluar\n";

    $pilihan = readline("Masukkan pilihan Anda (1/2/3/4/5): ");

    if ($pilihan == "6") {
        echo "Terima Kasih telah menggunakan Kalkulator. Sampai jumpa!\n";
        break;
    }

    $a = (int)readline("Masukkan bilangan pertama: ");
    $b = (int)readline("Masukkan bilangan kedua: ");

    switch ($pilihan) {
        case '1':
            echo "Hasil penambahan: " . penambahan($a, $b) . "\n";
            break;
        case '2':
            echo "Hasil perkalian: " . perkalian($a, $b) . "\n";
            break;
        case '3':
            echo "Hasil pembagian: " . pembagian($a, $b) . "\n";
            break;
        case '4':
            echo "Hasil pemangkatan: " . pemangkatan($a, $b) . "\n";
            break;
        case '5':
            echo "Hasil pengurangan: " . pengurangan($a, $b) . "\n";
            break;

        default:
            echo "Pilihan tidak valid, Silahkan pilih kembali.\n";
    }
}
