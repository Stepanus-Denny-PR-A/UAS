<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Data_filem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Data-Filem')->insert([
            'Judul'=>'Titanic',
            'Gambar'=>'https://upload.wikimedia.org/wikipedia/id/1/19/Titanic_%28Official_Film_Poster%29.png',
            'Tahun_Terbit'=>'1997',
            'Deskripsi'=>'Pada tahun 1996, Brock Lovett, seorang pemburu harta karun, dan timnya menjelajahi bangkai kapal RMS Titanic untuk mencari sebuah kalung berlian bernama Heart of the Ocean. Mereka menemukan sebuah peti yang berisi beberapa lembaran kertas yang sudah rusak, termasuk sebuah lukisan seorang wanita telanjang dengan kalung tersebut. Seorang perempuan tua bernama Rose Dawson Calvert melihat berita tentang penemuan tersebut dan menghubungi Lovett, meyakinkan bahwa wanita dalam lukisan itu adalah dirinya. Rose kemudian pergi ke lokasi penemuan lukisan dan menceritakan pengalamannya di kapal Titanic.
            Pada bulan April 1912, Rose DeWitt Bukater, yang saat itu berusia 17 tahun, naik ke kapal Titanic sebagai penumpang kelas satu bersama ibunya dan tunangannya, Caledon Hockley. Rose tidak bahagia dengan pertunangannya dan hidupnya yang terkekang. Suatu malam, dia mencoba bunuh diri dengan terjun dari kapal, tetapi diselamatkan oleh seorang laki-laki bernama Jack Dawson. Jack dan Rose menjadi teman dan saling berbagi cerita tentang kehidupan mereka. Lambat laun, mereka jatuh cinta satu sama lain, meskipun pertunangan Rose dengan Cal dan perbedaan status sosial mereka menjadi penghalang.
            Pada malam tenggelamnya Titanic, Rose memilih untuk menyelamatkan Jack daripada naik ke sekoci penyelamat bersama ibunya. Mereka berjuang untuk bertahan hidup saat kapal tenggelam, dan Jack berhasil menyelamatkan Rose dengan menaikkannya ke sepotong papan. Namun, Jack sendiri tidak bisa bertahan dan meninggal karena hipotermia. Rose terus hidup dan diselamatkan oleh sekoci penyelamat. Ketika tiba di New York, Rose mengganti namanya menjadi Rose Dawson dan menyadari bahwa dia masih memiliki Heart of the Ocean yang sebenarnya ada di kantong jas milik Cal.
            Sebagai perempuan tua pada tahun 1996, Rose kembali ke bangkai kapal dan membuang Heart of the Ocean ke laut sebagai tanda penghormatan kepada Jack. Dia melihat foto-foto perjalanan hidupnya di kamar pribadinya dan kemudian bermimpi bahwa dia kembali ke Titanic di dasar laut. Di mimpinya, dia bertemu kembali dengan Jack dan mereka bersatu kembali di depan penumpang Titanic yang telah meninggal. Mereka berdua mencium satu sama lain sambil dikelilingi oleh penumpang yang bertepuk tangan.
            Ini adalah ringkasan singkat dari cerita film Titanic yang dirilis pada tahun 1997. Cerita ini menggambarkan kisah cinta tragis antara Rose, seorang penumpang kelas atas yang tidak bahagia, dan Jack, seorang pelukis miskin yang naik ke kapal sebagai penumpang kelas tiga. Di tengah keadaan yang sulit dan bencana kapal yang tak terelakkan, cinta mereka tumbuh dan mereka berjuang untuk bertahan hidup bersama.',
            'Biaya_Pembuatan'=>'$200 juta',
            'Pendapatan'=>'$2,2 miliar',
            'Trailer'=>'https://youtu.be/kVrqfYjkTdQ',
            'Sutradara'=>'James Cameron',
            'Pemeran'=>'Leonardo DiCaprio,Kate Winslet,Billy Zane,Kathy Bates,Gloria Stuart,Victor Garber'
        ]);
        DB::table('Komentar')->insert([
            'ID_user'=>'1',
           'isi'=> 'bagus',
           'ID_filem'=>'1'
        ]);
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin_p4ss')
        ]);
        DB::table('users')->insert([
            'name'=>'Denny',
            'email'=>'Denny@gmail.com',
            'password'=>Hash::make('12345')
        ]);


    }}
