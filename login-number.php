<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <main>
        <div class="container p-con-96-117">
            <form class="login-page" action="#"> 
                <div class="row">
                    <div class="col-lg-6 col-12 padding-t-48 bg-white pe-0 border-24 d-flex flex-column justify-content-between">
                        <div class="padding-x-48">
                            <h6 class="fw-bold pb-3">ورود به رند بازار</h6>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">شماره موبایل</label>
                                <input type="tel" class="form-control text-center" id="phone-number" 
                                    placeholder="شماره موبایل خود را وارد کنید(09121234567)" maxlength="11" minlength="11" required pattern="[0-9]{11}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">کد یکبار مصرف</label>
                                <input type="tel" class="form-control text-center" id="code"
                                    placeholder="کد یکبار مصرف خود را وارد کنید">
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">کد امنیتی</label>
                                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LdxAJskAAAAAGyC0GFBawqfrD3lFMQvcpFNZ1zC"></div>
                            </div>
                            
                            <div>
                                <button onclick="startTimer(this)" class="log-button col-12" type="button" >دریافت کد یکبار مصرف</button>
                                <div class="timer d-none mt-2">
                                    ارسال مجدد بعد از:‌
                                    <span class="timer-time px-2"></span>
                                    ثانیه
                                </div>
                                <button type="submit"  class="send-code col-12 d-block text-center">ورود به سایت</button>
                            </div>
                        </div>
                        <div class="newUserClick">
                            <span>کاربر جدید هستید؟</span>
                            <a href="register.php">ثبت نام</a>
                        </div>
                    </div>
                    <div class="error">لطفا همه موارد لازم را بدرستی کامل کنید</div>

                    <div class="col-lg-6 d-none d-lg-block ps-0">
                        <div class="img-login">
                            <img src="assets/img/Group 16.png" class="border24" alt="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login-phone.js"></script>
</body>

</html>