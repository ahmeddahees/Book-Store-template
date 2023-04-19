<?php
$sqlDB = mysqli_connect("localhost", "root", "", "book-store");
if (!$sqlDB) {
    echo mysqli_connect_error();
}
