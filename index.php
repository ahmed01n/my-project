<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
 include_once './parts/header.php'; 
 include_once './parts/footer.php'; 

?>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <div class="col-md-5 p-lg-5 mx-auto ">
<img src="images/banar.webp" alt="">
   <h1 class="display-4 fw-normal">كالقابض علي الجمر</h1>
                  <h3 id="countdown"></h3>

   <p class="lead fw-normal">باقي علي فتح التسجيل ايام معدوده </p>

      <p class="lead fw-normal">سارع في التسجيل لزياده فرصة قبولك</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>

    <div class="container">
      <h3>للدخول في السحب يرجي اتباع التعليمات:-</h3>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث ع الصفحه الرئيسيه علي الفيسبوك</li>
  <li class="list-group-item">سيكون مدة البث 1 ساعه</li>
  <li class="list-group-item"> خلال فترة البث سيتم السحب  </li>
  <li class="list-group-item">بنهاية البث سيتم اختيار شخص بشكل عشوائي  </li>
  <li class="list-group-item">الفائز سيحصل علي دوره في مجال اختبار الاختراق  مجانا</li>
</ul>
</div>
        </div>



   <div class = "container">

<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

   <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
 method="POST">
    <h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstnameerror'] ?></div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastnameerror'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailerror'] ?></div>
  </div>

  
<button type="submit" name="submit" class="btn btn-primary">تأكيد</button>
</form>
    </div>
    </div>
</div>






<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5">

   <button type="button"id ="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
اختيار الرابح    </button>
</div>



<!-- Modal -->

<div class="modal fade" id="Modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">الرابح 🎉</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($users as $user) : ?>
          <h5 class  =" display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) .''. htmlspecialchars($user['lastname']); ?></h5>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>






