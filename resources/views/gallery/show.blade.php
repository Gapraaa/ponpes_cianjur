<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    @include('navbar')
    <main class="mt-5">
        <div class="position-relative mt-5">
            <img src="{{ asset('asset/img/gallery1.jpg') }}" class="d-block w-100 mt-5" alt="..." />
            <div class="position-absolute bottom-0 start-0 p-2 text-white">
                <h2>Gallery</h2>
            </div>
        </div>
        

        <section class="container-fluid" id="Dailynews">
            <div class="page active" id="page-1">
                <div class="row row-cols-md-2 row-cols-lg-3 g-4 mx-auto p-5">
                    @foreach($gallerys as $gallery)
                    <div class="col-10 col-sm-6 col-md-4 col-lg-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ Storage::url($gallery->image) }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    @endforeach
                    <!-- Add more cards here for page 1 -->
                </div>
            </div>
            <section class="mx-auto mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="{{ $gallerys->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{ $gallerys->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>
        </section>
    </main>
    @include('footer')
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
