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
            <div class="login-page">
                <div class="row">
                    <div
                        class="col-lg-6 col-12 padding-t-48 bg-white pe-0 border-24 d-flex flex-column justify-content-between ">
                        <div class="padding-x-48">
                            <h6 class="fw-bold pb-3">ثبت نام در رند بازار</h6>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="col-12 col-lg-6 pl-5px">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">ایمیل</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="ایمیل خود را وارد کنید">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pr-5px">
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1" class="form-label">شماره موبایل</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            placeholder="شماره موبایل خود را وارد کنید">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">رمز عبور</label>
                                <div class="buttonInside">
                                    <input id="pwd" type="password" class="input-form form-control pwd"
                                        placeholder="پسوورد خود را وارد کنید">
                                    <a class="eyePassword " onclick="myFunction()">
                                        <i id="icon" class="bi bi-eye-fill"></i></a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">تایید رمز عبور</label>
                                <div class="buttonInside">
                                    <input id="pwd" type="password" class="input-form form-control pwd"
                                        placeholder="پسوورد خود را وارد کنید">
                                    <a class="eyePassword " onclick="myFunction()">
                                        <i id="icon" class="bi bi-eye-fill"></i></a>
                                </div>
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">کد امنیتی</label>
                                <div class="g-recaptcha brochure__form__captcha" data-sitekey="YOUR SITE KEY"></div>
                            </div>
                            <div class="">
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                    placeholder="متن فوق را در کادر زیر درج نمایید">
                            </div>
                            <div class="form-check mt-16 mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <span>
                                        قبول قوانین و مقررات
                                    </span>
                                    <a href="Terms.php">(مشاهده قوانین و مقررات)</a>
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="log-button col-12  ">ثبت نام</button>
                            </div>
                        </div>
                        <div class="newUserClick">
                            <span>قبلا ثبت نام کرده اید؟</span>
                            <a href="login-number.php">وارد شوید</a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block ps-0">
                        <div class="img-login">
                            <img src="assets/img/Group 16.png" class="border24" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>