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
        DB::table('Data-Filem')->insert([
            'Judul'=>'Die Hard',
            'Gambar'=>'https://upload.wikimedia.org/wikipedia/en/c/ca/Die_Hard_%281988_film%29_poster.jpg',
            'Tahun_Terbit'=>'1988',
            'Deskripsi'=>'Pada Malam Natal, Detektif John McClane dari Departemen Kepolisian Kota New York (NYPD) tiba di Los Angeles dengan harapan untuk berdamai dengan istrinya yang terpisah, Holly, dalam sebuah pesta yang diadakan oleh perusahaan tempatnya bekerja, Nakatomi Corporation. Dia dibawa ke Nakatomi Plaza oleh seorang sopir limosin, Argyle, yang menawarkan untuk menunggu McClane di garasi. Sementara McClane mengganti pakaiannya, menara tersebut direbut oleh radikal Jerman bernama Hans Gruber dan timnya yang bersenjata lengkap, termasuk Karl dan Theo. Semua orang di menara itu dijadikan sandera kecuali McClane, yang berhasil meloloskan diri, dan Argyle, yang tidak menyadari kejadian tersebut.

            Gruber menyamar sebagai teroris untuk mencuri $640 juta dalam bentuk obligasi bearer yang tidak bisa dilacak di brankas gedung. Dia membunuh eksekutif Joseph Takagi setelah gagal mendapatkan kode akses darinya, dan memberikan tugas kepada Theo untuk membobol brankas tersebut. Para teroris mengetahui kehadiran McClane dan salah satunya, Tony, dikirim untuk mengejar McClane. McClane membunuh Tony dan mengambil senjata dan radio-nya, yang digunakan untuk menghubungi Departemen Kepolisian Los Angeles (LAPD) yang skeptis. Sersan Al Powell dikirim untuk menyelidiki. Sementara itu, McClane membunuh lebih banyak teroris dan mengambil tas mereka yang berisi C-4 dan detonator. Setelah tidak menemukan kejanggalan apa pun, Powell hampir meninggalkan tempat tersebut sampai McClane menjatuhkan jenazah seorang teroris ke mobilnya. Setelah Powell meminta bantuan, tim SWAT mencoba menyerbu gedung tetapi diserang oleh para teroris. McClane melemparkan beberapa C-4 ke dalam lubang lift, menyebabkan ledakan yang membunuh beberapa teroris dan mengakhiri serangan tersebut.

            Rekan kerja Holly, Harry Ellis, mencoba bernegosiasi atas nama Gruber, tetapi ketika McClane menolak untuk menyerah, Gruber membunuh Ellis. Saat memeriksa bahan peledak di atap, Gruber bertemu dengan McClane dan berpura-pura menjadi sandera yang melarikan diri; McClane memberikan Gruber sebuah pistol. Gruber mencoba menembak McClane tetapi menemukan bahwa senjatanya tidak terisi, dan hanya diselamatkan oleh campur tangan teroris lainnya. McClane melarikan diri tetapi terluka oleh serpihan kaca dan kehilangan detonator. Di luar, agen Federal Bureau of Investigation (FBI) mengambil alih kendali. Mereka memerintahkan listrik dimatikan yang, seperti yang telah diduga oleh Gruber, melumpuhkan kunci brankas terakhir sehingga timnya bisa mengumpulkan obligasi tersebut.

            FBI setuju dengan tuntutan Gruber untuk sebuah helikopter, dengan maksud mengirimkan helikopter serang untuk mengeliminasi kelompok tersebut. McClane menyadari bahwa Gruber berencana meledakkan atap untuk membunuh sandera dan memalsukan',
            'Biaya_Pembuatan'=>'$$25–35 million',
            'Pendapatan'=>'$139.8–141.5 million',
            'Trailer'=>'https://youtu.be/jaJuwKCmJbY',
            'Sutradara'=>'John McTiernan',
            'Pemeran'=>'Bruce Willis
            Alan Rickman
            Alexander Godunov
            Bonnie Bedelia'
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

        DB::table('Studio')->insert([
            'Nama'=>'Twentieth Century Studios, Inc.',
            'Gambar'=>'https://upload.wikimedia.org/wikipedia/id/thumb/5/5e/20th_Century_Studios.svg/220px-20th_Century_Studios.svg.png',
            'Tahun_berdiri'=>'1935–2020',
            'Deskripsi'=>'20th Century Studios adalah sebuah studio film yang beroperasi di Amerika Serikat. Studio ini didirikan pada tahun 1935 dengan nama 20th Century Pictures oleh seorang produser film bernama Joseph Schenck. Pada tahun 1935, perusahaan tersebut bergabung dengan Fox Film Corporation dan menjadi 20th Century-Fox. Studio ini menghasilkan banyak film yang sukses secara komersial dan kritis selama hampir delapan dekade.
            20th Century Studios dikenal sebagai salah satu studio film terkemuka di Hollywood. Studio ini telah menghasilkan sejumlah film yang menjadi ikon budaya, termasuk "Gone with the Wind" (1939), "The Sound of Music" (1965), "Star Wars" (1977), dan "Titanic" (1997). Film-film tersebut tidak hanya mencapai kesuksesan komersial yang besar, tetapi juga mendapatkan pengakuan dari para kritikus dan penghargaan bergengsi seperti Academy Awards.
            Seiring berjalannya waktu, 20th Century Studios mengalami beberapa perubahan kepemilikan. Pada tahun 2019, The Walt Disney Company mengakuisisi 21st Century Fox, termasuk 20th Century Fox, dan mengganti namanya menjadi 20th Century Studios. Meskipun berada di bawah naungan Disney, studio ini tetap mempertahankan identitasnya yang kuat dan terus menghasilkan film-film yang beragam dalam genre dan tema.
            Sebagai salah satu studio film tertua di industri hiburan, 20th Century Studios telah menghadapi berbagai tantangan dan perubahan dalam perkembangannya. Namun, studio ini terus beradaptasi dengan perkembangan teknologi dan preferensi penonton, serta tetap menjadi pusat kreativitas untuk para sineas dan pembuat film yang ingin menghasilkan karya-karya berpengaruh.
            Dengan sejarah panjangnya yang kaya dan kontribusinya terhadap perfilman, 20th Century Studios tetap menjadi salah satu studio film yang paling dihormati dan diakui di dunia.',
            'Filemnya'=>'1. Avatar (2009) - Film fiksi ilmiah yang disutradarai oleh James Cameron dan menjadi salah satu film dengan pendapatan tertinggi sepanjang masa. Mengisahkan tentang petualangan seorang marinir paraplegik yang dikirim ke planet Pandora.

            2. X-Men (2000) - Film superhero yang mengadaptasi komik Marvel dengan nama yang sama. Film ini menjadi awal dari seri film X-Men yang sukses dan membawa karakter-karakter mutan ikonik ke layar lebar.

            3. The Greatest Showman (2017) - Film musikal biografi yang mengisahkan kehidupan P.T. Barnum, pendiri sirkus Barnum & Bailey Circus. Film ini dikenal dengan lagu-lagu yang populer seperti "This Is Me" dan "A Million Dreams".

            4. Deadpool (2016) - Film superhero yang mengambil pendekatan yang lebih gelap dan dewasa, dengan bintang Ryan Reynolds sebagai karakter utama, Wade Wilson/Deadpool. Film ini mendapatkan sambutan positif dari kritikus dan sukses di box office.
            '
            ,'vidio'=>'https://youtu.be/0x9xXy5a0do'
        ]);

        DB::table('wishlist_table')->insert([
            'id_user'=>'1',
            'id_filem'=>'1'
        ]);

    }}
