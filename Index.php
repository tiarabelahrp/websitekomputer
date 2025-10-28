<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknologi Komputer Masa Kini</title>
    <link rel="stylesheet" href="assets/style.css">
    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll(".content-section");
            sections.forEach(sec => sec.style.display = "none");
            document.getElementById(sectionId).style.display = "block";
        }

        function openArticle(articleId) {
            const article = document.getElementById(articleId);
            const articleView = document.getElementById("article-view");
            const articleList = document.getElementById("article-list");

            articleList.style.display = "none";
            articleView.style.display = "block";

            articleView.querySelector("h2").innerText = article.querySelector("h2").innerText;
            articleView.querySelector("p").innerText = article.querySelector("p").innerText;
        }

        function backToArticles() {
            document.getElementById("article-view").style.display = "none";
            document.getElementById("article-list").style.display = "flex";
        }

        window.onload = function() {
            showSection("home");
        };
    </script>
</head>
<body>
<div id="wrapper">
    <header>
    <div class="judul-banner">
        <img src="assets/headerlaman.png" alt="Teknologi Masa Kini">
        <div class="judul-teks">Teknologi Masa Kini</div>
    </div>
	</header>


    <nav>
        <ul>
            <li><a href="#" onclick="showSection('home')">Beranda</a></li>
            <li><a href="#" onclick="showSection('artikel')">Artikel</a></li>
            <li><a href="#" onclick="showSection('profil')">Profil</a></li>
        </ul>
    </nav>

    <section id="home" class="content-section">
        <h2>Selamat Datang di Website Teknologi Komputer</h2>
        <p>
            Dunia komputer terus berkembang pesat. Dari perangkat keras hingga perangkat lunak,
            inovasi teknologi semakin memudahkan manusia dalam bekerja, belajar, dan berkomunikasi.
        </p>
        <img src="images/headerutama.png" alt="banner komputer" class="banner">
		
    </section>

    <section id="artikel" class="content-section">
        <div id="container">
            
            <div id="article-list">
                <div class="artikel">
                    <img src="images/content1.jpg" alt="perkembangan komputer">
                    <div class="teks">
                        <h2>Perkembangan Teknologi Komputer dari Masa ke Masa</h2>
                        <p>Komputer modern merupakan hasil evolusi panjang sejak generasi pertama di tahun 1940-an...</p>
                        <button onclick="openArticle('artikel-lunak')">Baca Selengkapnya</button>
                    </div>
                </div>

                <div class="artikel">
                    <img src="images/content2.jpg" alt="komponen komputer">
                    <div class="teks">
                        <h2>Komponen Utama dalam Sebuah Komputer</h2>
                        <p>Komputer tersusun atas berbagai komponen penting yang bekerja bersama...</p>
                        <button onclick="openArticle('artikel-jaringan')">Baca Selengkapnya</button>
                    </div>
                </div>

                <div class="artikel">
                    <img src="images/content3.jpg" alt="internet dan komputer">
                    <div class="teks">
                        <h2>Dampak Internet terhadap Dunia Komputer</h2>
                        <p>Internet mengubah peran komputer dari alat hitung menjadi media global tanpa batas...</p>
                        <button onclick="openArticle('artikel-ai')">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>

            <div id="article-view" style="display: none;">
                <h2></h2>
                <p></p>
                <button class="back-btn" onclick="backToArticles()">← Kembali ke Artikel</button>
            </div>

            <aside>
                <h3>Topik Lainnya</h3>
                <ul>
                    <li><a href="#" onclick="openArticle('artikel-lunak')">Perangkat Lunak Komputer</a></li>
                    <li><a href="#" onclick="openArticle('artikel-jaringan')">Jaringan dan Keamanan Data</a></li>
                    <li><a href="#" onclick="openArticle('artikel-ai')">Teknologi AI dalam Komputer</a></li>
                </ul>

                <h3>Artikel Populer</h3>
                <ul>
                    <li><a href="#" onclick="openArticle('artikel-performa')">Tips Meningkatkan Performa PC</a></li>
                    <li><a href="#" onclick="openArticle('artikel-laptop')">Cara Merawat Laptop dengan Benar</a></li>
                    <li><a href="#" onclick="openArticle('artikel-ssd')">Kelebihan SSD dibanding HDD</a></li>
                </ul>
            </aside>
        </div>

        <section style="display:none;">
            <article id="artikel-lunak">
                <h2>Perangkat Lunak Komputer</h2>
                <p>Perangkat lunak komputer adalah sekumpulan instruksi atau program yang dirancang untuk mengendalikan dan mengatur cara kerja perangkat keras komputer agar dapat menjalankan tugas tertentu. Perangkat lunak berfungsi sebagai penghubung antara pengguna dengan perangkat keras, sehingga komputer dapat memahami perintah manusia.
					Secara umum, perangkat lunak terbagi menjadi tiga jenis utama:

					1. Perangkat lunak sistem – seperti sistem operasi (misalnya Windows, Linux, macOS) yang mengatur seluruh sumber daya komputer.

					2. Perangkat lunak aplikasi – program yang membantu pengguna menyelesaikan pekerjaan spesifik, seperti pengolah kata, browser, atau aplikasi desain.

					3. Perangkat lunak pengembang (development tools) – digunakan untuk membuat dan menguji program lain, seperti compiler atau editor kode.

					Tanpa perangkat lunak, komputer hanyalah perangkat keras tanpa fungsi, karena perangkat lunaklah yang memberikan instruksi agar sistem dapat beroperasi secara cerdas dan terarah.</p>
            </article>

            <article id="artikel-jaringan">
                <h2>Jaringan dan Keamanan Data</h2>
                <p>	Jaringan dan keamanan data komputer adalah dua aspek penting dalam sistem teknologi informasi yang saling berkaitan.
					Jaringan komputer merupakan sekumpulan perangkat yang saling terhubung untuk berbagi data, sumber daya, dan layanan melalui media komunikasi seperti kabel atau nirkabel. Tujuannya adalah memungkinkan pertukaran informasi secara cepat, efisien, dan terkoordinasi antar pengguna atau sistem, baik dalam lingkup lokal (LAN) maupun global (Internet).
					
					Sementara itu, keamanan data komputer adalah upaya melindungi informasi dalam jaringan agar tidak diakses, diubah, atau disalahgunakan oleh pihak yang tidak berwenang. Keamanan ini mencakup tiga prinsip utama:

					1. Kerahasiaan (Confidentiality) – memastikan data hanya dapat diakses oleh pihak yang berhak.
					2. Integritas (Integrity) – menjaga agar data tetap akurat dan tidak dimodifikasi tanpa izin.
					3. Ketersediaan (Availability) – memastikan data dan sistem selalu dapat digunakan saat dibutuhkan.

					Dengan demikian, jaringan komputer menyediakan konektivitas, sedangkan keamanan data menjamin bahwa koneksi tersebut tetap aman, andal, dan terlindung dari ancaman seperti peretasan, malware, atau pencurian data.</p>
            </article>

            <article id="artikel-ai">
                <h2>Teknologi AI dalam Komputer</h2>
                <p>Teknologi AI (Artificial Intelligence) dalam komputer adalah cabang ilmu komputer yang berfokus pada pengembangan sistem yang mampu meniru kecerdasan manusia untuk melakukan tugas-tugas seperti berpikir, belajar, mengenali pola, memahami bahasa, dan mengambil keputusan secara otomatis.

					Dalam konteks komputer, AI bekerja melalui algoritma dan model pembelajaran mesin (machine learning) yang memungkinkan komputer menganalisis data dalam jumlah besar, mengenali hubungan di dalamnya, dan meningkatkan kinerjanya tanpa perlu diprogram ulang secara langsung.

					Penerapan AI dalam komputer mencakup berbagai bidang, seperti:

					1. Pengenalan suara dan wajah (misalnya asisten virtual atau sistem keamanan biometrik).
					2. Pemrosesan bahasa alami (NLP) untuk memahami dan merespons teks atau ucapan manusia.
					3. Sistem rekomendasi dan analisis data seperti di e-commerce atau media streaming.
					4. Robotika dan otomatisasi cerdas untuk membantu pekerjaan manusia.

					Dengan kata lain, teknologi AI menjadikan komputer tidak hanya alat hitung, tetapi juga sistem cerdas yang dapat berpikir dan beradaptasi layaknya manusia.</p>
            </article>

            <article id="artikel-performa">
                <h2>Tips Meningkatkan Performa PC</h2>
                <p>Tips Meningkatkan Performa PC adalah langkah-langkah yang dilakukan untuk menjaga dan mengoptimalkan kinerja komputer agar tetap cepat, stabil, dan efisien dalam menjalankan berbagai program.
					Beberapa cara yang efektif untuk meningkatkan performa PC antara lain:

					1. Bersihkan file sementara dan sampah sistem – Gunakan fitur bawaan seperti Disk Cleanup atau aplikasi pihak ketiga untuk menghapus file tidak penting yang membebani penyimpanan.
					2. Nonaktifkan program startup yang tidak diperlukan – Terlalu banyak aplikasi yang berjalan saat booting dapat memperlambat waktu nyala komputer.
					3. Perbarui sistem operasi dan driver – Pembaruan rutin membantu meningkatkan kompatibilitas dan menutup celah keamanan.
					4. Tambah kapasitas RAM – Semakin besar RAM, semakin lancar komputer menjalankan banyak aplikasi secara bersamaan.
					5. Gunakan SSD (Solid State Drive) – SSD memiliki kecepatan baca-tulis jauh lebih tinggi dibanding HDD, sehingga mempercepat proses booting dan pemuatan aplikasi.
					6. Hapus aplikasi yang jarang digunakan – Mengurangi beban penyimpanan dan menghemat sumber daya sistem.
					7. Gunakan antivirus terpercaya – Mencegah infeksi malware atau virus yang dapat memperlambat performa sistem.

					Dengan melakukan langkah-langkah tersebut secara rutin, komputer akan tetap bekerja optimal, responsif, dan memiliki umur pakai yang lebih panjang.</p>
								</article>

            <article id="artikel-laptop">
                <h2>Cara Merawat Laptop dengan Benar</h2>
                <p>Cara Merawat Laptop dengan Benar adalah serangkaian tindakan untuk menjaga kondisi perangkat agar tetap awet, stabil, dan berfungsi optimal dalam jangka panjang. Perawatan yang baik tidak hanya memperpanjang umur laptop, tetapi juga mencegah kerusakan dini pada komponen penting.
					Berikut beberapa tips merawat laptop dengan benar:

					1. Jaga kebersihan laptop – Bersihkan layar, keyboard, dan ventilasi udara secara rutin agar debu tidak menumpuk dan menghambat sirkulasi udara.
					2. Gunakan di permukaan datar dan keras – Hindari meletakkan laptop di kasur atau bantal karena dapat menyumbat lubang ventilasi dan menyebabkan overheat.
					3. Perhatikan suhu dan ventilasi – Jangan gunakan laptop terlalu lama tanpa jeda; gunakan cooling pad untuk menjaga suhu tetap stabil.
					4. Rawat baterai dengan baik – Hindari membiarkan baterai kosong total atau terus terpasang pada daya setelah 100% penuh.
					5. Hindari benturan dan tekanan – Gunakan tas laptop yang empuk dan sesuai ukuran agar perangkat terlindungi saat dibawa bepergian.
					6. Lakukan update sistem dan antivirus secara berkala – Pembaruan rutin membantu menjaga performa dan keamanan laptop.
					7. Jangan instal software sembarangan – Unduh aplikasi hanya dari sumber resmi untuk mencegah virus dan program berbahaya.

					Dengan perawatan yang tepat, laptop akan tetap cepat, tidak mudah panas, dan bisa digunakan dalam waktu yang lama tanpa masalah berarti.</p>
            </article>

            <article id="artikel-ssd">
                <h2>Kelebihan SSD dibanding HDD</h2>
                <p>Kelebihan SSD dibanding HDD terletak pada kecepatan, efisiensi, dan keandalan dalam penyimpanan data. SSD (Solid State Drive) menggunakan chip memori flash untuk menyimpan data, sedangkan HDD (Hard Disk Drive) menggunakan piringan magnetik yang berputar. Perbedaan teknologi ini membuat SSD memiliki banyak keunggulan, di antaranya:

					1. Kecepatan lebih tinggi – SSD mampu membaca dan menulis data hingga 5–10 kali lebih cepat dari HDD, sehingga proses booting, membuka aplikasi, dan transfer file menjadi jauh lebih singkat.
					2. Tidak menimbulkan suara – Karena tidak memiliki komponen mekanis yang berputar, SSD bekerja secara senyap tanpa getaran.
					3. Lebih tahan guncangan dan awet – Tanpa piringan fisik, SSD lebih tahan terhadap benturan atau jatuh dibanding HDD.
					4. Konsumsi daya lebih rendah – SSD lebih hemat energi, cocok untuk laptop karena dapat memperpanjang daya tahan baterai.
					5. Ukuran lebih kecil dan ringan – Desain SSD yang tipis dan ringkas membuatnya ideal untuk perangkat modern seperti ultrabook atau PC mini.
					6. Waktu akses data lebih singkat – SSD memiliki latensi sangat rendah, sehingga sistem terasa lebih responsif.

					Secara keseluruhan, SSD menawarkan kinerja dan keandalan yang jauh lebih baik daripada HDD, meskipun dengan harga per gigabyte yang biasanya lebih mahal. Untuk penggunaan modern yang menuntut kecepatan tinggi, SSD menjadi pilihan utama penyimpanan data.</p>
            </article>
        </section>
    </section>

    <section id="profil" class="content-section">
        <h3>Tentang Website Ini</h3>
        <p>
            Website ini dibuat sebagai sumber informasi edukatif seputar dunia komputer.
        </p>
		<div class="hubungi">
            <h3>Hubungi Kami</h3>
            <ul>
                <li><strong>Alamat:</strong> Jl. William Iskandar, Pasar V, Medan Estate</li>
                <li><strong>Telepon:</strong> +62-61-6615683 / 0812-3456-7890</li>
                <li><strong>Email:</strong> humas@uinsu.ac.id</li>
                <li><strong>Jam Operasional:</strong> Senin - Jumat, 08.00 - 16.00 WIB</li>
            </ul>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-container">
            <div class="column">
                <h2>Layanan</h2>
                <ul>
                    <li>E-Mail</li>
                    <li>E-Learning</li>
                    <li>E-Repository</li>
                    <li>E-Jurnal</li>
                    <li>Digital Library</li>
                    <li>Portal SIA</li>
                    <li>SI-Selma</li>
                    <li>SI-Dahlia</li>
                </ul>
            </div>

            <div class="column">
                <h2>Business Hour</h2>
                <p>Hubungi Pusbangnis UINSU di <strong>0641-23123</strong> atau email ke <a href="#">pusbangnis@uinsu.ac.id</a>.</p>
            </div>

            <div class="column">
                <h2>Head Office</h2>
                <p>Jl. William Iskandar, Pasar V, Medan Estate<br>
                   Telp: +62-61-6615683<br>
                   Email: humas@uinsu.ac.id
                </p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Teknologi Komputer Masa Kini by Tiara Bela Harahap</p>
        </div>
    </footer>
</div>

</body>
</html>