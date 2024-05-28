<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        .carousel-caption {
            z-index: 2;
            position: absolute;
            top: 55%;
            left: 10%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>
    @include('navbar')
    <main>
        <img src="asset/img/gallery1.jpg" class="d-block w-100 mt-5" alt="..." />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2>Gallery</h2>
        </div>

        <section class="container" id="Dailynews">
            <div class="page active" id="page-1">
                <div class="row g-4 mx-auto p-5">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ asset ('asset/img/berita2.jpg')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ asset ('asset/img/berita2.jpg')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ asset ('asset/img/berita2.jpg')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ asset ('asset/img/berita2.jpg')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ asset ('asset/img/berita2.jpg')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ asset ('asset/img/berita2.jpg')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <!-- Add more cards here for page 1 -->
                </div>
            </div>
            <div class="page" id="page-2">
                <div class="row g-4 mx-auto p-5">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <!-- Add more cards here for page 2 -->
                </div>
            </div>
            <div class="page" id="page-3">
                <div class="row g-4 mx-auto p-5">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita4.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita4.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita4.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita4.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita4.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita4.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="asset/img/berita3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <!-- Add more cards here for page 3 -->
                </div>
            </div>
        </section>
        <!-- navigation page -->
        <section class="mx-auto">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous" onclick="showPage('prev')">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" onclick="showPage(1)">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="showPage(2)">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="showPage(3)">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next" onclick="showPage('next')">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </main>
    <footer class="text-white pt-5 pb-5" style="background-color: #00763a;">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-4">
                    <h5>Pondok Pesantren Ar-Risalah Safi’iyah</h5>
                    <p><b>Alamat</b>: Kp.Paseban RT / RW 07 / 01, Desa Hegarmanah, Kecamatan Sukaluyu, Kabupaten Cianjur</p>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 d-flex flex-column align-items-end">
                    <ul class="list-unstyled mb-2">
                        <li><i class="fas fa-phone-alt font-sans"> </i> 081214192627</li>
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
    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" id="imagePreview" class="img-fluid" alt="Image Preview">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        let currentPage = 1;

        function showPage(page) {
            const pages = document.querySelectorAll('.page');
            const totalPages = pages.length;

            if (page === 'prev') {
                if (currentPage > 1) {
                    currentPage--;
                }
            } else if (page === 'next') {
                if (currentPage < totalPages) {
                    currentPage++;
                }
            } else {
                currentPage = page;
            }

            pages.forEach((p, index) => {
                if (index + 1 === currentPage) {
                    p.classList.add('active');
                } else {
                    p.classList.remove('active');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            showPage(1);

            const images = document.querySelectorAll('.card-img-top');
            const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
            const imagePreview = document.getElementById('imagePreview');

            images.forEach(img => {
                img.addEventListener('click', () => {
                    const src = img.getAttribute('src');
                    imagePreview.setAttribute('src', src);
                    imageModal.show();
                });
            });
        });
    </script>
</body>

</html>
