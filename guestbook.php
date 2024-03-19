<?php
session_start();

global $db_location;
global $cnxn;

$active = 'guestbook';
$title = 'Matt Miss - Guestbook';


include 'db_picker.php';
include $db_location;

$addEntrySuccess = false;

$sqlEntries = "SELECT * FROM guestbook WHERE approved = 1 ORDER BY id DESC";
$entriesResult = @mysqli_query($cnxn, $sqlEntries);


// soft deletes a database entry
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["submit-from"] == "guestbook" && $_POST['randcheck'] == $_SESSION['rand']) {
        $rand = $_SESSION['rand'];
        // Get Name and Comment from Inputs
        $name = trim($_POST['entry-name']);
        $comment = trim($_POST['entry-comment']);
        $name = strip_tags(filter_var($name, FILTER_SANITIZE_ADD_SLASHES));
        $comment = strip_tags(filter_var($comment, FILTER_SANITIZE_ADD_SLASHES));

        // Add entry into Guestbook table (auto sets 'approved' = 0, so it won't show up immediately)
        $sqlAddEntry = "INSERT INTO `guestbook` (`name`, `comment`, `specialKey`) VALUES ('$name', '$comment', '$rand')";
        $addEntrySuccess = @mysqli_query($cnxn, $sqlAddEntry);

        // Create email from values
        $to = "Matt Miss<matt.w.miss@gmail.com>";
        $subject = "New Guestbook Entry At www.mattmiss.greenriver.edu!";
        $from = 'My Portfolio <admin@mattmiss.greenriver.edu>';
        $headers = 'From: ' . $from . "\r\n" .
            'Content-Type: text/html; charset=UTF-8\r\n' .
            'X-Mailer: PHP/' . phpversion();

        $message = $name . " has left the following guestbook entry: " . $comment . " <span><a href='https://mattmiss.greenriverdev.com/guestbook_process.php?key={$rand}&approve=1'>APPROVE</a> this entry or <a href='https://mattmiss.greenriverdev.com/guestbook_process.php?key={$rand}&approve=-1'>DELETE</a> this entry permanently from the database</span>";

        // Try to send email. Tell user message was sent if mail() returns true
        if (mail($to, $subject, $message, $headers)){
            // redirect to self
            header('https://mattmiss.greenriverdev.com/guestbook.php');
        }else{
            echo "<h3>There was a problem.</h3>";
        }
    }
}
include 'header.php';
include 'navbar.php';
?>

<main>
    <div class="guestbook p-3 mx-auto">
        <?php if ($addEntrySuccess) {
            echo '<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
                        <i class="fa-regular fa-circle-check"></i>
                        <div>Thank you for your comment! Once it is approved, it will show up in the guestbook.</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        }
        ?>
        <h3 class="text-center p-3">Leave a Comment</h3>
        <div class="d-flex justify-content-center pb-4">
            <button type="button" class="submit-btn px-3 py-2" data-bs-toggle="modal" data-bs-target="#guestbook-entry-modal">ADD COMMENT</button>
        </div>
        <div class="guestbook-list d-flex flex-column gap-4 p-5 align-items-center">
            <?php
                while($row = mysqli_fetch_assoc($entriesResult)){
                    $name = $row['name'];
                    $comment = $row['comment'];

                    echo "  <div class='guestbook-entry p-4 col-10 col-md-8'>
                                <h4 class='pb-2'>$name</h4>
                                <p>$comment</p>
                            </div>";
                }
            ?>
        </div>
    </div>


</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<!-- Add Guestbook Entry Modal -->
<div class="modal fade" id="guestbook-entry-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD A COMMENT</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="error-msg text-center">Your comment will show up once it has been approved!</div>
                <form method="POST" action="#" name="contact" class="my-3 h-100">
                    <?php
                    // Set a random variable to ensure form can be submitted only once
                    $rand = rand();
                    $_SESSION['rand'] = $rand;
                    ?>
                    <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                    <input type='hidden' value='guestbook' name='submit-from'>
                    <div class="mb-4">
                        <label for="entry-name" class="form-label">NAME*</label>
                        <input type="text" class="form-control" id="entry-name" name="entry-name" required>
                    </div>

                    <div class="mb-4">
                        <label for="entry-comment" class="form-label">MESSAGE*</label>
                        <textarea class="form-control" id="entry-comment" name="entry-comment" placeholder="Type your message here..." rows="4" required></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type='button' class='cancel-btn px-3 py-2' data-bs-dismiss='modal'>Cancel</button>
                        <button type='submit' class='submit-btn px-3 py-2'>Submit Entry</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

<?php

include 'footer.php';

