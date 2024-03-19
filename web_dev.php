<div class="projects-container d-flex w-100">
    <div class="col-md-4 col-lg-3 project-sidebar text-center">
        <hr class="mx-3">

        <div class="project-sidebar-inner">

            <div class="row pt-4">
                <h5>LANGUAGES</h5>
                <ul>
                    <li><i class="fa-solid fa-code text-end"></i><span>HTML</span></li>
                    <li><i class="fa-brands fa-css3-alt"></i><span>CSS</span></li>
                    <li><i class="fa-brands fa-js"></i><span>JavaScript</span></li>
                </ul>
            </div>
            <hr class="sidebar-divider mx-3 mt-4">
            <div class="row text-center pt-4">
                <h5>FRAMEWORKS / TOOLS</h5>
                <ul>
                    <li><i class="fa-brands fa-bootstrap"></i><span>Bootstrap</span></li>
                    <li><i class="fa-solid fa-dollar-sign"></i><span>jQuery</span></li>
                    <li><i class="fa-solid fa-database"></i><span>IndexedDB</span></li>
                </ul>
            </div>
            <hr class="sidebar-divider mx-3 mt-4">
            <div class="row text-center pt-4">
                <h5>HIGHLIGHTS</h5>
                <ul>
                    <li><i class="fa-solid fa-mobile-screen"></i><span>Responsive</span></li>
                    <li><i class="fa-solid fa-pen-to-square"></i><span>Modifiable</span></li>
                    <li><i class="fa-solid fa-floppy-disk"></i><span>Persistent Data</span></li>
                </ul>
            </div>
            <hr class=" sidebar-divider mx-3 mt-4">
        </div>
    </div>
    <div class="col-md-8 col-lg-9 project-main mx-auto p-5">
        <hr class="mx-3">
        <h3 class="project-title text-center">BOOK TRACKER</h3>
        <div class="project-links justify-content-center d-flex gap-4">
            <span>Check out on <a href="https://www.github.com/MattMiss/BookTracker" target="_blank">GitHub</a></span>
            <span>Try out <a href="mattmiss.greenriverdev.edu/booktracker" target="_blank">Book Tracker</a></span>
        </div>
        <hr class="mx-3">
        <div id="carouselExample" class="carousel slide p-4">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <p class="project-desc">Book Tracker is a web app that allows users to search for their favorite books via Google Books API. Results can
                            be viewed and saved to a list</p>
                        <button onclick="openImageXL('img/BookTracker/BookTrackerSearchResults.jpg')"><img src="img/BookTracker/BookTrackerSearchResults.jpg" class="d-block w-100" alt="..."></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <p class="project-desc">In addition, users can edit choices in order to add:</p>
                        <ul class="horizontal-list">
                            <li><i class="fa-solid fa-diamond"></i><span>USER RATING</span><i class="fa-solid fa-diamond"></i></li>
                            <li><i class="fa-solid fa-diamond"></i><span>DATES READ</span><i class="fa-solid fa-diamond"></i></li>
                            <li><i class="fa-solid fa-diamond"></i><span>CUSTOM GENRES</span><i class="fa-solid fa-diamond"></i></li>
                        </ul>
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <button onclick="openImageLG('img/BookTracker/BookTrackerSavedBook.jpg')"><img class="img-fluid" src="img/BookTracker/BookTrackerSavedBook.jpg" alt="Image of A Saved Book"></button>
                            </div>
                            <div class="col-md-6 p-5">
                                <button onclick="openImageLG('img/BookTracker/BookTrackerEditingBook.jpg')"><img class="img-fluid" src="img/BookTracker/BookTrackerEditingBook.jpg" alt="Image of An Editable Book"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <p class="project-desc">Choose between 3 different styles to view saved books.</p>
                        <h5 class="text-center">LIST VIEW</h5>
                        <button onclick="openImageXL('img/BookTracker/Books_ListView.jpg')"><img class="img-fluid" src="img/BookTracker/Books_ListView.jpg" alt="Image of a Book List View"></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <p class="project-desc">Choose between 3 different styles to view saved books.</p>
                        <h5 class="text-center">DETAIL VIEW</h5>
                        <button onclick="openImageXL('img/BookTracker/Books_DetailView.jpg')"><img class="img-fluid" src="img/BookTracker/Books_DetailView.jpg" alt="Image of a Book Details View"></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <p class="project-desc">Choose between 3 different styles to view saved books.</p>
                        <h5 class="text-center">CARD VIEW</h5>
                        <button onclick="openImageXL('img/BookTracker/Books_CardView.jpg')"><img class="img-fluid" src="img/BookTracker/Books_CardView.jpg" alt="Image of a Book Card View"></button>
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
    </div>
</div>