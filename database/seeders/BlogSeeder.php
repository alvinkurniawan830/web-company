<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = [
            [
             'image' => 'img/about/5e201e74276da.jpg',
             'tittle' => 'Sejarah Bulutangkis Dunia',
             'author' => 'Alvin kurniawan',
             'content' => 'Dalam perkembangannya sejarah bulu tangkis berkembang di Mesir kuno sekitar 2000 tahun lalu tetapi juga disebut-sebut di India dan Republik Rakyat Cina. Nenek moyang terdininya diperkirakan ialah sebuah permainan Tionghoa, Jianzi yang melibatkan penggunaan kok tetapi tanpa raket. Alih-alih, objeknya dimanipulasi dengan kaki. Objek/misi permainan ini adalah untuk menjaga kok agar tidak menyentuh tanah selama mungkin tanpa menggunakan tangan.
             Di Inggris sejak zaman pertengahan permainan anak-anak yang disebut Battledores dan Shuttlecocks sangat populer. Anak-anak pada waktu itu biasanya akan memakai dayung/tongkat (Battledores) dan bersiasat bersama untuk menjaga kok tetap di udara dan mencegahnya dari menyentuh tanah. Ini cukup populer untuk menjadi nuansa harian di jalan-jalan London pada tahun 1854 ketika majalah Punch mempublikasikan kartun untuk ini.
             Dalam sejarah bulu tangkis Inggris membawa permainan ini ke Jepang, Republik Rakyat Cina, dan Siam (sekarang Thailand) selagi mereka mengolonisasi Asia. Ini kemudian dengan segera menjadi permainan anak-anak di wilayah setempat mereka.Olah raga kompetitif bulu tangkis diciptakan oleh petugas Tentara Britania di Pune, India pada abad ke-19 saat mereka menambahkan jaring dan memainkannya secara bersaingan. Oleh sebab kota Pune dikenal sebelumnya sebagai Poona, permainan tersebut juga dikenali sebagai Poona pada masa itu.
             Para tentara membawa permainan itu kembali ke Inggris pada 1850-an. Olah raga ini mendapatkan namanya yang sekarang pada 1860 dalam sebuah pamflet oleh Isaac Spratt, seorang penyalur mainan Inggris, berjudul “Badminton Battledore – a new game” (“Battledore bulu tangkis – sebuah permainan baru”). Ini melukiskan permainan tersebut dimainkan di Gedung Badminton (Badminton House), estat Duke of Beaufort’s di Gloucestershire, Inggris.
             Dasar peraturan dalam sejarah bulu tangkis yang pertama ditulis oleh Klub Badminton Bath pada 1877. Asosiasi bulu tangkis Inggris dibentuk pada 1893 dan kejuaraan internasional pertamanya berunjuk-gigi pertama kali pada 1899 dengan Kejuaraan All England. Bulu tangkis sekarang menjadi sebuah olah raga yang cukup populer di dunia, terutama di wilayah Asia Timur dan Tenggara, yang saat ini mendominasi olah raga ini, dan di negara-negara Skandinavia.
             ',
            ],
            [
                'image' => 'img/about/hxihllru4efbkq5xdmft.jpg',
                'tittle' => 'Apa itu shuttlecock?',
                'author' => 'Alvin kurniawan',
                'content' => 'Kok atau bola bulu tangkis (bahasa Inggris: Shuttlecock) adalah bola yang digunakan dalam olahraga bulu tangkis, terbuat dari rangkaian bulu angsa yang disusun membentuk kerucut terbuka, dengan pangkal berbentuk setengah bola yang terbuat dari gabus.
                Kata kok diadaptasi dari bahasa Inggris cock yang berarti ayam jantan (sebelum menggunakan bulu angsa, kok dibuat dari bulu ayam). Namun karena kata cock juga memiliki arti konotasi yang negatif maka dalam bahasa Inggris kok disebut sebagai shuttlecock, mengingat pergerakannya yang bolak-balik di dalam lapangan.
                Karakteristik standar
                Menurut hukum bulu tangkis yang dikeluarkan oleh badan federasi bulu tangkis dunia (BWF), kok mempunyai karakteristik sebagai berikut:
                Kok harus memiliki 16 buah bulu.
                Semua bulu harus memiliki panjang yang sama yaitu antara 62 mm dan 70 mm.
                Ujung dari bulu-bulu harus membentuk lingkaran dengan panjang diameter antara 58 mm dan 68 mm.
                Semua bulu harus tergabung menjadi satu kesatuan yang kuat.
                Pangkal kok yang berbentuk setengah bola harus memiliki panjang diameter antara 25 mm dan 28 mm.
                Berat kok seluruhnya harus antara 4,47 gram dan 5,50 gram.
                ',
               ],
         ];
        DB::table('blogs')->insert($blog);
    }
}
