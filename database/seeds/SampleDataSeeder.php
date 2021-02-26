<?php

use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Forum;
use App\Reply;
use Illuminate\Database\Seeder;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Olsavira Agsa Pratama',
            'email' => 'olsavira@gmail.com',
            'address' => 'Sidoarjo',
            'password' => \Hash::make('12345678'),
            'is_admin' => true,
        ]);

        $category = Category::create([
            'slug' => 'math',
            'name' => 'Math',
        ]);

        $post = Post::create([
            'slug' => 'menghitung-determinan-matriks',
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => 'Menghitung Determinan Matriks',
            'content' => 'Matriks  adalah  himpunan  skalar  yaitu  bilangan  riil  atau  kompleks  yang  disusun  atau dijajarkan  secara  empat  persegi  panjang  menurut  baris  dan  kolom.  Dengan representasi	matriks, perhitungan dapat dilakukan	 dengan lebih	terstuktur pemamfaatannya	misalnya dalam menjelaskan	persamaan inear,	transformasi koordinat,  dan  lainnya.  Matriks  seperti  halnya  variabel  biasa  dapat  dilakukan  operasi matematik, seperti operasi perkalian, operasi penjumlahan dan operasi pengurangan. Matriks  merupakan  salah  satu  cara  yang  digunakan  untuk  menyelesaikan  berbagai persoalan-persoalan   dalam   mencari   hubungan   antar   variabel-variabel,   baik   dalam bidang ilmu statistik, fisika, tekhnik sosial dan ekonomi. Terdapat  berbagai  jenis  matriks  yaitu,  matriks  bujur  sangkar,  matriks  nol,  matriks diagonal  dan  lain  sebagainya.  Secara  umum  matriks  mempunyai  suatu  ukuran  yang disebut dengan orde. Orde adalah jumlah dari kolom dan baris suatu matriks, mulai dari matriks  yang  berode  1,  orde  2,  hingga  matriks  yang  berorde  yang  artinya  matriks tersebut  berukuran .  Matriks  yang  jumlah  baris  sama  dengan  jumlah  kolom dinamakan matriks bujur sangkar atau matriks persegi.',
        ]);

        Comment::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => 'Penjelasannya sangat ringkas.',
        ]);

        Comment::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => 'Metode perhitungan matriks nya mudah untuk dipahami, menggunakan cara cepat dalam mengerjakan soal, thanks LearnIt',
        ]);

        $category = Category::create([
            'slug' => 'physic',
            'name' => 'Physic',
        ]);

        $post = Post::create([
            'slug' => 'hukum-gerak-newton',
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => 'Hukum Gerak Newton',
            'content' => 'Hukum gerak Newton adalah tiga hukum fisika yang menjadi dasar mekanika klasik. Hukum ini menggambarkan hubungan antara gaya yang bekerja pada suatu benda dan gerak yang disebabkannya. Hukum ini telah dituliskan dengan pembahasaan yang berbeda-beda selama hampir 3 abad,[1] dan dapat dirangkum sebagai berikut:

            Hukum Pertama: setiap benda akan memiliki kecepatan yang konstan kecuali ada gaya yang resultannya tidak nol bekerja pada benda tersebut.[2][3][4] Berarti jika resultan gaya nol, maka pusat massa dari suatu benda tetap diam, atau bergerak dengan kecepatan konstan (tidak mengalami percepatan). Hal ini berlaku jika dilihat dari kerangka acuan inersial.
            Hukum Kedua: sebuah benda dengan massa M mengalami gaya resultan sebesar F akan mengalami percepatan a yang arahnya sama dengan arah gaya, dan besarnya berbanding lurus terhadap F dan berbanding terbalik terhadap M. atau F=Ma. Bisa juga diartikan resultan gaya yang bekerja pada suatu benda sama dengan turunan dari momentum linear benda tersebut terhadap waktu.
            Hukum Ketiga: gaya aksi dan reaksi dari dua benda memiliki besar yang sama, dengan arah terbalik, dan segaris. Artinya jika ada benda A yang memberi gaya sebesar F pada benda B, maka benda B akan memberi gaya sebesar –F kepada benda A. F dan –F memiliki besar yang sama namun arahnya berbeda. Hukum ini juga terkenal sebagai hukum aksi-reaksi, dengan F disebut sebagai aksi dan –F adalah reaksinya.
        ',
        ]);

        Comment::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => 'Sangat membantu saya dalam menghadapi ujian fisika semester ini, materinya sudah jelas, semoga untuk materi tentang massa jenis segera diupload',
        ]);

        $category = Category::create([
            'slug' => 'indonesian',
            'name' => 'Indonesian',
        ]);

        $post = Post::create([
            'slug' => 'penulisan-dan-penggunaan-tanda-baca-yang-benar',
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => 'Penulisan dan Penggunaan Tanda Baca yang Benar',
            'content' => 'Penulisan dan Penggunaan Tanda Baca yang Benar
            Pemakaian dan penulisan tanda baca memang terkesan sepele, namun jika tidak tepat, makna dari sebuah kalimat bisa berubah. Karena hal tersebutlah, penting mengetahui berbagai penulisan dan pemakaian tanda baca-tanda baca yang ada dalam bahasa Indonesia, seperti di bawah ini.
            Tanda Titik (.)
            
            Tanda baca yang satu ini hampir selalu bisa dijumpai dalam sebuah kalimat. Menjadi penanda akhir dari rangkaian kata, tanda titik lazim diletakkan di akhir sebuah kalimat. Namun, ada juga beberapa penulisan dan pemakaian tanda baca titik (.) lainnya yang harus kamu pahami.
            
            Dipakai untuk mengakhiri singkatan yang belum resmi. Sebagai contoh, tanda ini ditaruh setelah yang merupakan singkatan yang terhormat, hlm. yang merupakan singkatan dari halaman, ataupun a.n. yang merupakan singkatan dari atas nama.
            Tanda titik (.) tidak dipakai pada judul ataupun keterangan pengirim maupun tujuan pada surat.
            Dipakai untuk membatasi singkatan pada gelar sarjana dengan bidang yang diambilnya, contohnya S.Pd yang merupakan sarjana pendidikan, S.E yang merupakan sarjana ekonomi, maupun S.Hum yang merupakan singkatan dari sarjana humaniora.
            Dipakai untuk mengakhiri angka ataupun huruf pada bentuk laporan ataupun tabel. Dipakai dalam daftar pustaka sebagai pembatas antara keterangan yang satu dengan yang lain.
            Contoh: Knight, John. 2001. Wanita Ciptaan Ajaib. Bandung: Indonesia Publishing House.',
        ]);

        Comment::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => 'Penggunaan tanda baca dalam suatu kalimat saya sering tertukar antara tanda titik dan tanda koma, tapi dengan adanya materi ini sangat memudahkan saya dalam menghadapi ujian nanti',
        ]);

        $user = User::create([
            'name' => 'Karimah',
            'email' => 'karimah@gmail.com',
            'address' => 'Besuki',
            'password' => \Hash::make('12345678'),
            'is_admin' => false,
        ]);

        $forum = Forum::create([
            'slug' => 'menghitung-determinan-matriks',
            'user_id' => $user->id,
            'category_id' => $category->id,
            'question' => 'Bagaimana cara menghitung Determinan Matriks??',
            'content' => 'Matriks  adalah  himpunan  skalar  yaitu  bilangan  riil  atau  kompleks  yang  disusun  atau dijajarkan  secara  empat  persegi  panjang  menurut  baris  dan  kolom.  Dengan representasi	matriks, perhitungan dapat dilakukan	 dengan lebih	terstuktur pemamfaatannya	misalnya dalam menjelaskan	persamaan inear,	transformasi koordinat,  dan  lainnya.  Matriks  seperti  halnya  variabel  biasa  dapat  dilakukan  operasi matematik, seperti operasi perkalian, operasi penjumlahan dan operasi pengurangan. Matriks  merupakan  salah  satu  cara  yang  digunakan  untuk  menyelesaikan  berbagai persoalan-persoalan   dalam   mencari   hubungan   antar   variabel-variabel,   baik   dalam bidang ilmu statistik, fisika, tekhnik sosial dan ekonomi. Terdapat  berbagai  jenis  matriks  yaitu,  matriks  bujur  sangkar,  matriks  nol,  matriks diagonal  dan  lain  sebagainya.  Secara  umum  matriks  mempunyai  suatu  ukuran  yang disebut dengan orde. Orde adalah jumlah dari kolom dan baris suatu matriks, mulai dari matriks  yang  berode  1,  orde  2,  hingga  matriks  yang  berorde  yang  artinya  matriks tersebut  berukuran .  Matriks  yang  jumlah  baris  sama  dengan  jumlah  kolom dinamakan matriks bujur sangkar atau matriks persegi.',
        ]);

        Reply::create([
            'user_id' => $user->id,
            'forum_id' => $forum->id,
            'content' => 'Begini caranya _________________________',
        ]);

        Reply::create([
            'user_id' => $user->id,
            'forum_id' => $forum->id,
            'content' => 'Bisa lihat di artikel kak, penjelasannya Metode perhitungan matriks nya mudah untuk dipahami, menggunakan cara cepat dalam mengerjakan soal, thanks LearnIt',
        ]);
    }
}