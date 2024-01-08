<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GIZ GHPR</title>
    <link rel="stylesheet" href="asset/paralax.css">
    <link rel="stylesheet" href="asset/paralax.js">
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                    @endif
                @endauth
            </div>
        @endif

        <header class="header">
            <a href="#" class="logo">GIS GHPR</a>
            <ul class="nav">
                <li><a href="#about">About</a></li>
                <li><a href="map">Maps</a></li>
                <li><a href="data">Data</a></li>
            </ul>
        </header>

        <section class="home-section">
            <img src="#" alt="" id="">
            <img src="" alt="" id="">
            <img src="img/bg.jpg" alt="" id="">
            <a href="/login" id="btn-letsgo">LOG IN</a>

        </section>

        <section class="about-section" id="about">
            <h2>Apa itu GIS GHPR?</h2>
            <p>
                GIS GHPR adalah Aplikasi untuk memudahkan masyarakat mendapatkan informasi terkait rabies, penyebaran
                terkait virus tersebut melalui maps yang ada pada aplikasi ini.
            </p>
            <p>
                Gigitan Hewan Penular Rabies (GHPR) disebut juga penyakit anjing gila
                adalah suatu penyakit infeksi akut pada susunan
                saraf pusat yang disebabkan oleh virus rabies.
                Penyakit ini bersifat zoonotik yaitu penyakit
                dapat ditularkan dari hewan ke manusia melalui
                gigitan hewan penular rabies.
                Penyakit ini telah dikenal sejak berabadabad yang lalu dan merupakan penyakit yang
                menakutkan bagi manusia karena penyakit
                ini selalu diakhiri dengan kematian. Penyakit
                ini menyebabkan penderita tersiksa oleh rasa
                haus namun sekaligus merasa takut terhadap
                air (hydrophobia). Rabies bersifat fatal baik
                pada hewan maupun manusia, hampir seluruh
                pasien yang menunjukkan gejala–gejala klinis
                rabies (encephalomyelitis) akan diakhiri dengan
                kematian.
            <h3>informasi</h3>
            <p>
                Rabies tersebar hampir di semua benua kecuali benua Antartika, lebih dari 150 negara telah terjangkit
                penyakit ini.
                000 orang meninggal akibat rabies dan lebih dari 15 juta orang di seluruh dunia mendapatkan pengobatan
                profilaksis vaksin anti rabies untuk mencegah berkembangnya penyakit ini.
                Semua kasus terjadi di Provinsi Jawa Barat dan setelah itu rabies terus menyebar ke daerah Indonesia
                lainnya.
                Provinsi Kalimantan Barat sebenarnya telah berhasil mencapai bebas Rabies berdasarkan 3 PETUNJUK TEKNIS
                PENATALAKSANAAN KASUS GHPR Keputusan Menteri Pertanian No.
                620/8/2014 tentang Pembebasan Rabies Provinsi Kalimantan Barat tanggal 14 Agustus 2014, namun pada
                tanggal
                19 Oktober 2014 dilaporkan terjadi kasus kematian akibat rabies pada manusia di Kecamatan Jelai Hulu
                Kabupaten Ketapang.
                534 kasus mendapatkan Vaksin Anti Rabies (VAR).
            </p>
            <p>
                Agen penyebab rabies adalah virus dari
                genus lyssa virus dan termasuk ke dalam family
                Rhabdoviridae. Virus ini bersifat neurotropic,
                berbentuk menyerupai peluru dengan panjang
                130 – 300 nm dan diameter 70 nm. Virus ini terdiri
                dari inti RNA (Ribo Nucleic Acid) rantai tunggal
                diselubungi lipoprotein. Pada selubung luar
                terdapat tonjolan yang terdiri dari glikoprotein G
                yang berperan penting dalam timbulnya imunitas
                oleh induksi vaksin dan penting dalam identifikasi
                serologi dari virus rabies.
                Virus rabies dapat bertahan pada pemanasan
                dalam beberapa waktu lama. Pada pemanasan
                suhu 560
                C, virus dapat bertahan selama 30 menit
                dan pada pemanasan kering mencapai suhu
                1000
                C masih dapat bertahan selama 2-3 menit.
                Di dalam air liur dengan suhu udara panas dapat
                bertahan selama 24 jam. Dalam keadaan kering
                beku dengan penyimpanan pada suhu 40
                C virus
                dapat bertahan selama bertahun-tahun, hal inilah
                yang menjadi dasar kenapa vaksin anti rabies
                harus disimpan pada suhu 20
                – 80
                C. Pada dasarnya
                semakin rendah suhunya semakin lama virus
                dapat bertahan.
            </p>
            <h3>Kegunaan</h3>
            <p>
                Aplikasi GIZ GHPR ini diperuntukan untuk memudahkan semua pengguna dalam proses input dan mengetahui
                tata
                penyebaran serta dimana saja letak penyebaran penyakit tersebut.
                Dalam Aplikasi ini juga menampilkan foto yang dapat ditambah oleh pengguna.
            </p>
            <h3>Contact</h3>
            <p>
                Jika terjadi kendala atau pengguna ingin melakukan konsultasi dapat menghubungi kontak dibawah:
            </p>
            <ul>
                <li>https://www.facebook.com/dkksemarang.dkksemarang.3</li>
                <li>https://twitter.com/i/flow/login?redirect_after_login=%2Fdkksemarang</li>
                <li>https://www.instagram.com/dkksemarang/</li>
            </ul>
            <p>
                Pengguna juga dapat konsultasi langsung melalui Telp. (024) 8415269 - 8318070
                dan WA Helpdesk 628 953 76860 088 (WA Only)
            </p>
        </section>

        <footer>
            <a href="#" class="logo"><img src="img/Dinkes.png" alt="Logo"></a>
            <p>2023 © Dinas Kesehatan Semarang</p>
            <div class="social">
                <a href="https://codepen.io/paulchevrier" target="_blank" rel="noopener noreferrer"
                    title="Link to author's Codepen profile">
                    <i class="fa-brands fa-codepen"></i>
                </a>
                <a id="profile-link" href="https://github.com/iampaulchevrier" target="_blank" rel="noopener noreferrer"
                    title="Link to author's GitHub profile">
                    <i class="fa-brands fa-github"></i>
                </a>
                </a>
                <a href="https://twitter.com/iampaulchevrier" target="_blank" rel="noopener noreferrer"
                    title="Link to author's Twitter profile">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </footer>
    </div>
    </div>
    </div>
</body>

</html>
