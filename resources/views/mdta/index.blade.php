<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MDTA Ar-Risalah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .carousel-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(53, 102, 53, 0.342);
            /* Green with 75% transparency */
            z-index: 1;
            /* Ensures the overlay is above the image but below the captions */
        }

        .carousel-caption {
            z-index: 2;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    @include('navbar')
    <!-- end navbar -->
    <main>
        <div id="carouselExampleCaptions" class="carousel slide mt-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('asset/img/homemdta1.png') }}" class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3>MDTA Ar-Risalah</h3>
                        <h5>Kreatif, Inovatif, Dinamis dan Berwawasan Luas</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/homemdta2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3>MDTA Ar-Risalah</h3>
                        <h5>Kreatif, Inovatif, Dinamis dan Berwawasan Luas</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/homemdta3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3>MDTA Ar-Risalah</h3>
                        <h5>Kreatif, Inovatif, Dinamis dan Berwawasan Luas</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="jumbo d-flex justify-content-around" style="background-color: #E2E2E2; padding: 2rem 1rem;">
            <div class="text-center">
                <h4><span style="color: #00763A;">Informasi &</span> Pendaftaran Murid Baru</h4>
                <h4 style="color: #00763A;">Tahun Ajaran 2024/2025</h4>
                <p>MDTA Ar-Risalah siap memenuhi kebutuhan masyarakat akan tambahan pendidikan agama<br>Islam terutama
                    bagi siswa yang belajar di Sekolah Dasar (SD).</p>
            </div>
            <div class="">
                <button type="button" class="btn btn-success p-3 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> Informasi
                </button>
            </div>
        </div>
        <div class="countainer col-10 mx-auto mb-5 text-center mt-4">
            <h4>Our Program</h4>
            <h3><span style="color: #00763A;">Pendidikan</span> Berbasis Tauhid</h3>
            <div class="container mt-4">
                <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                    <div class="col">
                        <div class="card" style="height: 23rem;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg width="81" height="81" viewBox="0 0 81 81" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M70.875 33.75H64.125V13.5H67.5V6.75H13.5V13.5H16.875V33.75H10.125C9.22989 33.75 8.37145 34.1056 7.73851 34.7385C7.10558 35.3715 6.75 36.2299 6.75 37.125V67.5H74.25V37.125C74.25 36.2299 73.8944 35.3715 73.2615 34.7385C72.6286 34.1056 71.7701 33.75 70.875 33.75ZM47.25 60.75V47.25H33.75V60.75H23.625V13.5H57.375V60.75H47.25Z"
                                            fill="#1E1E1E" />
                                        <path
                                            d="M30.375 20.25H37.125V27H30.375V20.25ZM43.875 20.25H50.625V27H43.875V20.25ZM30.375 33.75H37.125V40.5H30.375V33.75ZM43.875 33.75H50.625V40.5H43.875V33.75Z"
                                            fill="#1E1E1E" />
                                    </svg>
                                    <h3>Visi</h3>
                                    <p>Terciptanya peserta didik cerdas,<br>aktif, kreatif dan inovatif
                                        serta<br>bertaqwa kepada Tuhan Yang Maha Esa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="background-color: #00763A; height: 23rem; color: #FFFFFF;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg width="71" height="81" viewBox="0 0 71 81" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_18_84)">
                                            <path
                                                d="M70.995 56.7V4.05C70.995 1.51875 69.4738 0 66.9385 0H15.2175C6.59731 0 0.00542068 6.58125 0.00542068 15.1875V65.8125C0.00542068 74.4187 6.59731 81 15.2175 81H66.9385C68.9667 81 70.995 79.4812 70.995 76.95V74.4187C70.995 73.4062 70.4879 72.3938 69.4738 71.3812C68.9667 68.85 68.9667 61.7625 69.4738 59.7375C70.4879 59.2313 70.995 58.2188 70.995 56.7ZM47.7142 23.0692C47.8093 22.8778 47.9931 22.7812 48.1769 22.7812C48.3607 22.7812 48.5446 22.8778 48.6396 23.0692L50.4112 26.6525L54.3727 27.2268C54.7958 27.2885 54.9653 27.8074 54.6595 28.1064L51.793 30.8955L52.4696 34.8332C52.5266 35.167 52.262 35.4375 51.9609 35.4375C51.8817 35.4375 51.7993 35.4185 51.7201 35.3774L48.1769 33.5185L44.6338 35.3774C44.5546 35.4185 44.4722 35.4375 44.3929 35.4375C44.0919 35.4375 43.8272 35.167 43.8843 34.8332L44.5609 30.8955L41.6944 28.1064C41.387 27.8074 41.5565 27.2885 41.9812 27.2268L45.9411 26.6525L47.7142 23.0692ZM38.541 12.1516C40.7072 12.1516 42.8606 12.5455 44.9396 13.3239C45.0968 13.324 45.252 13.3585 45.3943 13.4251C45.5366 13.4916 45.6625 13.5886 45.7632 13.709C45.8639 13.8295 45.9368 13.9706 45.9769 14.1223C46.017 14.274 46.0232 14.4326 45.9952 14.587C45.9671 14.7414 45.9055 14.8877 45.8146 15.0157C45.7237 15.1437 45.6057 15.2502 45.4691 15.3277C45.3325 15.4052 45.1804 15.4517 45.0238 15.4642C44.8671 15.4766 44.7097 15.4545 44.5625 15.3995C44.4563 15.3995 44.0728 15.3663 43.908 15.3663C35.6191 15.3663 28.8766 22.0978 28.8766 30.3734C28.8766 38.6474 35.6191 45.3806 43.908 45.3806C44.0713 45.3806 44.4595 45.3473 44.5625 45.3473C45.1852 45.3473 45.64 45.8441 45.64 46.42C45.64 46.8914 45.3326 47.2917 44.9079 47.4356C42.8369 48.2061 40.6945 48.5968 38.5395 48.5968C28.4757 48.5984 20.2882 40.4225 20.2882 30.375C20.2882 20.3259 28.4757 12.1516 38.541 12.1516ZM60.3466 70.875H15.2175C12.1751 70.875 10.1468 68.85 10.1468 65.8125C10.1468 62.775 12.6821 60.75 15.2175 60.75H60.3466V70.875Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_18_84">
                                                <rect width="71" height="81" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h3>Misi</h3>
                                    <p>Mendidik dan mengembangkan generasi<br>mukmin-muslim yang berbudi tinggi,
                                        berbadan<br>sehat, berpengeta-huan luas, dan berpikiran bebas, serta berkhidmat
                                        kepada semua orang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="height: 23rem;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg width="95" height="81" viewBox="0 0 95 81" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_24_88)">
                                            <path
                                                d="M50.1422 0.854297C48.5391 -0.284766 46.4609 -0.284766 44.8578 0.854297L24.6852 15.1875H7.125C3.19141 15.1875 0 18.5889 0 22.7812V73.4062C0 77.5986 3.19141 81 7.125 81H38V65.8125C38 60.2279 42.2602 55.6875 47.5 55.6875C52.7398 55.6875 57 60.2279 57 65.8125V81H87.875C91.8086 81 95 77.5986 95 73.4062V22.7812C95 18.5889 91.8086 15.1875 87.875 15.1875H70.3148L50.1422 0.854297ZM14.25 30.375H19C20.3062 30.375 21.375 31.5141 21.375 32.9062V43.0312C21.375 44.4234 20.3062 45.5625 19 45.5625H14.25C12.9438 45.5625 11.875 44.4234 11.875 43.0312V32.9062C11.875 31.5141 12.9438 30.375 14.25 30.375ZM73.625 32.9062C73.625 31.5141 74.6937 30.375 76 30.375H80.75C82.0563 30.375 83.125 31.5141 83.125 32.9062V43.0312C83.125 44.4234 82.0563 45.5625 80.75 45.5625H76C74.6937 45.5625 73.625 44.4234 73.625 43.0312V32.9062ZM14.25 50.625H19C20.3062 50.625 21.375 51.7641 21.375 53.1562V63.2812C21.375 64.6734 20.3062 65.8125 19 65.8125H14.25C12.9438 65.8125 11.875 64.6734 11.875 63.2812V53.1562C11.875 51.7641 12.9438 50.625 14.25 50.625ZM73.625 53.1562C73.625 51.7641 74.6937 50.625 76 50.625H80.75C82.0563 50.625 83.125 51.7641 83.125 53.1562V63.2812C83.125 64.6734 82.0563 65.8125 80.75 65.8125H76C74.6937 65.8125 73.625 64.6734 73.625 63.2812V53.1562ZM34.4375 27.8438C34.4375 24.1514 35.8137 20.6104 38.2634 17.9995C40.7131 15.3886 44.0356 13.9219 47.5 13.9219C50.9644 13.9219 54.2869 15.3886 56.7366 17.9995C59.1863 20.6104 60.5625 24.1514 60.5625 27.8438C60.5625 31.5361 59.1863 35.0771 56.7366 37.688C54.2869 40.2989 50.9644 41.7656 47.5 41.7656C44.0356 41.7656 40.7131 40.2989 38.2634 37.688C35.8137 35.0771 34.4375 31.5361 34.4375 27.8438ZM47.5 20.25C46.1937 20.25 45.125 21.3891 45.125 22.7812V27.8438C45.125 29.2359 46.1937 30.375 47.5 30.375H52.25C53.5563 30.375 54.625 29.2359 54.625 27.8438C54.625 26.4516 53.5563 25.3125 52.25 25.3125H49.875V22.7812C49.875 21.3891 48.8063 20.25 47.5 20.25Z"
                                                fill="#1E1E1E" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_24_88">
                                                <rect width="95" height="81" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h3>Tujuan</h3>
                                    <p>Lahirnya siswa intelek yang memiliki<br>keseimbangan zikir sekaligus pikir
                                        dan<br>terwujudnya kepribadian yang beriman dan<br>bertakwa kepada Allah SWT.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark mt-4">
            <img src="{{ asset('asset/img/homebg2.jpg') }}" class="card-img" alt="..." style="height: 400px;">
            <div class="card-img-overlay">
                <h3 class="card-title text-center">Selayang Pandang</h3>
                <div class="card col-md-6 float-md-end mb-3 ms-md-3 m-5" style="width: 30rem;">
                    <img src="{{ asset('asset/img/selayang pandang mdta.jpg') }}" class="card-img-top"
                        alt="...">
                </div>
                <small class="card-text-center col-md-5 float-md-end mb-3 ms-md-6 m-5">Madrasah Diniyah Takmiliyah
                    Awaliyah (MDTA) adalah satuan pendidikan <br> keagamaan Islam bersifat non formal yang
                    menyelenggarakan pendidikan <br> tingkat dasar setara SD/sederajat dengan masa belajar 4 (empat)
                    tahun <br> dan jumlah jam belajar 18 (delapan belas) jam per minggu.
                    Program <br> Madrasah Diniyah Takmiliyah Awaliyah (MDTA) Al Ar-Risalah menggunakan <br> kurikulum
                    yang ditetapkan Kementrian Agama dan Kurikulum Tingkat <br> Satuan Pendidikan (KTSP) diantaranya
                    meliputi; Qur’an Hadits, Akidah Akhlak, <br> Fiqih, Sejarah Kebudayaan Islam, Bahasa Arab dan
                    Praktek Ibadah. <br> Pembelajaran dilakukan dengan cara sistem praktek. Santri diharapkan <br> mampu
                    mengaplikasikan materi yang disampaikan oleh guru. Waktu <br> kegiatan dilakukan dari jam 14.00 s.d.
                    16.30 WIB.</small>
            </div>
        </div>
        <div class="countainer text-center mt-4">
            <h3><span style="color: #00763A;">Mengapa Memilih</span> MDTA Ar-Risalah Syafi’iyyah?</h3>
            <div class="container mt-4">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card" style="height: 20rem;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg width="71" height="81" viewBox="0 0 71 81" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M70.995 56.7V4.05C70.995 1.51875 69.4738 0 66.9385 0H15.2175C6.59732 0 0.00543213 6.58125 0.00543213 15.1875V65.8125C0.00543213 74.4187 6.59732 81 15.2175 81H66.9385C68.9668 81 70.995 79.4812 70.995 76.95V74.4187C70.995 73.4062 70.488 72.3938 69.4738 71.3812C68.9668 68.85 68.9668 61.7625 69.4738 59.7375C70.488 59.2313 70.995 58.2188 70.995 56.7ZM47.7142 23.0692C47.8093 22.8778 47.9931 22.7812 48.1769 22.7812C48.3608 22.7812 48.5446 22.8778 48.6396 23.0692L50.4112 26.6525L54.3727 27.2268C54.7958 27.2885 54.9653 27.8074 54.6595 28.1064L51.793 30.8955L52.4696 34.8332C52.5266 35.167 52.262 35.4375 51.9609 35.4375C51.8817 35.4375 51.7993 35.4185 51.7201 35.3774L48.1769 33.5185L44.6338 35.3774C44.5546 35.4185 44.4722 35.4375 44.3929 35.4375C44.0919 35.4375 43.8272 35.167 43.8843 34.8332L44.5609 30.8955L41.6944 28.1064C41.387 27.8074 41.5565 27.2885 41.9812 27.2268L45.9411 26.6525L47.7142 23.0692ZM38.5411 12.1516C40.7072 12.1516 42.8606 12.5455 44.9396 13.3239C45.0968 13.324 45.252 13.3585 45.3943 13.4251C45.5366 13.4916 45.6625 13.5886 45.7632 13.709C45.8639 13.8295 45.9368 13.9706 45.9769 14.1223C46.017 14.274 46.0232 14.4326 45.9952 14.587C45.9671 14.7414 45.9055 14.8877 45.8146 15.0157C45.7237 15.1437 45.6057 15.2502 45.4691 15.3277C45.3325 15.4052 45.1805 15.4517 45.0238 15.4642C44.8671 15.4766 44.7097 15.4545 44.5625 15.3995C44.4563 15.3995 44.0729 15.3663 43.9081 15.3663C35.6191 15.3663 28.8766 22.0978 28.8766 30.3734C28.8766 38.6474 35.6191 45.3806 43.9081 45.3806C44.0713 45.3806 44.4595 45.3473 44.5625 45.3473C45.1852 45.3473 45.64 45.8441 45.64 46.42C45.64 46.8914 45.3326 47.2917 44.9079 47.4356C42.8369 48.2061 40.6945 48.5968 38.5395 48.5968C28.4757 48.5984 20.2882 40.4225 20.2882 30.375C20.2882 20.3259 28.4757 12.1516 38.5411 12.1516ZM60.3466 70.875H15.2175C12.1751 70.875 10.1468 68.85 10.1468 65.8125C10.1468 62.775 12.6821 60.75 15.2175 60.75H60.3466V70.875Z"
                                            fill="#00763A" />
                                    </svg>
                                    <h3 class="mt-2" style="color: #00763A;">Pendidikan Berbasis Agama</h3>
                                    <p class="mt-2">Memberikan pendidikan yang berbasis pada ajaran Islam, termasuk
                                        pembelajaran Al-Quran, hadis, dan nilai-nilai Islam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="height: 20rem;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_38_17" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="4" y="10" width="63" height="57">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M35.5 11.8334L65.0833 31.0625V65.0834H5.91667V31.0625L35.5 11.8334Z"
                                                fill="white" stroke="white" stroke-width="3.25"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M29.5833 65.0834V34.0209L17.75 41.4167V65.0834M41.4167 65.0834V34.0209L53.25 41.4167V65.0834"
                                                stroke="black" stroke-width="3.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M60.6458 65.0834H11.8333" stroke="white" stroke-width="3.25"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </mask>
                                        <g mask="url(#mask0_38_17)">
                                            <path d="M0 0H71V71H0V0Z" fill="#00763A" />
                                        </g>
                                    </svg>
                                    <h3 class="mt-2" style="color: #00763A;">Tahfizh Hadist</h3>
                                    <p class="mt-2">Program tahfizh hadist merupakan kunci memahami Alquran, jalan
                                        untuk mengetahui petunjuk Rasulullah, dan sumber dalil syari’i setelah Alquran.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="height: 20rem;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28.2521 49.9594L53.324 24.8875C53.9156 24.2958 54.6059 24 55.3948 24C56.1837 24 56.874 24.2958 57.4656 24.8875C58.0573 25.4792 58.3531 26.1823 58.3531 26.9968C58.3531 27.8113 58.0573 28.5134 57.4656 29.1031L30.3229 56.3198C29.7313 56.9115 29.041 57.2073 28.2521 57.2073C27.4632 57.2073 26.7729 56.9115 26.1813 56.3198L13.4604 43.599C12.8688 43.0073 12.5848 42.3052 12.6084 41.4926C12.6321 40.6801 12.9407 39.977 13.5344 39.3833C14.128 38.7897 14.8311 38.4939 15.6437 38.4958C16.4562 38.4978 17.1583 38.7936 17.75 39.3833L28.2521 49.9594Z"
                                            fill="#00763A" />
                                        <path
                                            d="M28.5759 34.98L43.9218 17.6147C44.2839 17.2049 44.7064 17 45.1893 17C45.6721 17 46.0946 17.2049 46.4568 17.6147C46.8189 18.0245 47 18.5115 47 19.0756C47 19.6398 46.8189 20.1261 46.4568 20.5345L29.8434 39.3853C29.4813 39.7951 29.0588 40 28.5759 40C28.0931 40 27.6706 39.7951 27.3084 39.3853L19.5223 30.5746C19.1602 30.1648 18.9863 29.6785 19.0008 29.1157C19.0153 28.5529 19.2042 28.066 19.5676 27.6548C19.9309 27.2436 20.3613 27.0387 20.8586 27.0401C21.356 27.0415 21.7857 27.2464 22.1479 27.6548L28.5759 34.98Z"
                                            fill="#00763A" />
                                    </svg>
                                    <h3 class="mt-2" style="color: #00763A;">Kualitas Pendidikan</h3>
                                    <p class="mt-2">menawarkan kurikulum yang seimbang antara pendidikan agama dan
                                        akademik, sehingga siswa tetap mendapatkan pendidikan yang berkualitas dan
                                        memenuhi standar nasional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark text-center mt-4">
            <img src="{{ asset('asset/img/home3.jpg') }}" class="card-img" alt="..." style="height: 400px;">
            <div class="overlay"></div>
            <div class="card-img-overlay">
                <h2 class="card-title" style="padding-top: 10rem;">PENDAFTARAN PESERTA DIDIK BARU</h2>
                <p class="card-text">MDTA Ar-Risalah siap memenuhi kebutuhan akan tambahan pendidikan agama Islam</p>
                <button type="button" class="btn btn-success p-2 mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> Daftar Sekarang
                </button>
            </div>
        </div>
        <h3 class="text-center mt-3"><span class="border-bottom border-2 border-black"><span
                    style="color: #00763A;">Dokumentasi</span> Kegiatan</span></h3>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="card" style="margin-left: 60x;">
                                    <img src="{{ asset('asset/img/kegiatan mdta 2.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('asset/img/kegiatan mdta 3.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('asset/img/kegiatan mdta.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="card" style="margin-left: 60x;">
                                    <img src="{{ asset('asset/img/kegiatan mdta 2.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('asset/img/kegiatan mdta 3.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('asset/img/kegiatan mdta.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ">
                            <div class="col-md-4 mt-3">
                                <div class="card" style="margin-left: 60x;">
                                    <img src="{{ asset('asset/img/kegiatan mdta 2.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('asset/img/kegiatan mdta 3.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('asset/img/kegiatan mdta.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"
                        style="background-color: black;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"
                        style="background-color: black;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <hr class="mt-4">
        <h3 class="text-center" style="color: #00763A;">Partner Kami</h3>
        <div class="container">
            <div id="carouselExampleIndicatorss" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivairlangga2.png') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivdjuanda.png') }}" class="card-img-top"
                                    alt="..." style="max-width: 230px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivibnkhaldun.jpg') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px; padding-left: 50px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivislam.jpg') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivairlangga2.png') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivdjuanda.png') }}" class="card-img-top"
                                    alt="..." style="max-width: 230px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivibnkhaldun.jpg') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px; padding-left: 50px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivislam.jpg') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivairlangga2.png') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivdjuanda.png') }}" class="card-img-top"
                                    alt="..." style="max-width: 230px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivibnkhaldun.jpg') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px; padding-left: 50px;">
                            </div>
                            <div class="col mt-3">
                                <img src="{{ asset('asset/img/logounivislam.jpg') }}" class="card-img-top"
                                    alt="..." style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorss"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"
                        style="background-color: black;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorss"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"
                        style="background-color: black;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
    <footer class="text-white pt-5 pb-5" style="background-color: #00763a;">
      <div class="container">
          <div class="row pb-3">
              <div class="col-md-4">
                  <h5>Pondok Pesantren Ar-Risalah Safi’iyah</h5>
                  <p><b>Alamat</b>: Kp.Paseban RT / RW 07 / 01, Desa Hegarmanah,  Kecamatan Sukaluyu,  Kabupaten Cianjur</p>
              </div>
              <div class="col-md-4">
              </div>
              <div class="col-md-4 d-flex flex-column align-items-end">
                  <ul class="list-unstyled mb-2">
                      <li><i class="fas fa-phone-alt font-sans"> </i>   081214192627</li>
                  </ul>
                  <div class="mx-0">
                      <a href="#" class="text-white mr-1"><h5 class="fab fa-facebook"></h5></a>
                      <a href="#" class="text-white mr-1"><h5 class="fab fa-instagram"></h5></a>
                      <a href="#" class="text-white mr-1"><h5 class="fab fa-whatsapp"></h5></a>
                      <a href="#" class="text-white mr-1"><h5 class="fab fa-youtube"></h5></a>
                  </div>
              </div>
          </div>
          <hr class="my-3 bg-white">
          <div class="row">
          </div>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
