-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2023 pada 11.05
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desawisataapar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admindesaapar', '$2y$10$IJitiQJGFfpbcsqhBKm0OeDHHUxBMMuQGfeJ1rdgaRD18NfBmkCDC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal_upload`, `gambar`) VALUES
(4, 'Daya Tarik Unik Desa Wisata Apar, Punya Sekolah Tinggi Ilmu Beruk', '<p>Desa Wisata Apar juga menyuguhkan hamparan pantai dengan matahari terbenam yang indah dan memiliki konservasi penyu. Salah satu daya tarik unik desa ini yang mengangkat kearifan lokal, yakni atraksi beruk di Sekolah Tinggi Ilmu Beruk (STIB).</p>\r\n\r\n<p>Wisatawan dapat melihat aksi beruk memetik buah kelapa. Setelah menjatuhkan kelapa, beruk akan memberikannya kepada wisatawan.</p>\r\n\r\n<p>Dikutip dari kanal&nbsp;<em>Regional Liputan6.com</em>, pembelajaran di STIB terdiri dari enam kurikulum khusus yang berlangsung setiap pagi dan sore selama beberapa bulan. Selama tiga bulan pertama, hewan-hewan ini akan mengikuti pembelajaran mencakup pengenalan diri.</p>\r\n\r\n<p>Beruk masih pada tahap diberi makan dan dimandikan. Dua bulan selanjutnya, akan mengikuti tahapan yang disebut karambiah pancang. Beruk diperkenalkan dengan buah kelapa yang telah dipancang pada media berupa kayu.</p>\r\n\r\n<p>Kemudian, disusul dengan pembelajaran karambiah sompong. Tahapan ini berupa memutar-mutar buah kelapa yang dipancang dalam jangka waktu satu bulan belajar. Pembelajaran selanjutnya berlangsung selama dua bulan, disebut karambiah gantuang. Mencakup cara menjatuhkan buah kelapa yang digantung di antara pohon kelapa lainnya.</p>\r\n\r\n<p>Sebelum siap &quot;turun ke lapangan,&quot; dan dapat membedakan mana buah kelapa tua atau muda, beruk terlebih dahulu mengikuti pelatihan yang disebut manjatuhkan karambiah. Pembelajarannya berjalan selama tiga bulan.</p>\r\n', '2022-08-15', '6309f61531f30.jpg'),
(6, 'Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', '2022-08-16', '6309f5802707b.jpg'),
(7, 'Desa Wisata Apar, Daerah Pertama yang dikunjungi Sandiaga Uno Penilaian 50 Besar ADWI 2021', '<p><strong>Kominfo Kota Pariaman ---&nbsp;</strong>Desa Wisata Apar Kota Pariaman, Daerah Pertama yang dikunjungi Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) RI, Sandiaga Salahuddin Uno dalam Penilaian 50 Besar ADWI (Anugerah Desa Wisata Indonesia) Tahun 2021, bertempat di kawasan Hutan Mangrove Desa Apar, Jum&rsquo;at (27/8).</p>\r\n\r\n<p>Kunjungan Sandiaga Uno ke Kota Pariaman ini adalah untuk kali ketiga dan disambut langsung oleh Wakil Gubernur Sumbar, Audy Joinaldy, beserta Walikota Pariaman, Genius Umar dan Wakil Walikota Pariaman, Mardison Mahyuddin.</p>\r\n\r\n<p>&ldquo;Mas Menteri sudah tiga kali ke Kota Pariaman, pertama ketika ikut Triathlon 2019 di Pantai Kata, kedua di Desa Wisata Tungkal Selatan dan ketiga di Desa Wisata Apar ini, dan saya sendiri juga menemui Mas Sandi sudah 3 kali di Kementerian Pariwisata dan Ekonomi Kreatif RI di Jakarta,&rdquo; ungkap Genius Umar.</p>\r\n\r\n<p>Lebih lanjut Walikota Pariaman ini juga menyampaikan bahwa perhatian Menteri Sandiaga Uno sangat khusus ke Kota Pariaman, mulai dari bantuan Pentas Seni Pantai Kata, Pelatihan yang dibiayai oleh Kemenparekraf dan bantuan sarana dan pra sarana untuk pedagang di daerah destinasi wisata.</p>\r\n\r\n<p>Dalam kesempatan tersebut, Genius juga memaparkan potensi-potensi wisata dan ekonomi yang ada di Desa Apar Kota Pariaman, mulai dari Pokdarwisnya yang sangat aktif, dan juga punya potensi lainya,</p>\r\n\r\n<p>&ldquo;Desa Apar mempunyai potensi yang sangat menjual, mulai dari hutan mangrove dengan tracking dan menara pandangnya, kawasan konservasi penyu, pantai yang sejuk, serta yang paling kreatif adalah STIB (Sekolah Tinggi Ilmu Beruk), &rdquo; jelasnya.</p>\r\n\r\n<p>Kedatangan orang nomor satu di Kementerian Pariwisata dan Ekonomi Kreatif RI ini merupakan untuk melihat langsung Desa Wisata Apar Kota Pariaman yang masuk dalam 50 besar Anugerah Desa Wisata Indonesia (ADWI) 2021, dan kunjungan ini merupakan yang pertama di Indonesia untuk Visitasi ADWI 2021.</p>\r\n\r\n<p>&ldquo;Desa Wisata Apar Kota Pariaman ini, adalah Kota Pertama yang kami kunjungi untuk 50 Besar Desa Wisata yang masuk sebagai nominasi ADWI 2021 dari 70.000 Desa yang ada di Indonesia,&rdquo; tukasnya.</p>\r\n\r\n<p>Kota Pariaman mempunyai semua kebutuhan untuk orang datang berkunjung, baik pariwisata dan keindahan alamnya, kuliner, maupun adat dan budayanya.</p>\r\n\r\n<p>&ldquo;Pantai di Kota Pariaman ini sangat indah, apalagi suasananya sangat sejuk dengan adanya pohon cemara laut yang membuat pantai menjadi nyaman, ditambah dengann segala potensi yang dimilikinya, mulai dari mangrove, penyu, atraksi beruk, elo pukek dan hal lainya,&rdquo; tukasnya.</p>\r\n\r\n<p>&ldquo;Kami bersama dengan Tim Penilai ADWI 2021 dari Kemenparekraf, khusus datang ke Kota Pariaman ini dalam kunjungan dan penilaian yang pertama di Sumbar, dimana Sumbar menjadi yang terbanyak mengirimkan desa wisata dalam 50 besar ADWI 2021 yaitu 4 (empat) desa, kita sangat mengapresiasi hal ini,&rdquo; ujarnya.</p>\r\n\r\n<p>Empat desa wisata tersebut yaitu Desa Wisata Sungai Batang di Agam, Desa Wisata Kampung Minang, Sumpu, Kabupaten Tanah Datar. Kemudian, Desa Wisata Seribu Gonjong di Limapuluh Kota dan Desa Wisata Apar di Kota Pariaman ini, ulasnya.</p>\r\n\r\n<p>Selain mengapresiasi desa-desa wisata tersebut, kedatangannya ke Sumbar sekaligus untuk mengkoordinasikan kebangkitan pariwisata guna menggerakkan perekonomian. &ldquo;Dengan kita menerapkan protokol kesehatan yang ketat, kita telah memulai di sektor pariwisata yang mulai bergerak, dan harapan kita, desa wisata akan menjadi salah satu simbol kembangkitan perekonomian tersebut,&rdquo; ujarnya. (J)</p>\r\n', '2022-08-27', '6309f640b29a8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_galeri_foto`
--

CREATE TABLE `detail_galeri_foto` (
  `id_detail_gf` int(11) NOT NULL,
  `id_galeri_foto` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `subjudul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_galeri_foto`
--

INSERT INTO `detail_galeri_foto` (`id_detail_gf`, `id_galeri_foto`, `gambar`, `subjudul`) VALUES
(9, 1, '6309f7ca98b61.jpg', 'Kunjungan'),
(10, 1, '6309f7f6bcf0f.jpg', 'Pantai Desa Apar'),
(11, 1, '6309f80be0535.jpg', 'Apar Pariaman Mangrove Park'),
(12, 6, '6309f88acbde2.jpg', 'Kunjungan'),
(13, 7, '6309f968e10f8.jpg', 'Malam Penganugerahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_wisata`
--

CREATE TABLE `fasilitas_wisata` (
  `id_fasilitas_wisata` int(11) NOT NULL,
  `fasilitas` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_wisata`
--

INSERT INTO `fasilitas_wisata` (`id_fasilitas_wisata`, `fasilitas`, `keterangan`, `gambar`) VALUES
(1, 'Strategis', 'Berdekatan dengan kawasan wisata konservasi penyu dan taman bermain anak yang be', 'penangkaran-penyu.jpg'),
(4, 'Air Bersih', 'Ketersediaan air bersih yang mendukung layanan sanitasi dan kebersihan untuk wisatawan', '6309f38449cd9.jpg'),
(5, 'Produk Unggulan', 'Produk dari hasil olahan buah mangrove seperti sirup, selai, dan galamai yang juga berkhasiat untuk kesehatan', '6309f3b054525.jpg'),
(6, 'Pemandangan Indah', 'Hamparan pasir pantai yang luas dan jajaran hutan pinus yang rindang di sepanjang garis pantai', '6309f488841ec.jpg'),
(7, 'Gazebo', 'Terdapat gazebo-gazebo yang dapat menjadi tempat beristirat sejenak oleh wisatawan', '6309f4aa4dfdb.jpg'),
(8, 'Kuliner', 'Adanya warung pelaku usaha yang menyajikan berbagai makanan dan minuman', '6309f4c83b6e6.jpg'),
(9, 'Camping Ground', 'Adanya area camping ground yang menjadi tempat berkemah oleh wisatawan', '6309f4e18d5f8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id_galeri_foto` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_foto`
--

INSERT INTO `galeri_foto` (`id_galeri_foto`, `judul`, `tanggal_upload`) VALUES
(1, 'Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2', '2022-08-16'),
(6, 'Desa Wisata Apar, Daerah Pertama yang dikunjungi Sandiaga Uno Penilaian 50 Besar ADWI 2021', '2022-08-27'),
(7, 'Desa Apar Pariaman Juara 3 Desa Digital ADWI 2021', '2022-08-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_paket_wisata`
--

CREATE TABLE `gambar_paket_wisata` (
  `id_gambar_pw` int(11) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar_paket_wisata`
--

INSERT INTO `gambar_paket_wisata` (`id_gambar_pw`, `id_paket_wisata`, `gambar`) VALUES
(24, 4, '62f9b9ce8fe7b.jpeg'),
(27, 4, '62ffa92bd9179.jpg'),
(28, 4, '62ffaadb0b2c3.jpg'),
(29, 2, '6309f05738360.png'),
(30, 6, '6309f1e647be2.jpg'),
(31, 7, '6309f24806f0c.jpg'),
(32, 2, '6309f295b9859.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket_wisata` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tentang_wisata` text NOT NULL,
  `contact_person` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket_wisata`, `nama`, `tentang_wisata`, `contact_person`) VALUES
(2, 'Tracking Keliling Hutan', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, itaque illum? Suscipit qui adipisci pariatur rem eaque cumque excepturi, autem dolore nihil temporibus, voluptas delectus totam libero nesciunt ipsa asperiores aspernatur cum velit voluptates! Odit veritatis mollitia iste consequuntur dolorum unde numquam voluptas. Itaque molestias saepe quas repellat sed placeat? Laudantium nam aperiam vitae rerum dolores ab eos illum recusandae nemo earum, hic a dolore quidem officiis fugit.</p>\r\n', '08975147674 (Tiara)'),
(4, 'Mangaca Isi Talao', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis cursus dolor, quis rutrum lectus gravida eget. Cras pulvinar velit mauris, ut fermentum libero suscipit sit amet. Donec accumsan viverra libero vel tempor. Suspendisse suscipit dui id libero blandit suscipit. Curabitur pharetra aliquet erat a viverra. Integer et lacinia neque, ac tincidunt elit. Donec pellentesque vulputate felis, at sollicitudin nisi vestibulum venenatis. Donec tristique faucibus dui at semper. Nullam vel elit eget nisl tempor pretium ac rutrum eros.</p>\r\n<br>\r\n<p>Fusce scelerisque urna sed quam dictum, eu pharetra sapien vestibulum. Sed in tincidunt nulla, ac euismod nisi. Aliquam fringilla venenatis magna, eget convallis neque ornare vel. Vestibulum quis vehicula velit, in dignissim lacus. Nam luctus neque ut sagittis cursus. Mauris gravida eros ac sem iaculis suscipit. Fusce in sollicitudin enim. Duis ullamcorper interdum quam, vitae ultrices ex sagittis sed.</p>\r\n\r\n<p>Duis iaculis hendrerit posuere. Sed porta et neque eget varius. Donec sem dolor, blandit ut lorem quis, blandit aliquet nunc. Integer suscipit velit lorem, quis tempor erat fermentum in. Cras feugiat a libero eu egestas. Morbi sed erat ut ipsum eleifend imperdiet. Phasellus porta sed massa eu feugiat. Quisque iaculis quam sed risus iaculis, vitae porttitor erat interdum. Donec tincidunt dictum massa at aliquet. Fusce placerat magna arcu, in rhoncus elit venenatis eget. Nam porttitor lectus sit amet molestie efficitur. Donec blandit velit ligula, in convallis nulla pellentesque in.</p>\r\n', '08975147674 (Tiara)'),
(6, 'Panen Buah Mangrove', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in ante velit. Quisque pulvinar dictum justo, in fermentum mi sodales vel. In vitae lorem vel diam pellentesque consequat. Ut sed sagittis mauris. Pellentesque nisl nulla, commodo eget tellus elementum, sagittis euismod sapien. Nam iaculis diam eros, suscipit tincidunt nisi dictum ac. Nullam tellus ipsum, pellentesque nec mi a, blandit placerat tortor. Maecenas eget tempor arcu. Vestibulum vitae varius neque, sed pulvinar ex.</p>\r\n\r\n<p>Nullam in gravida erat. Morbi pharetra, ante et semper elementum, nulla metus faucibus metus, a semper lorem purus malesuada sapien. Quisque eget porttitor lorem, in feugiat turpis. Pellentesque fermentum convallis augue sit amet finibus. Etiam mattis tortor eget dictum viverra. Mauris placerat ipsum sit amet lorem luctus commodo. Vivamus lacinia tristique leo eget vehicula. Praesent leo tellus, varius et bibendum eget, laoreet hendrerit orci. Vivamus pellentesque mollis augue. Vivamus eu cursus arcu.</p>\r\n\r\n<p>Nunc pretium sapien nec posuere dictum. Nunc vitae tempus est, non pulvinar ante. In ex lorem, accumsan eget tristique sed, venenatis sed massa. Aliquam mollis mauris a nibh tristique ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla vel urna ut elit ultrices euismod. Ut id lacus a massa cursus dapibus. Aenean lorem sapien, sagittis pretium erat maximus, lacinia tempor nisi. Vivamus nibh odio, imperdiet non magna sed, tincidunt faucibus leo. Morbi ante ex, pellentesque eu ipsum et, hendrerit lobortis magna. Sed consectetur quam eget risus ullamcorper, at rutrum dui mattis. Cras rhoncus at nisl eu sollicitudin. Vivamus mattis nunc nisi, quis consequat turpis pulvinar at.</p>\r\n', '08975147674 (Tiara)'),
(7, 'Pelepasan Penyu dan Penanaman Terumbu Karang', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in ante velit. Quisque pulvinar dictum justo, in fermentum mi sodales vel. In vitae lorem vel diam pellentesque consequat. Ut sed sagittis mauris. Pellentesque nisl nulla, commodo eget tellus elementum, sagittis euismod sapien. Nam iaculis diam eros, suscipit tincidunt nisi dictum ac. Nullam tellus ipsum, pellentesque nec mi a, blandit placerat tortor. Maecenas eget tempor arcu. Vestibulum vitae varius neque, sed pulvinar ex.</p>\r\n\r\n<p>Nullam in gravida erat. Morbi pharetra, ante et semper elementum, nulla metus faucibus metus, a semper lorem purus malesuada sapien. Quisque eget porttitor lorem, in feugiat turpis. Pellentesque fermentum convallis augue sit amet finibus. Etiam mattis tortor eget dictum viverra. Mauris placerat ipsum sit amet lorem luctus commodo. Vivamus lacinia tristique leo eget vehicula. Praesent leo tellus, varius et bibendum eget, laoreet hendrerit orci. Vivamus pellentesque mollis augue. Vivamus eu cursus arcu.</p>\r\n\r\n<p>Nunc pretium sapien nec posuere dictum. Nunc vitae tempus est, non pulvinar ante. In ex lorem, accumsan eget tristique sed, venenatis sed massa. Aliquam mollis mauris a nibh tristique ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla vel urna ut elit ultrices euismod. Ut id lacus a massa cursus dapibus. Aenean lorem sapien, sagittis pretium erat maximus, lacinia tempor nisi. Vivamus nibh odio, imperdiet non magna sed, tincidunt faucibus leo. Morbi ante ex, pellentesque eu ipsum et, hendrerit lobortis magna. Sed consectetur quam eget risus ullamcorper, at rutrum dui mattis. Cras rhoncus at nisl eu sollicitudin. Vivamus mattis nunc nisi, quis consequat turpis pulvinar at.</p>\r\n', '08975147674 (Tiara)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil_desa` int(11) NOT NULL,
  `struktur_organisasi` varchar(255) NOT NULL,
  `sejarah` text NOT NULL,
  `tentang_kami` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_desa`
--

INSERT INTO `profil_desa` (`id_profil_desa`, `struktur_organisasi`, `sejarah`, `tentang_kami`) VALUES
(1, '6309fa22982d5.jpeg', '<p>AsD</p>\r\n', '<p>Ke Pariaman Yuk. Kita tidak akan sekedar jalan menikmati laut dan pantai di sekitaran Gondoriah. Kita juga bisa menikmati hijaunya hutan bakau (mangrove) atau dalam bahasa daerah disebut TALAO. Kawasan Apar Manggrove park Hutan bakau ini berada di Desa Apar, Kecamatan Pariaman Utara dengan luas &plusmn; 10 Ha. Selain menikmati objek wisata alam kawasan hutan dan pantai, kita juga berwisata sambil belajar dan menyelamatkan lingkungan. Jalur tracking yang ada di Kawasan Mangrove Edupark Desa Wisata Apar saat ini menjadi satu-satunya jalur tracking Mangrove yang ada di Provinsi Sumatera Barat dengan panjang sekitar 50 M lebar 1,5 M ketinggian &plusmn; 2 M terbuat dari kayu rasak dari bantuan program csr pertamina dan baru ini juga ditambah oleh kemtererian kelautan dan perikanan&nbsp;<em>tracking</em>&nbsp;sepanjang 100 M yang di lengkapi Gazebo dan Menara pandang yang mana Para pengunjung wisatawan selain berswafoto yang&nbsp;<em>instagramable</em>&nbsp;sepanjang jalur tracking juga bisa menikmati Hutan Mangrove dari atas menara dan juga kita bisa melakukan aktifitas lainnya yaitu : Mulai dari melihat penyu, belajar literasi apa itu penyu dan fungsinya dilaut, Belajar literasi apa itu mangrove dan fungsinya bagi ekosistem laut dan kita bisa main serunya menanam mangrove secara bersama,kita juga bisa menikmati pantai yang bersih dengan latar samudra dan pulau2 kecil yang ada di kota pariaman, yang lebih berkesannya setiap sore menjelang maghrib kita juga bisa menikmati sunset terindah. Wisata kekinian bukan sekedar melihat dan menyaksikan tempat-tempat nan indah .Tapi trendnya telah jauh berkembang. Di sebagian orang, wisata sudah menjadi sarana guna menimba pengalaman hidup dan eksis di media sosial. Mangrove sebagai&nbsp;<em>green beltnya</em>&nbsp;garis pantai, bisa menyediakan oksigen dalam 1 pohon untuk 3 orang. Kawasan Apar Mangrove park menjadi benteng hijau untuk melindungi daratan dari dampak abrasi dan terjangan gelombang laut, termasuk benteng peredam arus tsunami. Di bencana tsunami terbukti kawasan mangrove mampu melindungi kawasan daratan di belakangnya. Banyak aktivitas yang bisa dijadikan daya tarik di Desa Wisata di Apar Kota Pariaman.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` text NOT NULL,
  `link` varchar(50) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul`, `link`, `tanggal_upload`) VALUES
(1, 'Desa Wisata Apar Kota Pariaman', 'https://www.youtube.com/watch?v=090-9EapzmE', '2022-08-16'),
(4, 'Desa Wisata Apar by KKN APAR UNAND2022', 'https://www.youtube.com/watch?v=UQlduOZ2uqs', '2022-08-27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `detail_galeri_foto`
--
ALTER TABLE `detail_galeri_foto`
  ADD PRIMARY KEY (`id_detail_gf`),
  ADD KEY `galeri_foto_detail_galeri_foto_fk` (`id_galeri_foto`);

--
-- Indeks untuk tabel `fasilitas_wisata`
--
ALTER TABLE `fasilitas_wisata`
  ADD PRIMARY KEY (`id_fasilitas_wisata`);

--
-- Indeks untuk tabel `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id_galeri_foto`);

--
-- Indeks untuk tabel `gambar_paket_wisata`
--
ALTER TABLE `gambar_paket_wisata`
  ADD PRIMARY KEY (`id_gambar_pw`),
  ADD KEY `paket_wisata_gambar_paket_wisata_fk` (`id_paket_wisata`);

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket_wisata`);

--
-- Indeks untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil_desa`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `detail_galeri_foto`
--
ALTER TABLE `detail_galeri_foto`
  MODIFY `id_detail_gf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_wisata`
--
ALTER TABLE `fasilitas_wisata`
  MODIFY `id_fasilitas_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `id_galeri_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `gambar_paket_wisata`
--
ALTER TABLE `gambar_paket_wisata`
  MODIFY `id_gambar_pw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_galeri_foto`
--
ALTER TABLE `detail_galeri_foto`
  ADD CONSTRAINT `galeri_foto_detail_galeri_foto_fk` FOREIGN KEY (`id_galeri_foto`) REFERENCES `galeri_foto` (`id_galeri_foto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gambar_paket_wisata`
--
ALTER TABLE `gambar_paket_wisata`
  ADD CONSTRAINT `paket_wisata_gambar_paket_wisata_fk` FOREIGN KEY (`id_paket_wisata`) REFERENCES `paket_wisata` (`id_paket_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
