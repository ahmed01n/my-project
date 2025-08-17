
var countDownDate = new Date("Jan 25, 2026 15:37:25").getTime();
  var x = setInterval(function() {
  var counter=   document.querySelector("#countdown");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
counter .innerHTML = days + "يوم " + hours + "ساعه "
  + minutes + "دقيقه " + seconds + "ثانيه ";
  if (distance < 0) {
    clearInterval(x);
   counter .innerHTML = "لقد انتهت مدة التسجيل";
  }
}, 1000);



//برمجيه اختيار الرابح 

  
document.addEventListener("DOMContentLoaded", function () {
  console.log("✅ ملف script.js اشتغل");

  const win = document.querySelector("#winner");
  const modalElement = document.getElementById("Modal");

  if (!win) {
    console.error("❌ الزرار #winner مش موجود");
    return;
  }
  if (!modalElement) {
    console.error("❌ المودال #Modal مش موجود");
    return;
  }

  var myModal = new bootstrap.Modal(modalElement, {
    keyboard: false
  });

  win.addEventListener("click", function () {
    console.log("🔘 تم الضغط على الزرار");

    setTimeout(function () {
      console.log("📢 فتح المودال بعد 3 ثواني");
      myModal.show();
    }, 2000);
  });
});

  


