<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>cart page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/products.css" />
    <link rel="stylesheet" href="../css/book.css" />

    <link rel="stylesheet" href="../css/cart.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../css/app.css" rel="stylesheet" />






</head>

<body dir="rtl">
    <!-- header start -->
    <header>

        <div class="section-list">
            <nav>
                <ul class="header-items">
                    <div class="header-item">
                        <img src="../images/svgs/person.svg" alt="person icon" style="width: 20px; height: 20px" />
                        <li>
                            <a href="#">
                                <span class="show-signup-model" onclick="show_signup_model_fun()">
                                    سجل الان</span>
                                <span>أو</span>
                                <span class="show-login-model" onclick="show_login_model_fun()">ادخل لحسابك</span>
                            </a>
                        </li>
                    </div>
                    <div class="header-item">
                        <img src="../images/svgs/mainPage.svg" alt="star icon" style="width: 20px; height: 20px" />
                        <li><a href="../index">الرئيسية</a></li>
                    </div>
                    <div class="header-item">
                        <img src="../images/svgs/whoAreWe.svg" alt="who are we policy icon"
                            style="width: 20px; height: 20px" />
                        <li><a href="#">من نحن</a></li>
                    </div>
                    <div class="header-item">
                        <img src="../images/svgs/callUs.svg" alt="call Usicon" style="width: 20px; height: 20px" />
                        <li><a href="#">اتصل بنا</a></li>
                    </div>
                    <div class="header-item">
                        <img src="../images/svgs/help.svg" alt="help icon" style="width: 20px; height: 20px" />
                        <li><a href="#">المساعدة</a></li>
                    </div>
                    <div class="header-item">
                        <img src="../images/svgs/privacyPolicy.svg" alt="privacy policy icon"
                            style="width: 20px; height: 20px" />
                        <li><a href="#">سياسةالخصوصية</a></li>
                    </div>
                    <div class="header-item">
                        <img src="../images/svgs/saudia.svg" alt="country icon" style="width: 20px; height: 20px" />
                        <li><a href="#">اليمن</a></li>
                        <li><a dir="ltr" href="#">YER</a></li>
                    </div>
                    <div dir="ltr" class="header-item">
                        <img src="../images/svgs/EnglishArabic.svg" alt="English to arabic icon"
                            style="width: 20px; height: 20px" />
                        <li>English</li>
                    </div>
                </ul>
                <label id="sandwish">
                    <img src="../images/svgs/sandwish.svg" style="width: 20px" alt="" />
                </label>
                <!-- <label id="close-nav">
            <img src="../images/svgs/xsandwish.svg" style="width: 20px" alt="" />
          </label> -->
            </nav>
        </div>
        <div class="search-header">
            <a class="logo" href="index">
                <img src="../images/svgs/logo.svg" alt="" style="width: 180px; height: 50px" />
            </a>
            <div class="search-section">

                <form action="" method="get">
                    <div class="search-bar">
                        <input id="search" name="search" placeholder="البحث" type="text" />
                        <div class="search-icon">
                            <img src="../images/svgs/search.svg" alt="" style="width: 20px; height: 20px" />

                        </div>
                    </div>
                </form>


                <a class="basket" href="cart">
                    <img src="../images/svgs/red-basket.svg" style="width: 35px; height: 35px" alt="red basket" />
                    <div class="button__badge">
                        <div class="badge">0</div>
                    </div>
                </a>
                <div class="change-language">
                    <button onclick='changeLanguage("en")'>English</button>
                    <button onclick='changeLanguage("ar")'>عربي</button>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <?php echo $content ?>

    <!-- signup and login start -->
    <section>
        <div class="signup-model">
            <!-- login and sign up section start -->
            <div class="login-signup">
                <div class="signup">
                    <div class="exit" onclick="exit_fun()">
                        <img src="../images/svgs/x.svg
              " style="width: 20px" alt="" />
                    </div>
                    <h1 class="login-title">إنشاء حساب</h1>
                    <form id="signup-form" class="signup-form" method="post" action="/signup">
                        <div class="two-input">
                            <div class="input-wrap">
                                <input name="number" type="tel" />
                                <label for="number">رقم الجوال</label>
                            </div>
                            <div class="input-wrap">
                                <label for="">رمز البلد</label>
                                <select>
                                    <option>+967</option>
                                    <option>+966</option>
                                </select>
                            </div>
                        </div>
                        <p>سوف نرسل لك رمز التحقق عن طريق رسالة نصية</p>

                        <div class="input-wrap">
                            <label for="varification">ارسال رمز التحقق</label>
                            <input type="text" name="varification" />
                        </div>

                        <div class="input-wrap">
                            <label for="name">الاسم الاول</label>
                            <input type="text" name="name" ?> />
                        </div>

                        <div class="input-wrap">
                            <label for="password">اسم العائله</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="input-wrap">
                            <label for="email">البريد الالكتروني</label>
                            <input type="text" name="email" />
                        </div>

                        <div class="input-wrap">
                            <label for="re-email">تاكيد البريد الالكتروني</label>
                            <input type="email" name="re-email" />
                        </div>
                        <div class="input-wrap">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="checkbox-div">
                            <input type="checkbox" />
                            <p>أوافق على الشروط والأحكام</p>
                        </div>
                        <div class="checkbox-div">
                            <input type="checkbox" />

                            <p>التسجيل للانضمام للنشرة البريدية</p>
                        </div>


                        <button type="submit" name="submit" value="Submit">انشاء حساب</button>
                    </form>
                </div>
            </div>
            <!-- login and sign up section  end -->
        </div>



        <div class="login-model">
            <div class="login-signup">
                <div class="login">
                    <div class="exit" onclick="exit_fun()">
                        <img src="../images/svgs/x.svg
              " style="width: 20px" alt="" />
                    </div>
                    <h1 class="login-title">تسجيل الدخول</h1>
                    <form id="login-form" class="login-form" method="post" action="/login">
                        <div class="input-wrap">
                            <input name="email" type="email" title="البريد الالكتروني أو رقم الجوال" />
                            <label for="email">البريد الالكتروني أو رقم الجوال</label>
                        </div>
                        <div class="input-wrap">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" />
                            <p class="forget">نسيت؟</p>
                        </div>

                        <button type="submit" name="submit" value="Submit">تسجيل الدخول</button>
                    </form>

                    <div class="go-to-signup">
                        <p>ليس لديك حساب؟</p>
                        <p class="new-account-button">انشاء حساب جديد</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup and login end -->



    <!-- footer start -->
    <footer>
        <div class="footer-lists">
            <div class="container">
                <ul class="footer__nav" dir="rtl">
                    <li class="nav__item">
                        <h2 class="nav__title">انضم الى نشرتنا البريدية</h2>
                        <form>
                            <input id="icon" type="text" disabled placeholder="ادخل البريد الابكتروني" />
                            <button class="footer__btn" dir="ltr">اشتراك</button>
                        </form>
                        <h2 class="nav__title">تواصل معنا</h2>

                        <ul class="nav__ul pages_links">
                            <li>
                                <a href="#">
                                    <img src="../images/svgs/facebook.svg" style="width: 20px; height: 20px"
                                        alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../images/svgs/twitter.svg" style="width: 20px; height: 20px"
                                        alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../images/svgs/youtube.svg" style="width: 20px; height: 20px"
                                        alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../images/svgs/linkedin.svg" style="width: 20px; height: 20px"
                                        alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../images/svgs/sanpchat.svg" style="width: 20px; height: 20px"
                                        alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../images/svgs/tiktok.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">خدمة العملاء</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">مبيعات الشركات</a>
                            </li>

                            <li>
                                <a href="#">الأسئلة المتكرر</a>
                            </li>

                            <li>
                                <a href="#">دليل التسوق والمطبوعات</a>
                            </li>

                            <li>
                                <a href="#">مواقع المعارض</a>
                            </li>

                            <li>
                                <a href="#">سياسةالضمان</a>
                            </li>

                            <li>
                                <a href="#">سياسة الاسترجاع والاستبدال</a>
                            </li>
                            <li>
                                <a href="#">اتصل بنا </a>
                                <p>920000089</p>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">خدمات جرير</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">خدمة تقسيط المشتريات</a>
                            </li>

                            <li>
                                <a href="#">خدمات مابعد البيع</a>
                            </li>

                            <li>
                                <a href="#">خدمة الحماية الشاملة</a>
                            </li>
                            <li>
                                <a href="#">خدمة أجهزة ابل</a>
                            </li>

                            <li>
                                <a href="#">بطاقة خصم جرير</a>
                            </li>

                            <li>
                                <a href="#">بطاقة جرير للهدايا</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">روابط سريعة</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">اصدارات جرير</a>
                            </li>

                            <li>
                                <a href="#">قارئ جرير</a>
                            </li>

                            <li>
                                <a href="#">شركاء برامج المكافئات</a>
                            </li>
                            <li>
                                <a href="#">خدمات شركات الاتصالات</a>
                            </li>

                            <li>
                                <a href="#">بطاقة خصم جرير</a>
                            </li>

                            <li>
                                <a href="#">بطاقة جرير للهدايا</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">عن جرير</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">من نحن</a>
                            </li>

                            <li>
                                <a href="#">الحوكمة</a>
                            </li>

                            <li>
                                <a href="#">علاقات المستثمرين والتقارير</a>
                            </li>
                            <li>
                                <a href="#">الاستدامة</a>
                            </li>

                            <li>
                                <a href="#">الأخبار</a>
                            </li>
                        </ul>
                        <h2 class="nav__title">فرص العمل</h2>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="footer-copy-write">
                <div class="copy-write">
                    <p>سياسة الخصوصية | شروط الخدمة</p>
                    <p>
                        جميع الحقوق محفوظة لمكتبة جرير<span>&copy;</span> 2015. س.ت.
                        1010032264. اونلاين س.ت. 1010654213
                    </p>
                </div>
                <div dir="rtl" class="payment-options">
                    <img src="../images/American-Express-Logo.png" alt="" />
                    <img src="../images/Mastercard-logo.svg.png" alt="" />
                    <img src="../images/Visa-Logo.png" alt="" />
                    <img src="../images/1024px-Mada_Logo.svg.png" alt="" />
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <script src="../js/scripts.js"></script>

    <script src="../js/cart.js"></script>
    <script src="../js/checkout.js"></script>

</body>

</html>