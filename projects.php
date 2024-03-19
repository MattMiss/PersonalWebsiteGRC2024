<?php
$active = 'projects';
$title = 'Matt Miss - Projects';
include 'header.php';
include 'navbar.php';
?>
<main>
    <?php include 'web_dev.php' ?>
</main>
<!-- XL Modal -->
<div class="modal fade" id="image-modal-xl" tabindex="-1" aria-labelledby="image-modal-xl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <img id="image-modal-img-xl" class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>
</div>

<!-- L Modal -->
<div class="modal fade" id="image-modal-lg" tabindex="-1" aria-labelledby="image-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img id="image-modal-img-lg" class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js/carousel.js"></script>
<?php
include 'footer.php';