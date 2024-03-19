<?php
session_start();
global $db_location;
global $cnxn;

$key = 0;
$approve = '0';

if (isset($_GET['key']) && isset($_GET['approve'])){
    $key = $_GET['key'];
    $approve = $_GET['approve'];
}

include 'header.php';
include 'navbar.php';

include 'db_picker.php';
include $db_location;

$addEntry = false;
$removeEntry = false;
$entriesResult = null;

$sqlProcessEntry = "";
if ($approve == 1){
    $sqlProcessEntry = "UPDATE `guestbook` SET `approved` = 1, `specialKey` = 0 WHERE `specialKey` = '$key'";
    $addEntry = true;
}else if ($approve == -1){
    $sqlProcessEntry = "DELETE FROM `guestbook` WHERE `specialKey` = '$key'";
    $removeEntry = true;
}

if ($approve != 0){
    $entriesResult = @mysqli_query($cnxn, $sqlProcessEntry);
}
?>

<main>

<?php
if ($entriesResult){
    if ($addEntry){
        echo "<h2 class='guestbook-process-msg mx-auto'>New Guestbook Entry has been added!</h2>";
    }else if ($removeEntry){
        echo "<h2 class='guestbook-process-msg mx-auto'>Guestbook Entry has been permanently deleted!</h2>";
    }
}else{
    echo "<h2 class='guestbook-process-msg mx-auto'>Something went wrong! Entry wasn't updated.</h2>";
}
?>
</main>

<?php
include 'footer.php';