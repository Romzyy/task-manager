<?php
if(isset($_GET['download'])){
    
    require_once 'DatabaseDownloader.php';

    $downloader = new DatabaseDownloader();

    $downloader->downloadDatabaseDump();
}
?>
