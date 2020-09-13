-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2020 at 03:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayu`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `judul`, `isi`, `image`, `is_active`, `date_created`, `id_category`) VALUES
(6, 'Kisah Hidup', 'Kesendirian', '<p><a href=\"https://michaelbliss92.files.wordpress.com/2016/03/sitting-alone.jpg\" target=\"_parent\"><img alt=\"\" src=\"https://michaelbliss92.files.wordpress.com/2016/03/sitting-alone.jpg\" style=\"border-style:solid; border-width:1px; float:left; height:141px; margin:12px 50px; width:250px\" /></a>Sendiri untuk menenangkan hati yang telah terpuruk, dengan kesendirian aku telah mempelajari banyak hal untuk tetap optimis dengan pendirian ku agar bisa dihargai oleh mereka. Meskipun banyak pendapat bahwa aku adalah orang yang sombong, tetapi aku orangnya bukan seperti itu yang selalu acuh dan egois terhadap orang lain.</p>\r\n\r\n<p>Ingin sekali dihargai oleh mereka mereka yang bisa akrab satu sama lain nya, akan tetapi diriku hanya orang penyendiri yang tidak ada teman dan kawan yang ingin diajak bercanda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'inspirasi.png', 1, 1532877559, 3),
(17, 'Freamwork Web Code Igniter 3', '#1. Pengenalan Code Igniter 3', '<h4>Pengertian Code Igniter</h4>\r\n\r\n<p>Code Igniter adalah sebuah Freamwork Web yang digunakan untuk membangun sebuah website yang interaktif agar developer dapat dengan mudah membuatnya.</p>\r\n\r\n<p>Didalam Freamwork Code Igniter ini terdapat fitur yang bisa digunakan developer agar dengan mudah membuat sebuah website yaitu :</p>\r\n\r\n<ol>\r\n	<li>MVC</li>\r\n	<li>Form Validation</li>\r\n	<li>Session</li>\r\n	<li>Pagination</li>\r\n	<li>Dan lain lain</li>\r\n</ol>\r\n\r\n<p>Jika ingin melihat fitur-fitur secara lengkap lihat pada <a href=\"https://www.codeigniter.com/user_guide/\">documentasi</a> Code Igniter berikut</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Didalam tutorial ini ada yang perlu di pelajari untuk menggunakan Code Igniter dengan memepelajari sebuah bahasa pemrograman dasar yaitu.</p>\r\n\r\n<ol>\r\n	<li>\r\n										HTML<span class=\"ion-social-html5 \"></span>\r\n									</li>\r\n									<li>\r\n										CSS atau Bootstrap\r\n										<span class=\"ion-social-css3\"></span>\r\n									</li>\r\n									<li>\r\n										PHP <span class=\"fab fa-php\"></span>\r\n									</li>\r\n\r\n</ol>\r\n', 'ci1.jpg', 1, 1551021645, 1),
(18, 'Freamwork Web Code Igniter 3', '#3. Menjalankan Fungsi MVC Pada Code Igniter', '<p>\r\n                                Masih di tutorial tentang Code Igniter ditutorial sebelumnya kita sudah membahas tentang instalasi pada Code Igniter 3. Maaf sudah lama ngk hosting materi :D.\r\n                            </p>\r\n                            <p>\r\n                                Sebelum kita melanjutkan sebuah project nya, saya akan menjelaskan dulu tentang fitur MVC.\r\n                                MVC atau di sebut Model View Controller adalah sebuah konsep untuk membangun sebuah Web Freamwork interaktif yang keterikatan atau keterkaitan dari Model View Controller. Kita akan membahas satu persatu apa yang dilakukan oleh Model View Controller.\r\n                            </p>\r\n                            <ol>\r\n                                <li>Model => merupakan hubungan dari database yaitu kumpulan data untuk memanipulasi data yang akan dibuat</li>\r\n                                <li>View => merupakan hubungan dari tampilan atau Interface nya dari sebuah website yang akan kita bangun</li>\r\n                                <li>Controller => merupakan hubungan atau jembatan penghubung dari Model dan View untuk bisa saling berinteraksi, jadi Controller merupakan inti dari suatu pemrosesan.</li>\r\n                            </ol>\r\n                            <p>\r\n                                Sebenarnya konsep MVC ini kita tidak perlu menggunakannya, kita hanya bisa menggunakan View untuk tampilan halaman sebuah web dan Controller sebagai proses dan juga mengatur kumpulan data saja atau kita hanya bisa menggunakan Controller saja untuk tampilan halaman web dan pemrosesan data untuk di kelola. Kenapa kita harus mengikuti konsep tersebut karena agar dengan mudah dan terstruktur dalam pembuatan-nya.\r\n                            </p>\r\n                            <p>\r\n                                Nah sekarang kita sudah tau kegunaan dari fitur MVC, sekarang saatnya untuk memulai melanjutkan project nya :).\r\n                            </p>\r\n                            <p>\r\n                                Hal yang perlu di persiapkan yaitu sebuah Text Editor agar lebih mudah dalam membuat sebuah code program nya. Saya sarankan untuk mengistall Text Editor di Leptop atau PC masing-masing. Disini saya memakai Visual Studio Code.\r\n                                Visual Studio Code bisa download di <a href=\"https://code.visualstudio.com/download\">link ini</a>.\r\n                            </p>\r\n                            <p>\r\n                                Pertama kita akan membuat sebuah database untuk menampung sebuah data yang akan dibuat. Jalankan Xampp dan klik start pada Apache dan MySQL nya jika ada tulisan Running berarti Apache dan MySQL kita sudah berjalan.\r\n                            </p>\r\n                            <div class=\"post-thumb text-center\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/1.Xampp.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/1.Xampp.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Kemudian buka browser dan ketikan http://localhost/Mahasiswa sesuai nama project yang kita buat, disini saya melanjutkan tutorial sebelumnya yaitu Mahasiswa. maka akan ada tampilan berikut berarti project kita sudah berhasil terinstall.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/startci.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/startci.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <p>\r\n                                Untuk membuat sebuah database kita buka tab baru pada browser lalu ketikan http://localhost/phpmyadmin kemudian enter, seketika kita akan dialihkan ke halaman PhpMyAdmin, kegunaan dari PhpMyAdmin ini adalah kita dapat menampung sebuah data didalam nya.\r\n                            </p>\r\n                            <p>\r\n                                Kemudian klik pada bagian menu Databases lalu isikan nama database nya sesuai nama yang diinginkan disini saya mengisikan nama database nya yaitu Mahasiswa untuk menyamakan dengan nama projectnya kemudian klik create.\r\n                            </p>\r\n\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/2.Database.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/2.Database.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Maka database kita sudah dibuat akan muncul di bagian sidebar left. Kemudian kita akan membuat sebuah tabel untuk menampung sebuah data nya, isikan nama tabel nya data_mahasiswa lalu isikan mau berapa field nya, disini saya hanya membuat beberapa field saja yaitu \"id, nama, nim, jurusan, email\"(id:\'perlu dibuat karena kita akan membuat kata kunci nya => primary key).\r\n                            </p>\r\n                            <p>\r\n                                Jadi kita membutuhkan 5 field lalu klik go untuk membuat tabelnya.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/3.Table.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/3.Table.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Kemudian kita akan dialihkan ke halaman pengisian tabel filed isikan nama dan type pada gambar berikut\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/4.Field.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/4.Field.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Saya akan menjelaskan tentang gambar diatas, terdapat (Name: nama filed yang akan diisi) (Type: tipe data jika tipe data Varchar berarti data yang dimasukkan berupa String atau semua karakter dan Int berarti data yang dimasukkan berupa numeric) (Length/Values: adalah ukuran atau panjang karakter nya) (Index->Primary Key: berupa kata kunci untuk setiap data yang dimasukkan).\r\n                            </p>\r\n                            <p>\r\n                                Jika sudah menyamakannya klik save untuk menyimpannya.\r\n                            </p>\r\n                            <p>\r\n                                Lalu masuk ke menu insert, disini kita akan mengisikan 2 data mahasiswa lalu go.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/5.Insert data.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/5.Insert data.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Kenapa disini id nya saya kosongkan, karena sudah secara otomatis akan terisi dengan index yang kita beri Primary Key nya.\r\n                            </p>\r\n                            <p>\r\n                                Kemudian buka Text Editor kalian, saatnya untuk membuat code program nya dan alihkan ke Folder Mahasiswa yang telah kita buat di folder htdoc. Disini saya memakai Text Editor jika kalian ingin menggunakan bisa klik <a href=\"https://code.visualstudio.com/download\">link ini</a>. Klik File -> Open Folder Kemudian cari folder project yang ada di folder htdoc kita kemudian klik Ok.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/6.Open VSC.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/6.Open VSC.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Jika sudah akan tampil di bagian sidebar left file Project kita yaitu Mahasiswa. Disini saya tidak akan membahas tentang struktur dari project ini, kalian bisa baca <a href=\"https://www.codeigniter.com/user_guide/\">documentasion</a> akan sangat panjang penjelasannya bila saya menjelaskan nya :D.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/7.Open mahasiswa.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/7.Open mahasiswa.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Disini kita akan mengubah beberapa konfigurasi untuk menggunakan project ini masuk ke folder Application->config file yang harus di konfigurasikan (autoload.php: meload fitur fitur dari ci berupa form_validation, database, url dll), (config.php: untuk mengkonfigurasi alamat dari website yang kita buat yaitu http://localhost/Mahasiswa ), (database.php: mengkonfigurasikan sebuah database yang kita gunakan).\r\n                            </p>\r\n                            <ol>\r\n                                <li>Pertama buka file autoload.php</li>\r\n                                <p>kita akan menambahkan \'database\' di bagian library karena akan menggunakan database untuk mengakses data. </p>\r\n                                <div class=\"post-thumb\">\r\n                                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/8.autoload.png\">\r\n                                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/8.autoload.png\" class=\"img-fluid\">\r\n                                    </a>\r\n\r\n                                </div>\r\n                                <br>\r\n                                <p>Dan \'url\',\'file\' pada bagian helper. Kemudian save</p>\r\n                                <div class=\"post-thumb\">\r\n                                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/9.autoload1.png\">\r\n                                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/9.autoload1.png\" class=\"img-fluid\">\r\n                                    </a>\r\n                                </div>\r\n                                <br>\r\n                                <li>Kedua buka file config.php</li>\r\n                                <p>\r\n                                    Pada bagian base_url isikan alamat web project kita yaitu http://localhost/Mahasiswa/. Kemudian save.\r\n                                </p>\r\n                                <div class=\"post-thumb\">\r\n                                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/10.config.png\">\r\n                                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/10.config.png\" class=\"img-fluid\">\r\n                                    </a>\r\n                                </div>\r\n                                <br>\r\n                                <li>Ketiga buka file database.php</li>\r\n                                <p>\r\n                                    Pada bagian ini kita akan mengkonfigurasi sebuah database yang kita gunakan. Di sini kita memakai MySQL pada Xampp berarti kita tinggal mengubah pada bagian \'username\'=>\'root\' & \'database\'=\'>Mahasiswa\' jika ada memakai password pada MySQL nya tinggal memasukkan passwordny apa pada bagian \'password\'. Disini saya default dari Xampp jadi \'password\' di ksongkan. Kemudian save.\r\n                                </p>\r\n                                <div class=\"post-thumb\">\r\n                                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/11.database.png\">\r\n                                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/11.database.png\" class=\"img-fluid\">\r\n                                    </a>\r\n                                </div>\r\n                            </ol>\r\n                            <br>\r\n                            <p>Kemudian masuk pada folder controllers dan buka file Welcome.php</p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/12.controller.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/12.controller.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Disini kita bisa lihat ada sebuah function dengan nama index yaitu ketika saat dipanggil function index inilah yang akan dipanggil pertama kali. didalam funtion index terdapat $this->load->view(\'welcome\'); berarti kita akan memanggil view dengan nama welcome.php untuk ditampilkan ke browser. Dan terdapat script tambahan yang sudah saya isi. Kemudian save file nya.\r\n                            </p>\r\n                            <p>Kemudian masuk pada folder models dan buat file baru dengan nama Mahasiswa_model.php untuk memanipulasi sebuah data di database</p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/13.model.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/13.model.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Disini saya mengisi script modelnya, kita bisa lihat ada sebuah function dengan nama get yaitu untuk menampilkan sebuah data mahasiswa yang ada pada tabel data_mahasiswa yang sudah kita buat. Kemudian save file nya.\r\n                            </p>\r\n                            <p>Kemudian masuk pada folder views dan buka file Welcome.php</p>\r\n                            <p>\r\n                                Disini kita bisa lihat script yang sudah ada pada file welcome_message.php ini, dan saya sudah menghapus beberapa bagian script dan menambahkan nya untuk dapat menampilkan data mahasiswa yang ada pada database.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/14.view.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/14.view.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>\r\n                                Disini saya akan menjelaskan tentang script ini pada tag table disini saya membuatnya untuk menampilkan data mahasiswa kedalam tabel dan tag php dengan perulangan foreach dengan nama parameter data_mahasiswa yang ada pada controllers->Welcome.php menjadi $data_mahasiswa dan konversikan ke dalam variabel $mhs dan ditampilkan pada tag $mhs[] ini adalah data mahasiswa berupa array yang akan dipanggil didalam database dan diisikan sesuai filed yang ada pada database dan tag $i++ yaitu perulangan berulang pada $i=1 untuk penomoran pertama.\r\n                            </p>\r\n                            <br>\r\n                            <p>Lalu kembali ke browser dan ketika alamat web kita http://localhost/Mahasiswa. Maka akan tampil data mahasiswa yang telah kita isi pada database.\r\n                            </p>\r\n                            <div class=\"post-thumb\">\r\n                                <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/15.hasil.png\">\r\n                                    <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/3/15.hasil.png\" class=\"img-fluid\">\r\n                                </a>\r\n                            </div>\r\n                            <br>\r\n                            <p>Mungkin kalian juga berhasil, bagaiman ada kesulitan, jika ada kesulitan bisa comment pada bagian Replay dibawah.</p>\r\n                            <p>Untuk Tutorial Selanjutnya kita akan membahas tentang Insert Data Mahasiswa. Tunggu tutorial selanjutnya. Terima Kasih :)</p>\r\n\r\n', 'ci1.jpg', 1, 1564047298, 1);
INSERT INTO `blog` (`id_blog`, `title`, `judul`, `isi`, `image`, `is_active`, `date_created`, `id_category`) VALUES
(19, 'Freamwork Web Code Igniter 3', '#4. Menambahkan Fungsi Insert Data Mahasiswa', ' <p>\r\n                                Masih di tutorial tentang Code Igniter. Ditutorial sebelumnya kita sudah membahas tentang Menjalankan Fungsi MVC Pada Code Igniter. Dan sekarang kita akan melanjutkan materi tentang insert data Mahasiswa. Jika kalian belum mempunyai project sebelumnya, saya sudah memberikan link project untuk mendownloadnya dibagian comment pada Materi ke #3 Menjalankan Fungsi MVC Pada Code Igniter.\r\n                            </p>\r\n                            <p>\r\n                                Sebelum kita melanjutkannya, ada yang harus dilakukan untuk mempercantik tampilan pada project yang kita buat yaitu menggunakan Bootstrap, kalian bisa mendownloadnya di <a href=\"https://github.com/bayualexandria/Bootstrap-4\">sini</a> .\r\n                            </p>\r\n                            <p>\r\n                                Jika kalian sudah mendowloadnya kalian bisa membuat sebuah folder dengan nama asset pada bagian awal project kita dan extra file tersebut ke folder yang telah kita buat.\r\n                            </p>\r\n                            <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/1.png\">\r\n                            <div class=\"post-thumb\">\r\n                            <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/1.png\" class=\"img-fluid\" alt=\"\">\r\n                            </div>\r\n                            </a>\r\n                            <br>\r\n                            <p>\r\n                                Kita akan membuat sebuah template pada tampilan html kita. Memanggil script template secara berulang ulang tanpa harus membuat script html penuh pada sebuah file yang akan kita buat cukup membuat content nya saja pada file baru yang akan kita buat agar penghematan terhadap script nya.\r\n                            </p>\r\n                            <p>Buatlah sebuah folder baru dengan nama <b>layout</b> pada folder <b>\"application/views\"</b> lalu buat file baru didalamnya dengan nama <b>template.php</b></p>\r\n                            <p><b>Script template.php</b></p>\r\n                            <figure class=\"highlight bg-dark\" ><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n<span class=\"c\" style=\"color:silver\">&lt;!doctype html&gt;</span>\r\n    <span class=\"nt\" style=\"color:red\">&lt;html</span> <span class=\"na\" style=\"color:darkorange\">lang=</span><span class=\"s\" style=\"color:darkturquoise\">\"en\"</span><span class=\"nt\" style=\"color:red\">&gt;</span>\r\n      <span class=\"nt\" style=\"color:red\">&lt;head&gt;</span>\r\n        <span class=\"c\" style=\"color:silver\">&lt;!-- Bootstrap CSS --&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;link</span> <span class=\"na\" style=\"color:darkorange\">rel=</span><span class=\"s\" style=\"color:darkturquoise\">\"stylesheet\"</span> <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\" <span>&lt;?= base_url(\'asset/bootstrap/css/bootstrap.min.css\');?&gt;</span>\"</span><span class=\"nt\" style=\"color:red\">&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;title&gt;</span>&lt;<span>?= $title;</span> ?&gt;<span class=\"nt\" style=\"color:red\">&lt;/title&gt;</span>\r\n      <span class=\"nt\" style=\"color:red\">&lt;/head&gt;</span>\r\n      <span class=\"nt\" style=\"color:red\">&lt;body&gt;</span>\r\n\r\n      <span class=\"c\" style=\"color:silver\">&lt;!-- Start Navbar --&gt;</span>\r\n      <span class=\"nt\" style=\"color:red\">&lt;nav&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span>&lt;?= base_url(\'index.php/Welcome\'); ?&gt;</span>\"</span> &gt;</span>Home<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n        <span class=\"nt\" style=\"color:red\">&lt;button</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"navbar-toggler\"</span> <span class=\"na\" style=\"color:darkorange\">type=</span><span class=\"s\" style=\"color:darkturquoise\">\"button\"</span> <span class=\"na\" style=\"color:darkorange\">data-toggle=</span><span class=\"s\" style=\"color:darkturquoise\">\"collapse\"</span> <span class=\"na\" style=\"color:darkorange\">data-target=</span><span class=\"s\" style=\"color:darkturquoise\">\"#navbarNav\"</span> <span class=\"na\" style=\"color:darkorange\">aria-controls=</span><span class=\"s\" style=\"color:darkturquoise\">\"navbarNav\"</span> <span class=\"na\" style=\"color:darkorange\">aria-expanded=</span><span class=\"s\" style=\"color:darkturquoise\">\"false\"</span> <span class=\"na\" style=\"color:darkorange\">aria-label=</span><span class=\"s\" style=\"color:darkturquoise\">\"Toggle navigation\"</span>&gt;\r\n            <span class=\"nt\" style=\"color:red\">&lt;span <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"navbar-toggler-icon\"</span>&gt;</span><span class=\"nt\" style=\"color:red\">&lt;/span&gt;</span> \r\n        <span class=\"nt\" style=\"color:red\">&lt;/button&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"collapse navbar-collapse\"</span> <span class=\"na\" style=\"color:darkorange\">id=</span><span class=\"s\" style=\"color:darkturquoise\">\"navbarNav\"</span>&gt;\r\n            <span class=\"nt\" style=\"color:red\">&lt;ul</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"navbar-nav\"</span> &gt;\r\n                <span class=\"nt\" style=\"color:red\">&lt;li</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"nav-item\"</span> &gt;\r\n                    <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span>&lt;?= base_url(\'index.php/Welcome/about\'); ?&gt;</span>\"</span> &gt;</span>About<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n                <span class=\"nt\" style=\"color:red\">&lt;/li&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;li</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"nav-item\"</span> &gt;\r\n                    <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span>&lt;?= base_url(\'index.php/Welcome/mahasiswa\'); ?&gt;</span>\"</span> &gt;</span>Mahasiswa<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n                <span class=\"nt\" style=\"color:red\">&lt;/li&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;/ul&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;/div&gt;</span>\r\n      <span class=\"nt\" style=\"color:red\">&lt;/nav&gt;</span>\r\n      <span class=\"c\" style=\"color:silver\">&lt;!-- End Navbar --&gt;</span>\r\n      \r\n        <span class=\"c\" style=\"color:silver\">&lt;!-- jQuery first then Bootstrap JS --&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;script </span><span class=\"na\" style=\"color:darkorange\">src=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span>&lt;?= base_url(\'asset/bootstrap/js/jquery-3.3.1.js\');?&gt;</span>\"</span>&gt;\r\n        <span class=\"nt\" style=\"color:red\">&lt;script </span><span class=\"na\" style=\"color:darkorange\">src=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span>&lt;?= base_url(\'asset/bootstrap/js/bootstrap.min.js\');?&gt;</span>\"</span>&gt;\r\n      <span class=\"nt\" style=\"color:red\">&lt;/body&gt;</span>\r\n    <span class=\"nt\" style=\"color:red\">&lt;/html&gt;</span>\r\n                    </code></pre></figure>\r\n                    <p>\r\n                        Kemudian buat 2 file baru lagi dengan nama <b>index.php</b> dan <b>about.php</b> pada folder <b>\"application/views\"</b>. Masukan Script berikut.\r\n                    </p>\r\n                    <p><b>Script index.php</b></p>\r\n                    <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"container pt-5\"</span><span >&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"row justify-content-center\"</span><span >&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"col-md-10\"</span><span >&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;h5</span><span >&gt;</span>\r\n                    Home Page\r\n                <span class=\"nt\" style=\"color:red\" >&lt;/h5&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                    </code></pre></figure>\r\n                    <p><b>Script about.php</b></p>\r\n                    <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\"W>class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"container pt-5\"</span><span >&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"row justify-content-center\"</span><span >&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"col-md-10\"</span><span >&gt;</span>\r\n            <span class=\"c\" style=\"color:silver\">&lt;!-- Menampilkan sebuah value dengan variabel $nama yang ada pada function about di file controller Welcome.php --&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;h5</span><span >&gt;</span>\r\n                    Hello &lt;?= $nama; ?&gt;\r\n                <span class=\"nt\" style=\"color:red\" >&lt;/h5&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                    </code></pre></figure>\r\n                    <br>\r\n                    <p>Kemudian pada file <b>welcome_message.php</b> ada script yang harus kita hapus. Akan menjadi seperti di bawah ini</p>\r\n                    <p><b>Script welcome_message.php</b></p>\r\n                    <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"container pt-5\"</span><span >&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"row\"</span><span >&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"col-md-10\"</span><span >&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;h1</span><span >&gt;</span>Data Mahasiswa<span class=\"nt\" style=\"color:red\" >&lt;/h1&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"mb-5\"</span><span >&gt;</span>\r\n                <span class=\"c\" style=\"color:silver\">&lt;!-- Pesan validasi saat menginputkan data baru jika email dan nim yang dimasukkan sudah terdaftar pada database --&gt;</span>\r\n                    &lt;?= form_error(\'nim\', \'<span class=\"nt\" style=\"color:red\">&lt;small</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"alert alert-danger\"</span> <span class=\"na\" style=\"color:darkorange\">role=</span><span class=\"s\" style=\"color:darkturquoise\" >\"alert\"</span>&gt;\', \' <span class=\"nt\" style=\"color:red\" >&lt;/small&gt;</span>\'); ?&gt;\r\n                    &lt;?= form_error(\'email\', \'<span class=\"nt\" style=\"color:red\">&lt;small</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"alert alert-danger\"</span> <span class=\"na\" style=\"color:darkorange\">role=</span><span class=\"s\" style=\"color:darkturquoise\" >\"alert\"</span>&gt;\', \' <span class=\"nt\" style=\"color:red\" >&lt;/small&gt;</span>\'); ?&gt;\r\n                <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                <span class=\"c\" style=\"color:silver\">&lt;!-- Menampilkan pesan inputan --&gt;</span>\r\n                    &lt;?=<span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">session</span>-><span style=\"color:yellow\">flashdata</span>(\'<span style=\"color:coral\">message</span>\');?&gt;\r\n                <span class=\"nt\" style=\"color:red\">&lt;table</span><span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\" >\"table\"</span><span>&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\">&lt;thead</span><span >&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;tr</span><span >&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;th</span><span >&gt;</span>No<span class=\"nt\" style=\"color:red\" >&lt;/th&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;th</span><span >&gt;</span>Nama<span class=\"nt\" style=\"color:red\" >&lt;/th&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;th</span><span >&gt;</span>NIM<span class=\"nt\" style=\"color:red\" >&lt;/th&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;th</span><span >&gt;</span>Email<span class=\"nt\" style=\"color:red\" >&lt;/th&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;th</span><span >&gt;</span>Jurusan<span class=\"nt\" style=\"color:red\" >&lt;/th&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;th</span><span >&gt;</span>\r\n                                <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"badge badge-success\"</span> <span class=\"na\" style=\"color:darkorange\">data-toggle=</span><span class=\"s\" style=\"color:darkturquoise\">\"modal\"</span> <span class=\"na\" style=\"color:darkorange\">data-target=</span><span class=\"s\" style=\"color:darkturquoise\">\"#add\"</span>&gt;</span>Add data<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n                            <span class=\"nt\" style=\"color:red\" >&lt;/th&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\" >&lt;/tr&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\" >&lt;/thead&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\">&lt;tbody</span><span >&gt;</span>\r\n                    <span class=\"c\" style=\"color:silver\">&lt;!-- variabel $i=1 untuk mengurutkan penomoran dan foreach adalah perulangan untuk memanggil data mahasiswa pada parameter data_mahasiswa yang ada pada controllers->Welcome.php berupa variabel $data_mahasiswa dan di conversi lagi menggunakan variabel $mhs --&gt;</span>\r\n                    <span>&lt;?php $i = 1;\r\n                    foreach ($data_mahasiswa as $mhs) :?&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;tr</span><span >&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $i++; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span> <span class=\"c\" style=\"color:silver\">&lt;!-- Perulangan pada penomoran --&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'nama\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span><span class=\"c\" style=\"color:silver\">&lt;!-- Pemanggilan data pada field nama --&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'nim\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span><span class=\"c\" style=\"color:silver\">&lt;!-- Pemanggilan data pada field nim --&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'email\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span><span class=\"c\" style=\"color:silver\">&lt;!-- Pemanggilan data pada field email --&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'jurusan\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span><span class=\"c\" style=\"color:silver\">&lt;!-- Pemanggilan data pada field jurusan --&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span>\r\n                                <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"badge badge-primary\"</span> <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"#\"</span>&gt;</span>Edit<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n                                <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"badge badge-danger\"</span> <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"#\"</span>&gt;</span>Delete<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n                            <span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\" >&lt;/tr&gt;</span>\r\n                    <span>&lt;?php endforeach;&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\" >&lt;/tbody&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\" >&lt;/table&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                    </code></pre></figure>\r\n                    <br>\r\n                    <p>Kemudian buka file <b>Welcome.php</b> pada folder <b>\"application/controllers\"</b> kamudian ubah dan tambahkan script yang ada di bawah ini</p>\r\n                    <p><b>Script Welcome.php</b></p>\r\n                    <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span class=\"nt\" style=\"color:blue\">&lt;?php</span>\r\n        <span class=\"nt\" style=\"color:orange\">defined(\'BASEPATH\') or exit(\'No direct script access allowed\');</span>\r\n        <span class=\"nt\" style=\"color:greenyellow\">class <span style=\"color:aqua\">Welcome</span> extends <span style=\"color:aqua\">CI_Controller</span>{</span>\r\n            <span style=\"color:aqua\">public function <span style=\"color:yellow\">__construct()</span>{</span>\r\n                <span style=\"color:silver\">// Mengaktifkan fitur model untuk menggunakan sebuah model yang dibuat yaitu Mahasiswa_model</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">model</span>(\'<span style=\"color:coral\">Mahasiswa_model</span>\');\r\n                <span style=\"color:silver\">// Mengaktifkan fitur library yaitu form_validation untuk memvalidasikan sebuah inputan</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">library</span>(\'<span style=\"color:coral\">form_validation</span>\');\r\n                <span style=\"color:silver\">// Mengaktifkan fitur library yaitu session</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">library</span>(\'<span style=\"color:coral\">session</span>\');\r\n            <span style=\"color:aqua\">}</span>\r\n\r\n            <span style=\"color:aqua\">public function <span style=\"color:yellow\">index()</span>{</span>\r\n                <span style=\"color:silver\">// Membuat variabel $data dengan parameter [\'title\'] untuk menampilkan title pada file index.php yang telah dibuat di bagian views</span>\r\n                <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">title</span>\'] = \'<span style=\"color:coral\">Home Page</span>\';</span>\r\n                <span style=\"color:silver\">// Mengirimkan parameternya ke \'layout/template\' => file \'layout->template.php\' melalui variabel $data</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">layout/template</span>\',<span style=\"color:skyblue\">$data</span>);\r\n                <span style=\"color:silver\">// Menampilkan index.php yang telah dibuat pada bagian views</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">index</span>\');\r\n            <span style=\"color:aqua\">}</span>\r\n\r\n            <span style=\"color:aqua\">public function <span style=\"color:yellow\">about()</span>{</span>\r\n                <span style=\"color:silver\">// Membuat variabel $data dengan parameter [\'title\'] dan [\'nama\'] => (bisa disesuiakan dengan nama yang kalian inginkan) untuk menampilkan title pada file about.php yang telah dibuat di bagian views</span>\r\n                <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">title</span>\'] = \'<span style=\"color:coral\">About Page</span>\';</span>\r\n                <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">nama</span>\'] = \'<span style=\"color:coral\">Bayu Wardana</span>\';</span>\r\n                <span style=\"color:silver\">/// Mengirimkan parameternya ke \'layout/template\' => file \'layout->template.php\' melalui variabel $data</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">layout/template</span>\',<span style=\"color:skyblue\">$data</span>);\r\n                <span style=\"color:silver\">// Mengirimkan parameternya ke \'about => file \'about.php\' melalui variabel $data</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">about</span>\');\r\n            <span style=\"color:aqua\">}</span>\r\n\r\n            <span style=\"color:aqua\">public function <span style=\"color:yellow\">mahasiswa()</span>{</span>\r\n                <span style=\"color:silver\">// Membuat variabel $data dengan parameter [\'title\'] untuk menampilkan title pada file welcome_message.php yang telah dibuat di bagian views</span>\r\n                <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">title</span>\'] = \'<span style=\"color:coral\">Data Mahasiswa</span>\';</span>\r\n                <span style=\"color:silver\">// Membuat variabel $data dengan parameter[\'data_mahasiswa\'] dan dialihkan ke Mahasiswa_model untuk menggunakan function get</span>\r\n                <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">data_mahasiswa</span>\'] = <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">Mahasiswa_model</span>-><span style=\"color:yellow\">get</span>();</span>\r\n\r\n                <span style=\"color:silver\">// Pengaturan karakter dari form validation berupa (\'key\',\'value\',\'character\',\'set_character\')</span>\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">set_rules</span>(\'<span style=\"color:coral\">nama</span>\', <span style=\"color:coral\">Nama Mahasiswa</span>\',<span style=\"color:coral\">required|trim</span>\');\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">set_rules</span>(\'<span style=\"color:coral\">nim</span>\', <span style=\"color:coral\">NIM</span>\',<span style=\"color:coral\">required|trim|is_unique[data_mahasiswa.nim]</span>\',[\'<span style=\"color:coral\">is_unique\'=>\'NIM Sudah Terdaftar</span>\']);\r\n                <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">set_rules</span>(\'<span style=\"color:coral\">email</span>\', <span style=\"color:coral\">Email</span>\',<span style=\"color:coral\">required|trim|is_unique[data_mahasiswa.email]</span>\',[\'<span style=\"color:coral\">is_unique\'=>\'Email Sudah Terdaftar</span>\']);\r\n\r\n                <span style=\"color:blueviolet\">if</span>(<span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">run</span>()==<span style=\"color:blue\">FALSE</span>)<span style=\"color:aqua\">{</span>\r\n                    <span style=\"color:silver\">// Jika proses valdasinya gagal akan muncul pesan kesalahan </span>\r\n                    <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">layout/template</span>\',<span style=\"color:skyblue\">$data</span>);\r\n                    <span style=\"color:silver\">// dan mengirimkan variabel $data ke view </span>\r\n                    <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">welcome_message</span>\',<span style=\"color:skyblue\">$data</span>);\r\n                <span style=\"color:aqua\">}</span><span style=\"color:blueviolet\">else</span><span style=\"color:aqua\">{</span>\r\n                    <span style=\"color:silver\">// Mengeksekusi query data insert pada Mahasiswa_model</span>\r\n                    <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">Mahasiswa_model</span>-><span style=\"color:yellow\">insert</span>();\r\n                    <span style=\"color:silver\">// Memunculkan pesan ketika proses inputan berhasil</span>\r\n                    <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">session</span>-><span style=\"color:yellow\">set_flashdata</span>(<span style=\"color:coral\">\'message\'</span>,<span style=\"color:coral\">\'&lt;div class=\"alert alert-success\" role=\"alert\"&gt;Data telah ditambahkan &lt;/div&gt;\'</span>);\r\n                    <span style=\"color:silver\">// Ketika eksekusinya berhasil akan dialihkan ke controller Welcome->mahasiswa yaitu menuju ke halaman awal data mahasiswa</span>\r\n                    <span style=\"color:yellow\">redirect</span>(\'<span style=\"color:coral\">index.php/Welcome/mahasiswa</span>\');\r\n                <span style=\"color:aqua\">}</span>\r\n            <span style=\"color:aqua\">}</span>\r\n        <span class=\"nt\" style=\"color:greenyellow\">}</span>\r\n                    </code></pre></figure>\r\n                    <br>\r\n                    <p>Kemudian buka file <b>Mahasiswa_model.php</b> yang pada <b>\"application/models\"</b> dan tambahkan script yang ada di bawah ini</p>\r\n                    <p><b>Script Mahasiswa_model.php</b></p>\r\n                    <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span class=\"nt\" style=\"color:blue\">&lt;?php</span>\r\n    <span class=\"nt\" style=\"color:orange\">defined(\'BASEPATH\') or exit(\'No direct script access allowed\');</span>\r\n\r\n    <span style=\"color:silver\">// Pembuatan class dengan Nama Mahasiswa_model nama nya class nya harus sama dengan nama file nya ini haruskan dan extend nya CI_Model</span>\r\n    <span class=\"nt\" style=\"color:greenyellow\">class <span style=\"color:aqua\">Mahasiswa_model</span> extends <span style=\"color:aqua\">CI_Model</span>{</span>\r\n        <span style=\"color:silver\"> // Pembuatan function get</span>\r\n        <span style=\"color:aqua\">public function <span style=\"color:yellow\">get()</span>{</span>\r\n            <span style=\"color:silver\">// Menampilkan data mahasiswa pada tabel data_mahasiswa</span>\r\n            <span style=\"color:blueviolet\">retrn</span> <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">db</span>-><span style=\"color:yellow\">get</span>(\'<span style=\"color:coral\">data_mahasiswa</span>\')-><span style=\"color:yellow\">result_array</span>();\r\n        <span style=\"color:aqua\">}</span>\r\n\r\n        <span style=\"color:aqua\">public function <span style=\"color:yellow\">insert()</span>{</span>\r\n\r\n            <span style=\"color:silver\">// Pengaturan data inputan pada field tabel data_mahasiswa </span>\r\n            <span style=\"color:skyblue\">$data</span>=[\r\n                <span style=\"color:coral\">nama</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">nama</span>\'),\r\n                <span style=\"color:coral\">nim</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">nim</span>\'),\r\n                <span style=\"color:coral\">email</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">email</span>\'),\r\n                <span style=\"color:coral\">jurusan</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">jurusan</span>\')\r\n                ];\r\n            <span style=\"color:silver\">// Perintah input data query ke database</span>\r\n            <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">db</span>-><span style=\"color:yellow\">insert</span>(\'<span style=\"color:coral\">data_mahasiswa</span>\', <span style=\"color:skyblue\">$data</span>)\r\n\r\n        <span style=\"color:aqua\">}</span>\r\n    <span class=\"nt\" style=\"color:greenyellow\">}</span>\r\n                    </code></pre></figure>\r\n                    <br>\r\n                    <p>Kemudian save semua file yang sudah diubah dan ditambahkan. Buka browser dan masukkan url <b>http://localhost/Mahasiswa</b> lalu enter maka akan tampil halaman home yang telah kita buat.</p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/2.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/2.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>Klik menu about untuk menuju ke halaman about</p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/3.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/3.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>Klik menu mahasiswa untuk menuju ke halaman Data Mahasiswa</p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/4.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/4.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>Disini kita akan menambahkan data mahasiswa yang telah kita buat apakah bekerja dengan baik atau tidak dengan klik button add data dan isikan data yang ingin dimasukkan kemudian <b>Save Change</b></p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/5.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/5.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>Seketika secara otomatis akan muncul di halaman tabel Data Mahasiswa dan status pesan yang kita buat menggunakan session <b>\"Data telah ditambahkan\"</b></p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/6.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/6.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>Kemudian kita akan mencoba menambahkan data dengan nim dan email yang sama apakah muncul pesan error yang kita buat atau tidak</p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/7.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/7.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>Dan kemudian akan muncul pesan erorr <b>\"Email sudah terdaftar\" => \"NIM sudah terdaftar\"</b> ini karena sistem yang kita buat telah menolak menginputkan data yang sama</p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/8.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi4/8.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>\r\n                        Bagaimana, pasti kalian juga berhasil :). Kalau misalkan ada kesulitan bisa langsung comment di bagian Replay. Untuk tutorial selanjutnya kita akan membahas tentang Edit dan Hapus data Mahasiswa. Sekian dan terima kasih.....\r\n                    </p>\r\n                    <br>', 'ci1.jpg', 1, 1564546678, 1);
INSERT INTO `blog` (`id_blog`, `title`, `judul`, `isi`, `image`, `is_active`, `date_created`, `id_category`) VALUES
(20, 'Freamwork Web Code Igniter 3', '#5. Menambahkan fitur Update dan Delete Data Pada Code Igniter', '<p>\r\n                                 Masih di tutorial tentang Code Igniter. Ditutorial sebelumnya kita sudah membahas tentang Menambahkan Fungsi Insert Data Mahasiswa Pada Code Igniter. Dan sekarang kita akan melanjutkan materi tentang Update dan Delete data mahasiswa. Jika kalian belum mempunyai project sebelumnya, saya sudah memberikan link project untuk mendownloadnya dibagian comment pada Materi ke #4 Menambahkan Fungsi Insert Data Mahasiswa.\r\n                            </p>\r\n                            <p>\r\n                                Buka project yang sudah kita buat sebelumnya menggunakan Text Editor masing-masing. Disini saya memakai Visual Studio Code, jika kalian ingin menggunakan nya bisa klik <a href=\"https://code.visualstudio.com/download\">link</a> ini.\r\n                            </p>\r\n                            <p>Buka file welcome_message.php yang ada di folder <b>”application/views”</b> dan tambahkan sebuah link edit dan delete didalamnya. Silahkan samakan scriptnya yang ada dibawah ini<p>\r\n                            <p><b>Script welcome_message.php</b></p>\r\n <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span>&lt;?php $i = 1;\r\n    foreach ($data_mahasiswa as $mhs) :?&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;tr</span><span >&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $i++; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'nama\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'nim\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'email\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span><span>&lt;?= $mhs[\'jurusan\']; ?&gt;</span><span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;td</span><span >&gt;</span>\r\n            <span class=\"c\" style=\"color:silver\">&lt;!-- Menambahkan link pada button Edit dan Delete --&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"badge badge-primary\"</span> <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span style=\"color:white\">&lt;?= base_url(\'index.php/Welcome/ubahDataMahasiswa/\');?&gt;&lt;?= $mhs[\'id\'];?&gt;</span>\"</span>&gt;</span>Edit<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n                <span class=\"nt\" style=\"color:red\">&lt;a <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"badge badge-danger\"</span> <span class=\"na\" style=\"color:darkorange\">href=</span><span class=\"s\" style=\"color:darkturquoise\">\"<span style=\"color:white\">&lt;?= base_url(\'index.php/Welcome/hapusDataMahasiswa/\');?&gt;&lt;?= $mhs[\'id\'];?&gt;</span>\"</span>&gt;</span>Delete<span class=\"nt\" style=\"color:red\">&lt;/a&gt;</span> \r\n            <span class=\"nt\" style=\"color:red\" >&lt;/td&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\" >&lt;/tr&gt;</span>\r\n    <span>&lt;?php endforeach;&gt;</span>\r\n</code></pre></figure>\r\n                            <br>\r\n                            <p>\r\n                                Kemudian buat file baru dengan nama <b>edit.php</b> di folder <b>\"application/views\"</b> file ini digunakan untuk mengupdate data mahasiswa pada saat pengisian di form pada data yang di ubah. \r\n                            </p>\r\n                            <p><b>Script edit.php</b></p>\r\n                            <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"container\"</span><span >&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"row\"</span><span >&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"col-md-10\"</span><span >&gt;</span>\r\n                <span class=\"nt\" style=\"color:red\">&lt;form</span> <span class=\"na\" style=\"color:darkorange\">method=</span><span class=\"s\" style=\"color:darkturquoise\">\"POST\"</span><span >&gt;</span>\r\n\r\n                    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-group\"</span><span >&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;label <span class=\"na\" style=\"color:darkorange\">for=</span><span class=\"s\" style=\"color:darkturquoise\">\"nama\"</span> &gt;</span>Nama Mahasiswa<span class=\"nt\" style=\"color:red\">&lt;/label&gt;</span> \r\n                        <span class=\"nt\" style=\"color:red\">&lt;input <span class=\"na\" style=\"color:darkorange\">type=</span><span class=\"s\" style=\"color:darkturquoise\">\"text\"</span> <span class=\"na\" style=\"color:darkorange\">name=</span><span class=\"s\" style=\"color:darkturquoise\">\"nama\"</span> <span class=\"na\" style=\"color:darkorange\">id=</span><span class=\"s\" style=\"color:darkturquoise\">\"nama\"</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-control\"</span> <span class=\"na\" style=\"color:darkorange\">placeholder=</span><span class=\"s\" style=\"color:darkturquoise\">\"Masukan Nama\"</span> <span class=\"na\" style=\"color:darkorange\">value=</span><span class=\"s\" style=\"color:darkturquoise\">\"&lt;?= $getid[\'nama\'];?&gt;\"</span> required </span>/&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"text-danger\"</span> <span class=\"na\" style=\"color:darkorange\">style=</span><span class=\"s\" style=\"color:darkturquoise\">\"font-size:small;\"</span><span style=\"color:red\">&gt;</span>&lt;?= form_error(\'nama\');?&gt;\"<span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n\r\n                    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-group\"</span><span >&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;label <span class=\"na\" style=\"color:darkorange\">for=</span><span class=\"s\" style=\"color:darkturquoise\">\"nim\"</span> &gt;</span>NIM<span class=\"nt\" style=\"color:red\">&lt;/label&gt;</span> \r\n                        <span class=\"nt\" style=\"color:red\">&lt;input <span class=\"na\" style=\"color:darkorange\">type=</span><span class=\"s\" style=\"color:darkturquoise\">\"text\"</span> <span class=\"na\" style=\"color:darkorange\">name=</span><span class=\"s\" style=\"color:darkturquoise\">\"nim\"</span> <span class=\"na\" style=\"color:darkorange\">id=</span><span class=\"s\" style=\"color:darkturquoise\">\"nim\"</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-control\"</span> <span class=\"na\" style=\"color:darkorange\">placeholder=</span><span class=\"s\" style=\"color:darkturquoise\">\"Masukan NIM\"</span> <span class=\"na\" style=\"color:darkorange\">value=</span><span class=\"s\" style=\"color:darkturquoise\">\"&lt;?= $getid[\'nim\'];?&gt;\"</span> required </span>/&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"text-danger\"</span> <span class=\"na\" style=\"color:darkorange\">style=</span><span class=\"s\" style=\"color:darkturquoise\">\"font-size:small;\"</span><span style=\"color:red\">&gt;</span>&lt;?= form_error(\'nim\');?&gt;\"<span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n\r\n                    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-group\"</span><span >&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;label <span class=\"na\" style=\"color:darkorange\">for=</span><span class=\"s\" style=\"color:darkturquoise\">\"email\"</span> &gt;</span>Email<span class=\"nt\" style=\"color:red\">&lt;/label&gt;</span> \r\n                        <span class=\"nt\" style=\"color:red\">&lt;input <span class=\"na\" style=\"color:darkorange\">type=</span><span class=\"s\" style=\"color:darkturquoise\">\"email\"</span> <span class=\"na\" style=\"color:darkorange\">name=</span><span class=\"s\" style=\"color:darkturquoise\">\"email\"</span> <span class=\"na\" style=\"color:darkorange\">id=</span><span class=\"s\" style=\"color:darkturquoise\">\"email\"</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-control\"</span> <span class=\"na\" style=\"color:darkorange\">placeholder=</span><span class=\"s\" style=\"color:darkturquoise\">\"Masukan Email\"</span> <span class=\"na\" style=\"color:darkorange\">value=</span><span class=\"s\" style=\"color:darkturquoise\">\"&lt;?= $getid[\'email\'];?&gt;\"</span> required </span>/&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"text-danger\"</span> <span class=\"na\" style=\"color:darkorange\">style=</span><span class=\"s\" style=\"color:darkturquoise\">\"font-size:small;\"</span><span style=\"color:red\">&gt;</span>&lt;?= form_error(\'email\');?&gt;\"<span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n\r\n                    <span class=\"nt\" style=\"color:red\">&lt;div</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-group\"</span><span >&gt;</span>\r\n                        <span class=\"nt\" style=\"color:red\">&lt;label <span class=\"na\" style=\"color:darkorange\">for=</span><span class=\"s\" style=\"color:darkturquoise\">\"jurusan\"</span> &gt;</span>Jurusan<span class=\"nt\" style=\"color:red\">&lt;/label&gt;</span> \r\n                        <span class=\"nt\" style=\"color:red\">&lt;select</span> <span class=\"na\" style=\"color:darkorange\">name=</span><span class=\"s\" style=\"color:darkturquoise\">\"jurusan\"</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"form-group\"</span> <span class=\"na\" style=\"color:darkorange\">id=</span><span class=\"s\" style=\"color:darkturquoise\">\"jurusan\"</span> <span >&gt;</span>\r\n                            <span class=\"nt\" style=\"color:red\">&lt;option <span class=\"na\" style=\"color:darkorange\">value=</span><span class=\"s\" style=\"color:darkturquoise\">\"Teknik Informatika\"</span> &gt;</span>Teknik Informatika<span class=\"nt\" style=\"color:red\">&lt;/option&gt;</span> \r\n                            <span class=\"nt\" style=\"color:red\">&lt;option <span class=\"na\" style=\"color:darkorange\">value=</span><span class=\"s\" style=\"color:darkturquoise\">\"Ilmu Komunikasi\"</span> &gt;</span>Ilmu Komunikasi<span class=\"nt\" style=\"color:red\">&lt;/option&gt;</span> \r\n                            <span class=\"nt\" style=\"color:red\">&lt;option <span class=\"na\" style=\"color:darkorange\">value=</span><span class=\"s\" style=\"color:darkturquoise\">\"Sistem Informasi\"</span> &gt;</span>Sistem Informasi<span class=\"nt\" style=\"color:red\">&lt;/option&gt;</span> \r\n                        <span class=\"nt\" style=\"color:red\" >&lt;/select&gt;</span>\r\n                    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n\r\n                    <span class=\"nt\" style=\"color:red\">&lt;button <span class=\"na\" style=\"color:darkorange\">type=</span><span class=\"s\" style=\"color:darkturquoise\">\"submit\"</span> <span class=\"na\" style=\"color:darkorange\">class=</span><span class=\"s\" style=\"color:darkturquoise\">\"btn btn-primary\"</span> &gt;</span>Update<span class=\"nt\" style=\"color:red\">&lt;/button&gt;</span> \r\n\r\n                <span class=\"nt\" style=\"color:red\" >&lt;/form&gt;</span>\r\n            <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n        <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n    <span class=\"nt\" style=\"color:red\" >&lt;/div&gt;</span>\r\n</code></pre></figure>\r\n                        <br>\r\n                        <p>\r\n                            Script diatas merupakan form untuk mengupdate sebuah data mahasiswa yang ingin kita edit datanya dan terdapat \"form_error\" untuk memberikan pesan error pada form jika pengisian nya tidak sesuai kriteria ataupun kosong.\r\n                        </p>\r\n                        <p>\r\n                            Kemudian tambahkan function <b>ubahDataMahasiswa</b> dan <b>hapusDataMahasiswa</b> pada file controllere <b>Welcome.php</b> yang ada di folder <b>\"application/controllers/\"</b>. Tambahkan script dibawah ini.\r\n                        </p>\r\n                        <p><b>Script Welcome.php</b></p>\r\n\r\n                        <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    <span style=\"color:aqua\">public function <span style=\"color:yellow\">ubahDataMahasiswa($id)</span>{</span>\r\n        <span style=\"color:silver\">// Membuat variabel $data dengan parameter [\'title\'] untuk menampilkan title pada file ubah.php yang telah dibuat di bagian views</span>\r\n        <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">title</span>\'] = \'<span style=\"color:coral\">Edit Data Mahasiswa</span>\';</span>\r\n        <span style=\"color:silver\">// Membuat variabel $data dengan parameter[\'data_mahasiswa\'] dan dialihkan ke Mahasiswa_model untuk menggunakan function getById untuk menampilkan satu data berdasarkan id</span>\r\n        <span style=\"color:skyblue\">$data[\'<span style=\"color:coral\">data_mahasiswa</span>\'] = <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">Mahasiswa_model</span>-><span style=\"color:yellow\">getById</span>($id);</span>\r\n\r\n        <span style=\"color:silver\">// Pengaturan karakter dari form validation berupa (\'key\',\'value\',\'character\',\'set_character\')</span>\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">set_rules</span>(\'<span style=\"color:coral\">nama</span>\', <span style=\"color:coral\">Nama Mahasiswa</span>\',<span style=\"color:coral\">required|trim</span>\',[\'<span style=\"color:coral\">required\'=>\'Nama Harus Dimasukkan</span>\']);\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">set_rules</span>(\'<span style=\"color:coral\">nim</span>\', <span style=\"color:coral\">NIM</span>\',<span style=\"color:coral\">required|trim</span>\',[\'<span style=\"color:coral\">required\'=>\'NIM Harus Dimasukkan</span>\']);\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">set_rules</span>(\'<span style=\"color:coral\">email</span>\', <span style=\"color:coral\">Email</span>\',<span style=\"color:coral\">required|trim|valid_email</span>\',[\'<span style=\"color:coral\">valid_email\'=>\'Email Harus Benar</span>\',\'<span style=\"color:coral\">required\'=>\'Email Harus Dimasukkan</span>\']);\r\n\r\n        <span style=\"color:blueviolet\">if</span>(<span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">form_validation</span>-><span style=\"color:yellow\">run</span>()==<span style=\"color:blue\">FALSE</span>)<span style=\"color:aqua\">{</span>\r\n            <span style=\"color:silver\">// Jika proses valdasinya gagal akan muncul pesan kesalahan </span>\r\n            <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">layout/template</span>\',<span style=\"color:skyblue\">$data</span>);\r\n            <span style=\"color:silver\">// dan mengirimkan variabel $data ke view </span>\r\n            <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">load</span>-><span style=\"color:yellow\">view</span>(\'<span style=\"color:coral\">ubah</span>\',<span style=\"color:skyblue\">$data</span>);\r\n        <span style=\"color:aqua\">}</span><span style=\"color:blueviolet\">else</span><span style=\"color:aqua\">{</span>\r\n            <span style=\"color:silver\">// Mengeksekusi query update data pada Mahasiswa_model</span>\r\n            <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">Mahasiswa_model</span>-><span style=\"color:yellow\">ubahData</span>();\r\n            <span style=\"color:silver\">// Memunculkan pesan ketika proses update berhasil</span>\r\n            <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">session</span>-><span style=\"color:yellow\">set_flashdata</span>(<span style=\"color:coral\">\'message\'</span>,<span style=\"color:coral\">\'&lt;div class=\"alert alert-success\" role=\"alert\"&gt;Data telah diperbaharui &lt;/div&gt;\'</span>);\r\n            <span style=\"color:silver\">// Ketika eksekusinya berhasil akan dialihkan ke controller Welcome->mahasiswa yaitu menuju ke halaman awal data mahasiswa</span>\r\n            <span style=\"color:yellow\">redirect</span>(\'<span style=\"color:coral\">index.php/Welcome/mahasiswa</span>\');\r\n        <span style=\"color:aqua\">}</span>\r\n    <span style=\"color:aqua\">}</span>\r\n\r\n    <span style=\"color:aqua\">public function <span style=\"color:yellow\">hapusDataMahasiswa($id)</span>{</span>\r\n        <span style=\"color:silver\">// Mengeksekusi query delete data berdasarkan data yang dipilih berupa id  pada Mahasiswa_model</span>\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">Mahasiswa_model</span>-><span style=\"color:yellow\">hapusData</span>($id);\r\n        <span style=\"color:silver\">// Memunculkan pesan ketika proses delete berhasil</span>\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">session</span>-><span style=\"color:yellow\">set_flashdata</span>(<span style=\"color:coral\">\'message\'</span>,<span style=\"color:coral\">\'&lt;div class=\"alert alert-success\" role=\"alert\"&gt;Data telah dihapus &lt;/div&gt;\'</span>);\r\n        <span style=\"color:silver\">// Ketika eksekusinya berhasil akan dialihkan ke controller Welcome->mahasiswa yaitu menuju ke halaman awal data mahasiswa</span>\r\n        <span style=\"color:yellow\">redirect</span>(\'<span style=\"color:coral\">index.php/Welcome/mahasiswa</span>\');\r\n    <span style=\"color:aqua\">}</span>\r\n                    </code></pre></figure>\r\n                        <br>\r\n                        <p>\r\n                            Kemudian kita akan menambahkan script untuk meng-query update dan delete data pada model <b>Mahasiswa_model.php</b> berada di folder <b>\"application/models\"</b>. Tambahkan script dibawah ini\r\n                        </p>\r\n                        <p><b>Script Mahasiswa_model.php</b></p>\r\n                        <figure class=\"highlight bg-dark\"><pre><code class=\"language-html\" data-lang=\"html\" style=\"color:white\">\r\n    \r\n    <span style=\"color:aqua\">public function <span style=\"color:yellow\">ubahData()</span>{</span>\r\n\r\n        <span style=\"color:silver\">// Pengaturan data inputan pada field tabel data_mahasiswa </span>\r\n        <span style=\"color:skyblue\">$data</span>=[\r\n            <span style=\"color:coral\">nama</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">nama</span>\'),\r\n            <span style=\"color:coral\">nim</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">nim</span>\'),\r\n            <span style=\"color:coral\">email</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">email</span>\'),\r\n            <span style=\"color:coral\">jurusan</span> => <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">jurusan</span>\')\r\n                ];\r\n        <span style=\"color:silver\">// Perintah update data query ke database berdasarkan id</span>\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">db</span>-><span style=\"color:yellow\">where</span>(\'<span style=\"color:coral\">id</span>\',  <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">input</span>-><span style=\"color:yellow\">post</span>(\'<span style=\"color:coral\">id</span>\'));\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">db</span>-><span style=\"color:yellow\">update</span>(\'<span style=\"color:coral\">data_mahasiswa</span>\', <span style=\"color:skyblue\">$data</span>);\r\n\r\n    <span style=\"color:aqua\">}</span>\r\n\r\n    <span style=\"color:aqua\">public function <span style=\"color:yellow\">hapusData($id)</span>{</span>\r\n        <span style=\"color:silver\">// Menghapus data mahasiswa pada tabel data_mahasiswa berdasarkan id</span>\r\n        <span style=\"color:blue\">$this</span>-><span style=\"color:skyblue\">db</span>-><span style=\"color:yellow\">delete</span>(\'<span style=\"color:coral\">data_mahasiswa</span>\',[\'id\'=>$id]\');\r\n    <span style=\"color:aqua\">}</span>\r\n\r\n                    </code></pre></figure>\r\n                        <br>\r\n                        <p>\r\n                            Lalu simpan semua yang sudah ditambahkan scriptnya. Jalankan Apache dan Mysql pada Xampp nya kemudian ketikan url <b>localhost/Mahasiswa</b> pada browser sesuai nama project yang kita buat. arahkan ke menu Mahasiswa maka akan tampil halaman data Mahasiswa\r\n                        </p>\r\n                        <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/1.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/1.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>\r\n                        Disini saya akan mengubah data pertama yaitu Bayu Wardana kemudian klik tombol edit. Maka secara otomatis akan dialihkan ke halaman Edit Data Mahasiswa\r\n                    </p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/2.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/2.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>\r\n                        Disini saya akan mengubah Nama Mahasiswa dan NIM dari data tersebut dengan Nama Mahasiswa \"Bayu Pratama\" dan NIM \"G.231.14.0160\". Dan klik tombol Update\r\n                    </p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/3.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/3.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>\r\n                        Maka akan muncul pesan \"Data telah diperbaharui\" dan data pada baris pertama berubah.\r\n                    </p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/4.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/4.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>\r\n                        Kemudian kita menghapus satu data Mahasiswa. Disini saya akan menghapus data yang tadi kita ubah di baris pertama yaitu \"Bayu Pratama\" dengan klik tombol hapus. Maka secara otomatis data akan terhapus dari tabel dan akan muncul pesan \"Data telah dihapus\".\r\n                    </p>\r\n                    <a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/5.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi5/5.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a>\r\n                    <br>\r\n                    <p>\r\n                        Bagaimana, mungkin kalian juga berhasil :). Kalau ada yang belum paham bisa comment di bagian Replay dibawah ini. Untuk Selanjutnya kita akan membuat sebuah form login untuk menampilkan halaman yng sudah kita buat ini dan memberikan hak akses \"admin\" dan \"user\" dan halaman mana saja yang bisa diakses oleh \"admin\" maupun \"user\". Terima Kasih.\r\n                    </p>', 'ci1.jpg', 1, 1565417928, 1),
(21, 'Web Freamwork Laravel', '#1. Pengenalan Dan Instalasi Web Freamwork Laravel', '<p>Laravel adalah sebuah Freamwork Web PHP yang di pakai oleh para Developer karena kemudahan dalam scriptnya. Laravel sendiri mempunyai fitur - fitur yang tak kalah dari Freamwork Code Igniter yaitu.</p>\r\n\r\n\r\n\r\n<ol>\r\n	<li>MVC</li>\r\n<li>Migration</li>\r\n	<li>Route</li>\r\n	<li>Restfull controller dan lain-lain</li>\r\n</ol>\r\n\r\n<p>Kalian bisa melihat nya langsung didocumentasinya di <a href=\"https://laravel.com/docs/5.8\">link ini</a>.</p>\r\n\r\n<p>Di materi yang lain, kita juga melakukan coding&nbsp;dengan&nbsp;Freamwork Code Igniter.&nbsp;Dengan begitu&nbsp;kita bisa bedakan mana yang lebih efisien digunakan dalam Pemrograman Freamwork Web.</p>\r\n\r\n<p>Langsung aja kita akan membuat sebuah Project Freamwork Laravel, pertama kalian harus menginstall composer <a href=\"https://getcomposer.org/download/\">disini</a>&nbsp;untuk kalian yang memakai Sistem Operasi Windows untuk yang menggunakan sistem operasi Linux / MacOS bisa langsung ke <a href=\"https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos\">link ini</a>. Jika kalian sudah menginstall nya buka <strong>cmd</strong> kalau yang memakai Windows dan<strong> terminal </strong>kalau yang memakai Linux.</p>\r\n\r\n<p>Ketikan <strong>composer -v&nbsp;</strong>lalu enter, maka akan muncul tempilan seperti dibawah ini</p>\r\n\r\n <a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/1.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/1.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n\r\n<p>Maka composer anda berhasil terinstall. Kemudian kita akan membuat sebuah project Laravel, karena kita akan mendownload dari servernya maka kita menggunakan composer sebagai jembatan penghubungnya.&nbsp;</p>\r\n\r\n<p>Kemudian kita arahkan ke directori htdocs untuk memudahkan kita dalam menjalankannya.</p>\r\n<a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/2.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/2.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n\r\n<p>Ketikan <b>composer create-project --prefer-dist laravel/laravel Laravel</b>. Untuk menjalankan perintah ini kita harus terkoneksi ke internet.</p>\r\n\r\n<p><font face=\"monospace\">composer</font> : menggunakan composer sebagai penghubung ke servernya.</p>\r\n\r\n<p><font face=\"monospace\">create-project</font> : kita akan membuat sebuah project laravel nya.</p>\r\n\r\n<p><font face=\"monospace\">--prefer-dist laravel/laravel</font> : Mengambil dari server di laravel/laravel dengan versi yang terupdate.</p>\r\n\r\n<p><font face=\"monospace\">Laravel</font> : Nama project yang kita inginkan.</p>\r\n\r\n<p>Kemudian enter dan tunggu sampe proses downloadnya selesai</p>\r\n<a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/3.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/3.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n<p>Jika sudah selesai maka di folder htdocs kita sudah terinstall Project Laravel nya. Kemudian kembali ke cmd dan masuk ke directori Laravel nya. kemudian kita akan menggunakan perintah <b>artisan</b> pada laravel. Perintah tersebut digunakan untuk membuat dan menjalankan fungsi dan fitur-fitur yang ada pada Laravel</p>\r\n<p>Kemudian ketikan <b>..\\..\\php\\php artisan serve</b> lalu enter</p>\r\n<a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/4.png\">\r\n                    <div class=\"post-thumb\">\r\n<img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/4.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n<p>Perintah <b>..\\..\\php\\php artisan serve</b> pada perintah artisan ini kita membutuhkan sebuah php untuk menjalankannya disini saya memakai php bawaan dari Xampp nya dan fungsi dari serve tersebut yaitu kita mengaktifkan Webserver atau Apache bawaan dari Laravel. Sebab itu laravel mempunyai Webserver sendiri untuk bisa menjalankan projectnya. Maka kita dapat dengan mudah langsung menjalankan projectnya lewat browser. Pada tampilan diatas ada tulisan <b>http://127.0.0.1:8000</b> itu adalah alamat dari project kita yang akan dijalankan di browser ketikan alamat ke browser kemudian enter</p>\r\n<a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/5.png\">\r\n                    <div class=\"post-thumb\">\r\n<img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/5.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n<p>Maka akan muncul tampilan halaman project kita. Nah... Disini kita sudah berhasil menginstalasi sebuah project Laravel kita. </p><br>\r\n<p>Sebenarnya ada pertanyaan. Kenapa tidak menggunakan Apache bawaan dari Xampp?</p>\r\n<p>Sebenarnya kita bisa menggunakan Apache bawaan dari Xampp tanpa harus menggunakan Web Server dari Laravel, tetapi ada perbedaan nya kalau kita menggunakan Apache bawaan dari Xampp, kita tinggal mengetikan <b>http://localhost/Laravel</b>(nama projectnya) untuk menjalankan file utamanya yaitu file index kemudian langsung tampil di browser kan. Maka jika kita menuliskan itu di browser maka akan tampil seperti berikut</p>\r\n<a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/6.png\">\r\n                    <div class=\"post-thumb\">\r\n<img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/6.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n<p>Tampilan diatas menampilkan isi dari project Laravel kita tanpa menampilkan halaman project kita maka perlu file index untuk menjalankannya. Di laravel mempunyai file index tersebut di folder public klik saja pada folder public atau dengan menambahkan alamat <b>http://localhost/Laravel</b> menjadi <b>http://localhost/Laravel/public</b> kemudian enter, maka akan tampil project kita</p>\r\n<a href=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/7.png\">\r\n                    <div class=\"post-thumb\">\r\n<img src=\"http://localhost/Login_CI/asset/User/img/materi/Laravel/Materi1/7.png\" class=\"img-fluid\" alt=\"\">\r\n                    </div>\r\n                    </a><br>\r\n<p>Bagaimana pasti kalian juga berhasil. Jika ada pertanyaan silahkan comment di bagian Replay dibawah ini. Untuk materi selanjutnya kita akan menggunakan fitur MVC pada Laravel supaya tau perbedaan MVC milik Code Igniter dan Laravel. Sekian Dari Saya Terima Kasih</p>', 'laravel.png', 1, 1565423525, 5),
(26, 'Freamwork Web Code Igniter 3', '#6. Membuat Form Login Pada Code Igniter', '<p>Masih di tutorial tentang Code Igniter ditutorial sebelumnya kita sudah membahas tentang menambahkan fitur Update dan Delete Data Pada Code Igniter. Maaf sudah lama ngk hosting materi :D.</p><p>Disini kita akan melanjutkan project kita yaitu kita akan menambahkan funsi form login, ketika saat login dengan menggunakan email dan password untuk bisa mengakses data Mahasiswa yang telah kita buat sebelumnya. Lansung saja ke tahap coding nya.</p><p>Pertama kita akan menambahkan sebuah tabel <strong>users</strong> di databsae yaitu mengakses url : http://localhost/phpmyadmin pada browser kemudian masuk ke database yang kita gunakan dan tambahkan tabel users, berikut adalah pengaturan field nya:</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/1.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/1.png\" class=\"img-fluid\" alt=\"\"></div><br/><p>Kemudian masukan beberapa data pada tabel <strong>users</strong>, Disini saya memasukkan 1 data untuk percobaannya.</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/2.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/2.png\" class=\"img-fluid\" alt=\"\"></div><br/><p>Lalu buat file <strong>Auth.php</strong> pada controller, kemudian masukan script dibawah ini:</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/3.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/3.png\" class=\"img-fluid\" alt=\"\"></div><br/><p>Lalu buat file <strong>login.php</strong> pada view, kemudian masukan script dibawah ini:</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/4.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/4.png\" class=\"img-fluid\" alt=\"\"></div><br/><p>Lalu jalankan project kita dibrowser yaitu mengakses url:<strong>http://localhost/Mahasiswa/Auth</strong>, ketika email yang dimasukkan belum terdaftar pada database maka akan muncul pesan kesalahan.</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/5.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/5.png\" class=\"img-fluid\" alt=\"\"></div><br/><p>Jika password yang dimasukkan salah maka akan muncul pesan kesalahan.</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/6.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/6.png\" class=\"img-fluid\" alt=\"\"></div><br><p>Jika email dan password yang dimasukkan benar maka akan masuk ke halaman data mahasiswa</p><a href=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/7.png\">\r\n                    <div class=\"post-thumb\">\r\n                        <img src=\"http://localhost/Login_CI/asset/User/img/materi/CI/Materi6/7.png\" class=\"img-fluid\" alt=\"\"></div><br><p>Gimana, kalian pasti juga berhasil kan. Jika ada masalah langsung comment dibagian Replay dibawah ini. Itu saja untuk tutorial ini, kita akan melanutkan membuat halaman Registrasi users menggunakan akses SMTP Gmail untuk mendapatkan verifikasi pengaktifan akun yang kita buat.</p><p>Terima Kasih :)</p>', 'ci1.jpg', 1, 1569714271, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(25) DEFAULT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `kategori`, `is_active`, `url`, `icon`, `image`) VALUES
(1, 'Code Igniter 3', 1, 'Welcome/program', 'fas fa-fire', 'ci1.jpg'),
(2, 'Jaringan', 0, 'Welcome/jaringan', 'fas fa-sitemap', ''),
(3, 'Puisi', 0, 'Welcome/puisi', 'fas fa-pencil-alt', ''),
(4, 'Server', 0, 'Welcome/server', 'fas fa-servers', ''),
(5, 'Laravel', 1, '', 'fab fa-laravel', 'laravel.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mess` text DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `date_created` int(50) DEFAULT NULL,
  `id_blog` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `gender`, `mess`, `logo`, `date_created`, `id_blog`) VALUES
(1, 'Bayu Wardana', 'Male', 'Good', 'bayu.jpg', 1563969317, 17),
(2, 'Bayu Wardana', 'Male', '&amp;lt;!DOCTYPE html&gt;\r\n&amp;lt;html lang=&quot;en&quot;&amp;gt;\r\n\r\n&amp;lt;head&amp;gt;\r\n    &amp;lt;title&amp;gt;&amp;lt;?= $title; ?&amp;gt;&amp;lt;/title&amp;gt;\r\n    &amp;lt;!-- CSS Bootstrap --&amp;gt;\r\n    &amp;lt;link rel=&quot;stylesheet&quot; href=&quot;&amp;lt;?= base_url(\'asset/bootstrap/css/bootstrap.min.css\') ?&amp;gt;&quot;&amp;gt;\r\n&amp;lt;/head&amp;gt;\r\n\r\n&amp;lt;body&amp;gt;\r\n\r\n    &amp;lt;!-- Start Navbar --&amp;gt;\r\n    &lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;\r\n        &lt;a class=&quot;navbar-brand&quot; href=&quot;&amp;lt;?= base_url(\'index.php/Welcome\'); ?&amp;gt;&quot;&gt;Home&lt;/a&gt;\r\n        &amp;lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&amp;gt;\r\n            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;\r\n        &amp;lt;/button&amp;gt;\r\n        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;\r\n            &lt;ul class=&quot;navbar-nav&quot;&gt;\r\n                &lt;li class=&quot;nav-item&quot;&gt;\r\n                    &lt;a class=&quot;nav-link&quot; href=&quot;&amp;lt;?= base_url(\'index.php/Welcome/about\'); ?&amp;gt;&quot;&gt;About&lt;/a&gt;\r\n                &lt;/li&gt;\r\n                &lt;li class=&quot;nav-item&quot;&gt;\r\n                    &lt;a class=&quot;nav-link&quot; href=&quot;&amp;lt;?= base_url(\'index.php/Welcome/mahasiswa\'); ?&amp;gt;&quot;&gt;Mahasiswa&lt;/a&gt;\r\n                &lt;/li&gt;\r\n            &lt;/ul&gt;\r\n        &lt;/div&gt;\r\n    &lt;/nav&gt;\r\n    &amp;lt;!-- End Navbar --&amp;gt;\r\n\r\n    &amp;lt;!-- jQuery first then Bootstrap JS --&amp;gt;\r\n    [removed][removed]\r\n    [removed][removed]\r\n&amp;lt;/body&amp;gt;\r\n\r\n&amp;lt;/html&amp;gt;', 'bayu.jpg', 1564468944, 18),
(3, 'Bayu Wardana', 'Male', 'Hayyy', 'bayu.jpg', 1569506634, 3),
(4, 'Alexandria13', 'Male', 'all right!', 'pria.png', 1569642412, 26),
(5, 'Bayu Wardana', 'Male', 'this is', 'bayu.jpg', 1580215717, 21);

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `full_name`, `date`, `gender`, `religion`, `address`, `phone`, `email`) VALUES
(1, 'Bayu Wardana', '1995-08-25', 'Male', 'Islam', 'Jln. Samuel No. 50. RT 11/RW 6. Dolog. Kelurahan Mandala. Kecamatan Biak Kota. Kabupaten Biak Numfor. Biak-Papua', '0813-1614-6399', 'wardanabayu455@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `name_education` varchar(100) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `study_program` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `address_education` text NOT NULL,
  `email_education` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name_education`, `faculty`, `study_program`, `title`, `address_education`, `email_education`, `no_telp`) VALUES
(1, 'Semarang University', 'Information and Communication Technology', 'Bachelor of Computer Science', 'S.Kom', 'Jl. Soekarno Hatta Semarang 50196', 'univ_smg@usm.ac.id', '(024)-6702-757');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'bayu123', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:developer/Api/users:get', 3, 1599785856, 'bayu123');

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `mess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `name`, `email`, `telp`, `mess`) VALUES
(1, 'Alexandria', 'wardanabayu455@yahoo.com', '080139820912', 'Haiiiiii'),
(2, 'Alexandria', 'wardanabayu455@yahoo.com', '080139820912', 'Haiiiiii'),
(3, 'Alexandria', 'wardanabayu455@yahoo.com', '080139820912', 'Haiiiiii'),
(4, 'Alexandria', 'wardanabayu455@yahoo.com', '080139820912', 'Haiiiiii'),
(5, 'Alexandria', 'wardanabayu455@yahoo.com', '080139820912', 'Haiiiiii'),
(6, 'Alexandria', 'wardanabayu455@yahoo.com', '080139820912', 'Haiiiiii'),
(7, 'khkjhk', 'bayu_alexandria62@yahoo.co.id', '080139820912', 'gfhfghfhg'),
(8, 'Bayu Wardana', 'bayu_alexandria62@yahoo.co.id', '080139820912', 'Hay....'),
(9, 'Bayu Wardana', 'bayu_alexandria62@yahoo.co.id', '080139820912', 'Hay....'),
(10, 'Bayu Wardana', 'bayu_alexandria62@yahoo.co.id', '080139820912', 'Hay.... Bayu Wardana'),
(11, 'aaa', 'aa@gmail.com', 'aaaa', 'aaa'),
(12, 'No company', 'wardanabayu455@gmail.com', 'aa', 'aaaa'),
(13, 'aa', 'admin@gmail.com', 'aaa', 'aaaaaa'),
(14, 'sdffsd', 'admin@gmail.com', 'jsfjlsfjlsd', 'jljljdfslk');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name_skill` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `ranting` varchar(50) NOT NULL,
  `#` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `name_skill`, `status`, `ranting`, `#`) VALUES
(1, 'Microsoft Office Word-Excel-Power Point', 'Keahlian yang dimiliki yaitu membuat laporan dan presentasi menggunakan MS.Word, MS.Excel dan MS.Power Point', '97', 'office'),
(2, 'Networking Computer', 'Keahlian yang dimiliki yaitu Routing, Mikrotik, Troubleshooting and Maintenance', '95', 'network'),
(3, 'Freamwork Code Igniter', 'Keahlian yang dimiliki yaitu membuat sebuah aplikasi web responsive menggunakan freamwork Code Igniter 3', '80', 'ci'),
(4, 'Freamwork Laravel', 'Keahlian yang dimiliki yaitu membuat sebuah aplikasi web responsive menggunakan freamwork Laravel', '70', 'laravel'),
(5, 'Operating System', 'Keahlian yang dimiliki yaitu penggunaan sebuah sistem operasi (Windows, Linux, Mac)', '90', 'os'),
(6, 'MySQL', 'Keahlian yang dimiliki yaitu membuat dan mengkonfigurasi (Operate) perintah SQL pada sebuah database', '80', 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `name_social_media` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name_social_media`, `icon`, `url`) VALUES
(1, 'Whatsapp', 'whatsapp', '0813-1614-6399'),
(2, 'Facebook', 'facebook', 'https://www.facebook.com/bayu.alexandria.315'),
(3, 'Instagram', 'instagram', 'https://www.instagram.com/bayualexandria13/'),
(4, 'Twitter', 'twitter', 'https://twitter.com/b4yu_4lex4ndri4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Muhammad Yusuf', 'myusuf7@gmail.com', 'default.png', '$2y$10$tY7i1zo2fU5MS.PZ1yxa6OuIfDz/yvDVqTq.FrxRE4YJdoonbEHYK', 2, 1, 1562503427),
(5, 'Mustafirin', 'mustafirin@gmail.com', 'default.png', '$2y$10$EJy0uzrUXPyiMDp6Z/kDz.kDO2vSAxs0GTLK437ojbrxqnmWZ77oe', 2, 1, 1557940509),
(11, 'Muhammad Yusuf', 'yusufmuhamad713@gmail.com', 'default.png', '$2y$10$ZmFiddgDbMs.FZneUMv5i.sEd5Ao0dwKVfd/t4RU7JGuHy9KFty.S', 2, 0, 1558817022),
(28, 'Bayu Wardana', 'wardanabayu455@gmail.com', 'default.png', '$2y$10$6tOihrIMiyA86.SS3uz8a.JKJ1ll.dvUjb7hYFEy3xLuvfT7A8/sa', 2, 1, 1569507257),
(30, 'Bayu Wardana', 'administrator@gmail.com', 'IMG_20190410_105726_5053.jpg', '$2y$10$415ondEoI91pCPtoodiRGO0SaKgUZG/0xQ2S7gORrCIynsGXYAb0a', 1, 1, 1560491504),
(31, 'Pandu Setiawan', 'pandu@gmail.com', 'default.png', '$2y$10$OHYI7.ej/AiEYegB8.B1BOZBkeRDwiO6tHM7Mrc33qnX2N7yzUmW6', 2, 1, 1560495053),
(32, 'Sandy Khagali', 'sandyk@gmail.com', 'default.png', '$2y$10$JCx.rbtyXla2lO/ZdTxYM.U8XW5qG/QtW2yXs5mAzcJFOWR3Yvq1q', 2, 1, 1562394350),
(33, 'Sandy Khagali', 'shandyl@gmail.com', 'default.png', '$2y$10$bTuvOhbpc0B8cuAo1nFLiuedrXunsOgVWHDK4y9i6minJPzH2LBUu', 2, 1, 1562394401);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(7, 1, 5),
(26, 1, 4),
(29, 1, 2),
(30, 1, 3),
(31, 2, 3),
(32, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `icons` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icons`) VALUES
(1, 'Home', 'fa fas fa-home'),
(2, 'Admin', 'fas fa-desktop'),
(3, 'User', 'fas fa-user'),
(4, 'Menu', 'fas fa-th-list'),
(5, 'Content', 'fab fa-blogger');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(4, 4, 'Menu Management', 'menu', 'far fa-folder text-blue', 1),
(5, 4, 'Sub Menu Management', 'menu/submenu', 'far fa-folder-open text-blue', 1),
(6, 2, 'Access', 'admin', 'fas fa-check-circle text-red', 1),
(7, 3, 'Change Password', 'user/changepassword', 'fa fa-key text-orange', 0),
(10, 1, 'Dasboard', 'home', 'fas fa-tachometer-alt text-green', 1),
(11, 3, 'My Profile', 'user', 'a fa-user text-purple', 0),
(12, 3, 'Edit Profile', 'user/edit_profile', 'far fa-edit text-green', 1),
(13, 3, 'Change Password', 'user/changepassword', 'fa fa-key text-orange', 0),
(14, 2, 'User', 'admin/brain', 'fas fa-user-circle text-purple', 1),
(15, 5, 'Content', 'content', 'far fa-comment-alt text-blue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'wardanabayu455@gmail.com', 'Dk52xRoE1ag588Ws7agOa8p+co/OGRamq87OwomdAXQ=', 1563642757),
(2, 'wardanabayu455@gmail.com', 'bWls1gyp34a9+/sInwCIbLVpMVoyh8YFzBuKqxcOa3Y=', 1563800119),
(3, 'wardanabayu455@gmail.com', 'zjENMD3pvvgKfixR4OXuNvVl0XMscMOhPbR6wEcyUCk=', 1563800203),
(5, 'administrator@gmail.com', 'vSMScKgMBGeyrBrzsTGjDb49qPSiDbnhZJGKQlC6oY8=', 1569507174),
(6, 'wardanabayu455@gmail.com', 'nFRM9KgGPOWVcOey7QFEdxf0h7acYe0g06bnvi2bK8A=', 1579742196);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
