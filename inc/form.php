<?php
// استدعاء ملف الاتصال بقاعدة البيانات
include 'db.php';

// تعريف المتغيرات المبدئية (عشان نتجنب الـ Warning لو الفورم ما اتبعتش)
$firstname = $_POST['firstname'] ?? '';
$lastname  = $_POST['lastname'] ?? '';
$email     = $_POST['email'] ?? '';

// مصفوفة لتخزين الأخطاء الخاصة بكل حقل
$errors = [
    'firstnameerror' => '',
    'lastnameerror'  => '',
    'emailerror'     => '',
];

// التحقق إذا تم إرسال الفورم
if (isset($_POST['submit'])) {

    // تنظيف القيم المدخلة من أي رموز خاصة لتجنب الـ SQL Injection
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname  = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);

    // التحقق من الحقول الفارغة
    if (empty($firstname)) {
        $errors['firstnameerror'] = 'يرجي ادخال الاسم الاول';
    }
    if (empty($lastname)) {
        $errors['lastnameerror'] = 'يرجي ادخال الاسم الاخير';
    }
    if (empty($email)) {
        $errors['emailerror'] = 'يرجي ادخال الايميل';
    }
    // التحقق من صحة الإيميل إذا كان مكتوب
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailerror'] = 'يرجي ادخال الايميل الصحيح';
    }

    // لو مفيش أي أخطاء → إدخال البيانات في قاعدة البيانات
    if (!array_filter($errors)) {
        $sql = "INSERT INTO users (firstname, lastname, email) 
                VALUES ('$firstname', '$lastname', '$email')";

        if (mysqli_query($conn, $sql)) {
            // إعادة التوجيه للصفحة الرئيسية بعد نجاح الإضافة
            header('Location:' . $_SERVER['PHP_SELF'] );
            exit;
        } else {
            // عرض خطأ لو الاستعلام فشل
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
}
?>
