<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ponpes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

</head>

<body>
    <!-- navbar -->
    @include('navbar')
    <!-- end navbar -->
    <main>
        <div id="carouselExampleCaptions" class="carousel slide mt-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('asset/img/home1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-25"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center pt-5 mb-lg-5 mt-lg-5 d-none d-md-block">
                        <h2 class="text-center mt-lg-5">Ponpes Modern Ar-Risalah Syafi’iyyah</h2>
                        <h5 class="text-center mb-lg-5">Unggul, Berbudi Tinggi, Berpengetahuan Luas</h5>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center d-block d-md-none">
                        <small class="text-center "><strong> Ponpes Modern Ar-Risalah Syafi’iyyah</strong></small>
                        <small class="text-center"><strong> Unggul, Berbudi Tinggi, Berpengetahuan Luas</strong></small>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="{{ asset('asset/img/home2.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-25"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center pt-5 mb-lg-5 mt-lg-5 d-none d-md-block">
                        <h2 class="text-center mt-lg-5">Ponpes Modern Ar-Risalah Syafi’iyyah</h2>
                        <h5 class="text-center mb-lg-5">Unggul, Berbudi Tinggi, Berpengetahuan Luas</h5>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center d-block d-md-none">
                        <h6 class="text-center ">Ponpes Modern Ar-Risalah Syafi’iyyah</h6>
                        <h6 class="text-center ">Unggul, Berbudi Tinggi, Berpengetahuan Luas</h6>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="{{ asset('asset/img/home3.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-25"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center pt-5 mb-lg-5 mt-lg-5 d-none d-md-block">
                        <h2 class="text-center mt-lg-5">Ponpes Modern Ar-Risalah Syafi’iyyah</h2>
                        <h5 class="text-center mb-lg-5">Unggul, Berbudi Tinggi, Berpengetahuan Luas</h5>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center d-block d-md-none">
                        <h6 class="text-center ">Ponpes Modern Ar-Risalah Syafi’iyyah</h6>
                        <h6 class="text-center ">Unggul, Berbudi Tinggi, Berpengetahuan Luas</h6>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="jumbo d-flex justify-content-around" style="background-color: #E2E2E2; padding: 2rem 1rem;">
            <div class="text-center d-none d-md-block">
                <h4><span style="color: #00763A;">Informasi &</span> Pendaftaran Santri Baru</h4>
                <h4 style="color: #00763A;">Tahun Ajaran 2024/2025</h4>
                <p>Pondok Pesantren Modern Ar-Risalah Safi’iyyah Membentuk generasi <br> yang unggul menuju terbentuknya
                    khaira
                    ummah</p>
            </div>
            <div class="text-center d-block d-md-none">
                <h6><span style="color: #00763A;">Informasi &</span> Pendaftaran Santri Baru</h6>
                <h6 style="color: #00763A;">Tahun Ajaran 2024/2025</h6>
                <small>Pondok Pesantren Modern Ar-Risalah Safi’iyyah <br> Membentuk generasi <br> yang unggul menuju terbentuknya
                    khaira
                    ummah</small>
            </div>
            <div class="d-none d-md-block">
                <button type="button" class="btn btn-success p-3 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> Informasi
                </button>
            </div>
            <div class="d-block d-md-none align-self-start">
                <button type="button" class="btn btn-success btn-sm mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> <small>Informasi</small>
                </button>
            </div>
        </div>
        <div class="countainer col-10 mx-auto mb-5 text-center mt-4">
            <h5 class="mt-5 mb-4">Our Program</h5>
            <h3><span style="color: #00763A;">Pendidikan</span> Berbasis Tauhid </h3>
            <hr class="col-1 mx-auto border border-dark opacity-100 border-2 mt-4">
            <div class="col-10 col-md-12 col-lg-12 g-5 mx-auto container mt-5">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-lg-5 flex-lg-row">
                    <div class="col mt-5">
                        <div class="card pb-md-5 pb-lg-5 pb-xl-3" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-4" width="81" height="81" viewBox="0 0 81 81" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M70.875 33.75H64.125V13.5H67.5V6.75H13.5V13.5H16.875V33.75H10.125C9.22989 33.75 8.37145 34.1056 7.73851 34.7385C7.10558 35.3715 6.75 36.2299 6.75 37.125V67.5H74.25V37.125C74.25 36.2299 73.8944 35.3715 73.2615 34.7385C72.6286 34.1056 71.7701 33.75 70.875 33.75ZM47.25 60.75V47.25H33.75V60.75H23.625V13.5H57.375V60.75H47.25Z"
                                            fill="#1E1E1E" />
                                        <path
                                            d="M30.375 20.25H37.125V27H30.375V20.25ZM43.875 20.25H50.625V27H43.875V20.25ZM30.375 33.75H37.125V40.5H30.375V33.75ZM43.875 33.75H50.625V40.5H43.875V33.75Z"
                                            fill="#1E1E1E" />
                                    </svg>
                                    <h5 class="mt-3 mb-3">Boarding School</h5>
                                    <h6 class="pb-lg-3">Program yang diperuntukkan bagi  santri yang ingin focus pendidikan formal serta
                                        mendapatkan  hafalan
                                        Quran  dengan model belajar full day school. Target hafalan 8 juz dalam 3 tahun.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card text-white pb-lg-5 pb-md-5 pb-xl-3 " style="background-color: #00763A;">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-4 mb-md-2" w"idth="71" height="81" viewBox="0 0 71 81" fill="none"
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
                                    <h5 class="mt-3 mb-3 ">Takhassus</h5>
                                    <h6 class="pb-md-5">Program khusus tahfidz <br> Quran  sebagai program Ponpes Modern Ar-Risalah  Syafi’iyyah
                                        <br>dengan  target
                                        hafalan 20 – 30 juz.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card pb-md-5 pb-lg-5 pb-xl-4">
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-4" width="95" height="81" viewBox="0 0 95 81" fill="none"
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
                                    <h5 class="mt-3 mb-3">Full Day School</h5>
                                    <h6 class="pb-xl-2 pb-lg-3">Program kelas regular <br> tidak berasrama dan tetap mendapatkan  muatan keilmuan <br>
                                        Tsaqofah Islamiyah. <br>
                                        Hari efektif senin –  jumat. <br> Target hafalan 4 juz dalam 3 tahun.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark mt-lg-4 mx-lg-auto">
            <div class="position-relative">
                <!-- Large screen view -->
                <img src="{{ asset('asset/img/homebgdesk.jpg') }}" class="card-img h-100 d-none d-lg-block" alt="Large screen view">

                <!-- Medium screen view -->
                <img src="{{ asset('asset/img/homebgmbl2.jpg') }}" class="card-img h-100 d-none d-md-block d-lg-none" alt="Medium screen view">

                <!-- Small screen view -->
                <img src="{{ asset('asset/img/homebgmbl3.jpg') }}" class="card-img h-100 d-none d-sm-block d-md-none" alt="Small screen view">

                <!-- Extra-small screen view -->
                <img src="{{ asset('asset/img/homebg2mbl.jpg') }}" class="card-img h-100 d-block d-sm-none" alt="Extra-small screen view">

                <div class="card-img-overlay d-flex flex-column align-items-center">
                    <h3 class="card-title text-center mt-3 mt-lg-3 mt-md-5">Selayang Pandang</h3>
                    <hr class="col-1 mx-auto border border-light opacity-100 border-2 my-md-5 my-lg-3 my-2">
                    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-around">
                        <div class="col-lg-5 text-center text-md-start mt-lg-3 mt-md-0 order-2 order-lg-1 pt-lg-3">
                            <!-- Large screen view -->
                            <h6 class="card-text d-none d-lg-block">
                                Ponpes Modern Ar-Risalah Syafi’iyyah adalah organisasi yang bergerak dalam
                                bidang Sosial, Pendidikan dan Keagamaan untuk memberikan nilai
                                dan manfaat kepada masyarakat. Dari dasar itu yayasan berkomitmen dalam program-program
                                diantaranya adalah pembentukan lembaga pendidikan yaitu Mts, MA, SMK dan SMP Ar-Risalah
                                Terpadu guna melahirkan generasi muda Islam yang lebih cerah dan mencerahkan. Sahabat-sahabat pengurus yayasan dan jajaran
                                pengurus harian Ponpes Modern Ar-Risalah Syafi’iyyah ditekankan pada pengembangan kemampuan
                                bersosialisasi untuk menumbuhkan karakter terpuji yang dilandasi pada ajaran Agama Islam,
                                seperti memiliki rasa percaya diri, mandiri, saling menghargai, dan mempunyai jiwa sosial.
                            </h6>

                            <!-- Medium screen view -->
                            <h5 class="card-text d-none text-center d-md-block d-lg-none">
                                Ponpes Modern Ar-Risalah Syafi’iyyah adalah organisasi yang bergerak dalam
                                bidang Sosial, Pendidikan dan Keagamaan untuk memberikan nilai
                                dan manfaat kepada masyarakat. Dari dasar itu yayasan berkomitmen dalam program-program
                                diantaranya adalah pembentukan lembaga pendidikan yaitu Mts, MA, SMK dan SMP Ar-Risalah
                                Terpadu guna melahirkan generasi muda Islam yang lebih cerah dan mencerahkan. Sahabat-sahabat pengurus yayasan dan jajaran
                                pengurus harian Ponpes Modern Ar-Risalah Syafi’iyyah ditekankan pada pengembangan kemampuan
                                bersosialisasi untuk menumbuhkan karakter terpuji yang dilandasi pada ajaran Agama Islam,
                                seperti memiliki rasa percaya diri, mandiri, saling menghargai, dan mempunyai jiwa sosial.
                            </h5>

                            <!-- Small screen view -->
                            <h4 class="card-text d-none d-sm-block d-md-none mt-2 mb-4">
                                Ponpes Modern Ar-Risalah Syafi’iyyah adalah organisasi yang bergerak dalam
                                bidang Sosial, Pendidikan dan Keagamaan untuk memberikan nilai
                                dan manfaat kepada masyarakat. Dari dasar itu yayasan berkomitmen dalam program-program
                                diantaranya adalah pembentukan lembaga pendidikan yaitu Mts, MA, SMK dan SMP Ar-Risalah
                                Terpadu guna melahirkan generasi muda Islam yang lebih cerah dan mencerahkan. Sahabat-sahabat pengurus yayasan dan jajaran
                                pengurus harian Ponpes Modern Ar-Risalah Syafi’iyyah ditekankan pada pengembangan kemampuan
                                bersosialisasi untuk menumbuhkan karakter terpuji yang dilandasi pada ajaran Agama Islam,
                                seperti memiliki rasa percaya diri, mandiri, saling menghargai, dan mempunyai jiwa sosial.
                            </h4>

                            <!-- Extra-small screen view -->
                            <small class="card-text d-block d-sm-none mt-2 mb-4">
                                Ponpes Modern Ar-Risalah Syafi’iyyah adalah organisasi yang bergerak dalam
                                bidang Sosial, Pendidikan dan Keagamaan untuk memberikan nilai
                                dan manfaat kepada masyarakat. Dari dasar itu yayasan berkomitmen dalam program-program
                                diantaranya adalah pembentukan lembaga pendidikan yaitu Mts, MA, SMK dan SMP Ar-Risalah
                                Terpadu guna melahirkan generasi muda Islam yang lebih cerah dan mencerahkan. Sahabat-sahabat pengurus yayasan dan jajaran
                                pengurus harian Ponpes Modern Ar-Risalah Syafi’iyyah ditekankan pada pengembangan kemampuan
                                bersosialisasi untuk menumbuhkan karakter terpuji yang dilandasi pada ajaran Agama Islam,
                                seperti memiliki rasa percaya diri, mandiri, saling menghargai, dan mempunyai jiwa sosial.
                            </small>
                        </div>

                        <!-- Large screen view -->
                        <div class="card col-lg-5 float-md-end mb-3 me-md-3 w-30 order-1 order-lg-2 mt-lg-5 d-none d-lg-block">
                            <img src="{{ asset('asset/img/gallery9.jpg') }}" class="card-img-top" alt="...">
                        </div>

                        <!-- Medium screen view -->
                        <div class="card col-md-4 col-sm-6 float-md-end mb-3 me-md-3 w-50 order-1 order-lg-2 mt-lg-5 d-none d-md-block d-lg-none">
                            <img src="{{ asset('asset/img/gallery9.jpg') }}" class="card-img-top" alt="...">
                        </div>

                        <!-- Small screen view -->
                        <div class="card col-sm-6 float-md-end mb-3 me-md-3 w-75 order-1 order-lg-2 mt-lg-5 d-none d-sm-block d-md-none mt-3">
                            <img src="{{ asset('asset/img/gallery9.jpg') }}" class="card-img-top" alt="...">
                        </div>

                        <!-- Extra-small screen view -->
                        <div class="card col-12 float-md-end mb-3 me-md-3 w-100 order-1 order-lg-2 mt-lg-5 d-block d-sm-none mt-3">
                            <img src="{{ asset('asset/img/gallery9.jpg') }}" class="card-img-top" alt="...">
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="countainer text-center mt-5">
            <h3 class="d-none d-md-block" ><span style="color: #00763A;">Mengapa Memilih</span> Ponpes Modern Ar-Risalah Syafi’iyyah?</h3>
            <h4 class="d-block d-md-none" ><span style="color: #00763A;">Mengapa Memilih</span> Ponpes Modern Ar-Risalah Syafi’iyyah?</h4>

            <div class="col-12  g-5 mx-auto container mt-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-lg-3 flex-lg-row mx-auto">
                    <div class="col ">
                        <div class="card mt-3 pb-lg-5 pb-xl-2" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-3 mb-3" width="71" height="81" viewBox="0 0 71 81" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M70.995 56.7V4.05C70.995 1.51875 69.4738 0 66.9385 0H15.2175C6.59732 0 0.00543213 6.58125 0.00543213 15.1875V65.8125C0.00543213 74.4187 6.59732 81 15.2175 81H66.9385C68.9668 81 70.995 79.4812 70.995 76.95V74.4187C70.995 73.4062 70.488 72.3938 69.4738 71.3812C68.9668 68.85 68.9668 61.7625 69.4738 59.7375C70.488 59.2313 70.995 58.2188 70.995 56.7ZM47.7142 23.0692C47.8093 22.8778 47.9931 22.7812 48.1769 22.7812C48.3608 22.7812 48.5446 22.8778 48.6396 23.0692L50.4112 26.6525L54.3727 27.2268C54.7958 27.2885 54.9653 27.8074 54.6595 28.1064L51.793 30.8955L52.4696 34.8332C52.5266 35.167 52.262 35.4375 51.9609 35.4375C51.8817 35.4375 51.7993 35.4185 51.7201 35.3774L48.1769 33.5185L44.6338 35.3774C44.5546 35.4185 44.4722 35.4375 44.3929 35.4375C44.0919 35.4375 43.8272 35.167 43.8843 34.8332L44.5609 30.8955L41.6944 28.1064C41.387 27.8074 41.5565 27.2885 41.9812 27.2268L45.9411 26.6525L47.7142 23.0692ZM38.5411 12.1516C40.7072 12.1516 42.8606 12.5455 44.9396 13.3239C45.0968 13.324 45.252 13.3585 45.3943 13.4251C45.5366 13.4916 45.6625 13.5886 45.7632 13.709C45.8639 13.8295 45.9368 13.9706 45.9769 14.1223C46.017 14.274 46.0232 14.4326 45.9952 14.587C45.9671 14.7414 45.9055 14.8877 45.8146 15.0157C45.7237 15.1437 45.6057 15.2502 45.4691 15.3277C45.3325 15.4052 45.1805 15.4517 45.0238 15.4642C44.8671 15.4766 44.7097 15.4545 44.5625 15.3995C44.4563 15.3995 44.0729 15.3663 43.9081 15.3663C35.6191 15.3663 28.8766 22.0978 28.8766 30.3734C28.8766 38.6474 35.6191 45.3806 43.9081 45.3806C44.0713 45.3806 44.4595 45.3473 44.5625 45.3473C45.1852 45.3473 45.64 45.8441 45.64 46.42C45.64 46.8914 45.3326 47.2917 44.9079 47.4356C42.8369 48.2061 40.6945 48.5968 38.5395 48.5968C28.4757 48.5984 20.2882 40.4225 20.2882 30.375C20.2882 20.3259 28.4757 12.1516 38.5411 12.1516ZM60.3466 70.875H15.2175C12.1751 70.875 10.1468 68.85 10.1468 65.8125C10.1468 62.775 12.6821 60.75 15.2175 60.75H60.3466V70.875Z"
                                            fill="#00763A" />
                                    </svg>
                                    <h5 class="mt-2 mb-3" style="color: #00763A;">Tahfizh 30 Juz Bersanad</h5>
                                    <h6 class="mt-2 d-none d-md-block">Santri Program Takhassus akan diberikan  bimbingan tahfizh 20-30 juz dengan  sanad Riwayat Hafs an Ashim dan  riwayat-riwayat lainnya.
                                    </h6>
                                    <h6 class="mt-2 d-block d-md-none mb-3">Santri Program Takhassus akan diberikan  bimbingan tahfizh 20-30 juz  dengan  sanad Riwayat Hafs an Ashim  dan  riwayat-riwayat lainnya.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col  ">
                        <div class="card mt-3 pb-lg-4 pb-xl-3" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-3 mb-3" width="71" height="71" viewBox="0 0 71 71" fill="none"
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
                                    <h5 class="mt-2 mb-3" style="color: #00763A;">Bimbingan Langsung Syeikh Timur Tengah</h5>
                                    <h6 class="mt-2 d-none d-md-block pb-lg-1">Santri program Takhassus akan diberikan bimbingan langsung oleh Syeikh Muhammad Mahdi Al-Yamani.</h6>
                                    <h6 class="mt-2 d-block d-md-none mb-3 pb-1">Santri program Takhassus akan diberikan bimbingan langsung oleh Syeikh Muhammad Mahdi Al-Yamani.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card mt-3" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-3 mb-3" width="71" height="71" viewBox="0 0 71 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28.2521 49.9594L53.324 24.8875C53.9156 24.2958 54.6059 24 55.3948 24C56.1837 24 56.874 24.2958 57.4656 24.8875C58.0573 25.4792 58.3531 26.1823 58.3531 26.9968C58.3531 27.8113 58.0573 28.5134 57.4656 29.1031L30.3229 56.3198C29.7313 56.9115 29.041 57.2073 28.2521 57.2073C27.4632 57.2073 26.7729 56.9115 26.1813 56.3198L13.4604 43.599C12.8688 43.0073 12.5848 42.3052 12.6084 41.4926C12.6321 40.6801 12.9407 39.977 13.5344 39.3833C14.128 38.7897 14.8311 38.4939 15.6437 38.4958C16.4562 38.4978 17.1583 38.7936 17.75 39.3833L28.2521 49.9594Z"
                                            fill="#00763A" />
                                        <path
                                            d="M28.5759 34.98L43.9218 17.6147C44.2839 17.2049 44.7064 17 45.1893 17C45.6721 17 46.0946 17.2049 46.4568 17.6147C46.8189 18.0245 47 18.5115 47 19.0756C47 19.6398 46.8189 20.1261 46.4568 20.5345L29.8434 39.3853C29.4813 39.7951 29.0588 40 28.5759 40C28.0931 40 27.6706 39.7951 27.3084 39.3853L19.5223 30.5746C19.1602 30.1648 18.9863 29.6785 19.0008 29.1157C19.0153 28.5529 19.2042 28.066 19.5676 27.6548C19.9309 27.2436 20.3613 27.0387 20.8586 27.0401C21.356 27.0415 21.7857 27.2464 22.1479 27.6548L28.5759 34.98Z"
                                            fill="#00763A" />
                                    </svg>
                                    <h5 class="mt-2 mb-3" style="color: #00763A;">Kurikulum Integral</h5>
                                    <h6 class="mt-2 d-none d-md-block">Pendidikan Integral Berbasis Tauhid , yang mengintegrasikan kurkulum Nasional dan penamaan nilai-nlai spiritual keislaman
                                        Islamiyah. Hari efektif senin – jumat. Target hafalan 4 juz dalam 3 tahun.</h6>
                                    <h6 class="mt-2 d-block d-md-none">Pendidikan Integral Berbasis Tauhid , yang mengintegrasikan kurkulum Nasional dan penamaan nilai-nlai spiritual keislaman
                                        Islamiyah. Hari efektif senin – jumat. Target hafalan 4 juz dalam 3 tahun.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card mt-3 pb-lg-3 pb-xl-1 pb-md-3" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-3 mb-3" width="71" height="71" viewBox="0 0 71 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M35.5 47.3333C33.1462 47.3333 30.8888 46.3983 29.2244 44.7339C27.56 43.0695 26.625 40.8121 26.625 38.4583C26.625 35.145 28.4296 32.2458 31.0625 30.7371L59.7879 14.1112L43.4283 42.4521C41.9492 45.3512 38.9613 47.3333 35.5 47.3333ZM35.5 8.875C40.8546 8.875 45.8542 10.3542 50.2029 12.78L43.9904 16.3596C41.4167 15.3538 38.4583 14.7917 35.5 14.7917C29.2232 14.7917 23.2035 17.2851 18.7651 21.7235C14.3268 26.1618 11.8333 32.1815 11.8333 38.4583C11.8333 44.9963 14.4663 50.9129 18.7558 55.1729H18.7854C19.9392 56.3267 19.9392 58.1904 18.7854 59.3442C17.6317 60.4979 15.7383 60.4979 14.5846 59.3737C11.8334 56.6302 9.65137 53.3702 8.16386 49.7809C6.67634 46.1915 5.91266 42.3437 5.91667 38.4583C5.91667 30.6123 9.03348 23.0877 14.5814 17.5398C20.1294 11.9918 27.654 8.875 35.5 8.875ZM65.0833 38.4583C65.0833 46.6233 61.77 54.0192 56.4154 59.3737C55.2617 60.4979 53.3979 60.4979 52.2442 59.3442C51.9699 59.0705 51.7523 58.7454 51.6039 58.3875C51.4554 58.0296 51.379 57.646 51.379 57.2585C51.379 56.8711 51.4554 56.4874 51.6039 56.1296C51.7523 55.7717 51.9699 55.4466 52.2442 55.1729C54.4443 52.9818 56.1887 50.3767 57.3769 47.5079C58.565 44.6391 59.1733 41.5634 59.1667 38.4583C59.1667 35.5 58.6046 32.5417 57.5692 29.8792L61.1488 23.6667C63.6042 28.1042 65.0833 33.0742 65.0833 38.4583Z"
                                            fill="#00763A" />
                                    </svg>
                                    <h5 class="mt-2 mb-3" style="color: #00763A;">Pembinaan 24 Jam</h5>
                                    <h6 class="mt-2 d-none d-md-block">Santri akan mendapatkan pendampingan bersama musyrif-musyrif berpengalaman  selama 24 jam non-stop di sekolah maupun di lingkungan asrama </h6>
                                    <h6 class="mt-2 d-block d-md-none mb-5 pb-3">Santri akan mendapatkan pendampingan bersama musyrif-musyrif berpengalaman selama 24 jam non-stop di sekolah maupun di lingkungan asrama </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card mt-3 pb-lg-1 pb-md-1" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-3 mb-3" width="81" height="71" viewBox="0 0 81 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_38_41)">
                                            <path
                                                d="M0 66.5625C0 69.0128 1.81364 71 4.05 71H12.15C14.3864 71 16.2 69.0128 16.2 66.5625V22.1875H0V66.5625ZM73.2999 39.9375C75.5603 37.526 76.95 34.7595 76.95 31.7683C76.95 24.4381 71.661 18.7623 65.8226 14.7256C60.5146 11.0549 55.6179 6.71449 51.6527 1.38256L50.625 0L49.5973 1.38256C45.6321 6.71449 40.7367 11.0563 35.4274 14.7256C29.5891 18.7623 24.3 24.4381 24.3 31.7683C24.3 34.7595 25.6897 37.526 27.9501 39.9375H73.2999ZM76.95 44.375H24.3C22.0636 44.375 20.25 46.3622 20.25 48.8125V66.5625C20.25 69.0128 22.0636 71 24.3 71H28.35V62.125C28.35 59.6747 30.1636 57.6875 32.4 57.6875C34.6364 57.6875 36.45 59.6747 36.45 62.125V71H44.55V61.0156C44.55 54.3594 50.625 51.0312 50.625 51.0312C50.625 51.0312 56.7 54.3594 56.7 61.0156V71H64.8V62.125C64.8 59.6747 66.6136 57.6875 68.85 57.6875C71.0864 57.6875 72.9 59.6747 72.9 62.125V71H76.95C79.1864 71 81 69.0128 81 66.5625V48.8125C81 46.3622 79.1864 44.375 76.95 44.375ZM8.1 0C8.1 0 0 4.4375 0 13.3125V17.75H16.2V13.3125C16.2 4.4375 8.1 0 8.1 0Z"
                                                fill="#00763A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_38_41">
                                                <rect width="81" height="71" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <h5 class="mt-2 mb-3" style="color: #00763A;">Fasilitas Lengkap</h5>
                                    <h6 class="mt-2 d-none d-md-block">Masjid, Lab Komputer, IPA, Perpustakaan, Lapangan Olahraga, Hall, Santri Mart, dan lain-lain serta <br> lingkungan yang asri dari pusat perkotaan </h6>
                                    <h6 class="mt-2 d-block d-md-none pb-1">Masjid, Lab Komputer, IPA, Perpustakaan, Lapangan Olahraga, Hall, Santri Mart, dan lain-lain serta lingkungan yang asri dari pusat perkotaan </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card mt-3" >
                            <div class="card-body">
                                <div class="justify-content-between align-items-center">
                                    <svg class="mt-3 mb-3" width="71" height="71" viewBox="0 0 71 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_402_151)">
                                            <path
                                                d="M0 7.76566C0 6.88298 0.350641 6.03646 0.974785 5.41232C1.59893 4.78817 2.44545 4.43753 3.32813 4.43753H22.2008C27.6456 4.43753 32.4825 7.05566 35.5133 11.0982C37.0618 9.02634 39.0732 7.34508 41.3869 6.18862C43.7005 5.03216 46.2525 4.43252 48.8391 4.43753H67.6763C68.559 4.43753 69.4055 4.78817 70.0297 5.41232C70.6538 6.03646 71.0044 6.88298 71.0044 7.76566V54.3594C71.0044 55.2421 70.6538 56.0886 70.0297 56.7127C69.4055 57.3369 68.559 57.6875 67.6763 57.6875H47.6765C46.3653 57.6875 45.067 57.9458 43.8556 58.4475C42.6443 58.9493 41.5436 59.6847 40.6164 60.6118L37.8563 63.3675C37.2323 63.9908 36.3864 64.3409 35.5044 64.3409C34.6225 64.3409 33.7766 63.9908 33.1526 63.3675L30.3924 60.6118C29.4653 59.6847 28.3646 58.9493 27.1533 58.4475C25.9419 57.9458 24.6435 57.6875 23.3324 57.6875H3.32813C2.44545 57.6875 1.59893 57.3369 0.974785 56.7127C0.350641 56.0886 0 55.2421 0 54.3594L0 7.76566ZM32.1763 53.5784L32.1941 31.067L32.1852 21.0693C32.1828 18.4228 31.1299 15.8855 29.2577 14.015C27.3855 12.1445 24.8473 11.0938 22.2008 11.0938H6.65625V51.0313H23.3279C26.4583 51.0312 29.5251 51.914 32.1763 53.5784ZM38.8503 21.0782L38.8326 53.5695C41.4821 51.9099 44.5456 51.0302 47.6721 51.0313H64.3438V11.0938H48.8347C46.1867 11.0938 43.6471 12.1457 41.7747 14.0181C39.9022 15.8906 38.8503 18.4301 38.8503 21.0782Z"
                                                fill="#00763A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_402_151">
                                                <rect width="71" height="71" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h5 class="mt-2 mb-3" style="color: #00763A;">Program Bilingual (Arab dan Inggris)</h5>
                                    <h6 class="mt-2 d-none d-md-block">Pengenmbangan kemampuan bahasa <br> Arab dan bahasa Inggris yang intensif di  <br> Sekolah maupun Asrama</h6>
                                    <h6 class="mt-2 d-block d-md-none">Pengenmbangan kemampuan bahasa Arab dan bahasa Inggris yang intensif di Sekolah maupun Asrama</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark text-center mt-5 position-relative">
            <img src="{{ asset('asset/img/home32.jpg') }}" class="card-img d-none d-md-block " alt="...">
            <img src="{{ asset('asset/img/home3.jpg') }}" class="card-img d-block d-md-none " alt="...">
            <div class="position-absolute top start-0 w-100 h-100 bg-success opacity-25"></div>
            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                <!-- Desktop View -->
                <h2 class="card-title mb-3 d-none d-md-block">Pendaftaran Peserta Didik Baru</h2>
                <h5 class="card-text mb-4 d-none d-md-block">Kami mengundang putra terbaik Negeri untuk bergabung bersama SMA Integral Luqman al Hakim, Surabaya</h5>
                <!-- Mobile View -->
                <h6 class="card-title mb-1 d-block d-md-none">Pendaftaran Peserta Didik Baru</h6>
                <small class="card-text mb-1 d-block d-md-none">Kami mengundang putra terbaik Negeri untuk bergabung bersama SMA Integral Luqman al Hakim, Surabaya</small>
                <button type="button" class="btn btn-success p-2 mt-3 d-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> Daftar Sekarang
                </button>
                <button type="button" class="btn btn-success btn-md  mt-3 d-block d-md-none">
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="30" height="15" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> <small>Daftar Sekarang</small>
                </button>
            </div>
        </div>


        <h3 class="text-center mt-5"><span style="color: #00763A;">Dokumentasi</span> Kegiatan</h3>
        <hr class="col-1 mx-auto border border-dark opacity-100 border-2 mt-5 mb-5">
        <div class="container mt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row d-none d-lg-flex">
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex d-lg-none">
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row d-none d-lg-flex">
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex d-lg-none">
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="row d-none d-lg-flex">
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex d-lg-none">
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <div class="card">
                                        <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <hr class="mt-5">
        <h3 class="text-center mt-5" style="color: #00763A;">Partner Kami</h3>
        <div class="container mt-3 mt-md-1 mt-sm-1">
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
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivairlangga2.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivdjuanda.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivibnkhaldun.jpg') }}" class="img-fluid w-75" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivislam.jpg') }}" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivairlangga2.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivdjuanda.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivibnkhaldun.jpg') }}" class="img-fluid w-75" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivislam.jpg') }}" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivairlangga2.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivdjuanda.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivibnkhaldun.jpg') }}" class="img-fluid w-75" alt="...">
                            </div>
                            <div class="col d-flex align-items-center justify-content-center mt-3">
                                <img src="{{ asset('asset/img/logounivislam.jpg') }}" class="img-fluid" alt="...">
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
                <!-- Text Section -->
                <div class="col-md-4 d-flex mb-3 mb-md-0">
                    <div>
                        <h5>Pondok Pesantren Ar-Risalah Safi’iyah</h5>
                        <p><b>Alamat</b>: Kp.Paseban RT / RW 07 / 01, Desa Hegarmanah, Kecamatan Sukaluyu, Kabupaten Cianjur</p>
                    </div>
                </div>
                <!-- Map Section -->
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-3 mb-md-0">
                    <div class="card mb-3" style="width: 24rem;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.8065457919824!2d107.14163382748157!3d-6.816823699147612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e685381e821b98d%3A0xc2b0ddde44bc936b!2sKp%20paseban!5e0!3m2!1sid!2sid!4v1717403819803!5m2!1sid!2sid" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Social Media Section -->
                <div class="col-md-2 d-flex flex-column align-items-md-end align-items-start mb-3 mb-md-0">
                    <ul class="list-unstyled mb-2">
                        <li><i class="fas fa-phone-alt"></i> 081214192627</li>
                    </ul>
                    <div class="mx-0">
                        <a href="#" class="text-white mr-2"><h5 class="fab fa-facebook"></h5></a>
                        <a href="#" class="text-white mr-2"><h5 class="fab fa-instagram"></h5></a>
                        <a href="#" class="text-white mr-2"><h5 class="fab fa-whatsapp"></h5></a>
                        <a href="#" class="text-white"><h5 class="fab fa-youtube"></h5></a>
                    </div>
                </div>
            </div>
            <hr class="my-3 bg-white">
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
