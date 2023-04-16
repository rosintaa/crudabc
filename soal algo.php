<!-- <?php
        $listAngka = [1, 7, 4, 9, 2];
        // $jumlah = 0;

        // foreach ($listAngka as $angka) {
        // $jumlah += $listAngka;
        // }
        echo array_sum($listAngka);


        // echo "Jumlah dari " . implode(", ", $listAngka) . " adalah " . $jumlah;$listAngka = [1, 7, 4, 9, 2];
        
    ?> -->

Open sidebar
PHP Basic Algorithms


Sinta Anggraini
php algoritma dasar

Algoritma adalah serangkaian instruksi logis yang harus diikuti oleh program komputer untuk menyelesaikan sebuah tugas.
PHP, sebagai bahasa pemrograman, dapat digunakan untuk mengimplementasikan algoritma dasar. Berikut adalah beberapa
contoh algoritma dasar yang dapat diimplementasikan dengan PHP:

Algoritma Sorting: Sorting adalah proses pengurutan data dari yang terkecil ke yang terbesar atau sebaliknya. Berikut
adalah contoh implementasi algoritma sorting dengan PHP menggunakan algoritma Bubble Sort:
php
Copy code
<br><br>
<?php
function bubbleSort($arr) {
    $n = count($arr);
    for($i=0; $i<$n; $i++) {
        for($j=0; $j<$n-$i-1; $j++) {
            if($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

$arr = array(5, 3, 8, 4, 2);
print_r(bubbleSort($arr));

?>
<br><br>
Algoritma Pencarian: Pencarian adalah proses mencari nilai tertentu dari kumpulan data. Berikut adalah contoh
implementasi algoritma pencarian dengan PHP menggunakan algoritma Linear Search:
php
Copy code
<?php
function linearSearch($arr, $x) {
    $n = count($arr);
    for($i=0; $i<$n; $i++) {
        if($arr[$i] == $x) {
            return $i;
        }
    }
    return -1;
}

$arr = array(5, 3, 8, 4, 2);
$x = 4;
$result = linearSearch($arr, $x);
if($result == -1) {
    echo "Nilai $x tidak ditemukan di dalam array";
} else {
    echo "Nilai $x ditemukan di indeks $result";
}
?>
<br><br>
Algoritma Fibonacci: Fibonacci adalah deret bilangan yang terbentuk dari penjumlahan dua bilangan sebelumnya. Berikut
adalah contoh implementasi algoritma Fibonacci dengan PHP:
php
Copy code
<?php
function fibonacci($n) {
    if($n <= 0) {
        return 0;
    } else if($n == 1) {
        return 1;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

$n = 10;
for($i=0; $i<$n; $i++) {
    echo fibonacci($i) . " ";
}
?>
<br><br>
Dalam contoh di atas, program akan menampilkan 10 bilangan pertama dari deret Fibonacci.