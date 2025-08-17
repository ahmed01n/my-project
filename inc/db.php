<?php
// الاتصال بقاعدة البيانات
$conn = mysqli_connect('localhost', 'root', '', 'win');

// التحقق من الاتصال
if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}
