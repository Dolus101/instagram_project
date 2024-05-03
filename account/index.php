<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <!-- BS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
</head>

<body>
    <div class="container-fluid container-body">
        <div class="sidebar sticky-top">
            <div class="container aside">
                <?php
                include("../sidebar/sidebar.php")
                ?>
            </div>
        </div>
        <div class="containe body-content">
            <div class="center-body">
                <div class="story">
                    <ul class="mx-auto">
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                        <li>
                            <div class="story-profile"></div>
                            <span class="ms-2">Dizon</span>
                        </li>
                    </ul>
                </div>
                <div class="post mx-auto mt-4">
                    <div class="user_profile ms-1">
                        <img src="../image/profile/samplepic.jpg" alt="user_profile" class="img_fluid profiles">
                        <span class="username">col3.trinity</span>
                    </div>
                    <div class="post-img mt-2">
                        <img src="../image/post/test.jpg" alt="">
                    </div>
                    <div class="react mt-2">
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-comment fa-flip-horizontal"></i>
                    </div>
                    <div class="likes bold mt-2">
                        <span class="count-likes">0</span> likes
                    </div>
                    <div class="msg-container mt-1">
                        <span class="username1">col3.trinity</span>
                        <span class="msg"> TEST HERE </span>
                    </div>
                    <div class="comment">
                        <textarea name="" id="" placeholder="Add a comment.."></textarea>
                        <span class="comment-react"><i class="fa-regular fa-face-smile"></i></span>
                    </div>
                    <hr>
                </div>
                <div class="post mx-auto mt-4">
                    <div class="user_profile ms-1">
                        <img src="../image/profile/samplepic.jpg" alt="user_profile" class="img_fluid profiles">
                        <span class="username">col3.trinity</span>
                    </div>
                    <div class="post-img mt-2">
                        <img src="../image/post/test.jpg" alt="">
                    </div>
                    <div class="react mt-2">
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-comment fa-flip-horizontal"></i>
                    </div>
                    <div class="likes bold mt-2">
                        <span class="count-likes">0</span> likes
                    </div>
                    <div class="msg-container mt-1">
                        <span class="username1">col3.trinity</span>
                        <span class="msg"> TEST HERE </span>
                    </div>
                    <div class="comment">
                        <textarea name="" id="" placeholder="Add a comment.."></textarea>
                        <span class="comment-react"><i class="fa-regular fa-face-smile"></i></span>
                    </div>
                    <hr>
                </div>

            </div>


            <!-- FOOTER -->
            <footer class="text-center mt-5">
                <a href="">Meta</a>
                <a href="">About</a>
                <a href="">Blog</a>
                <a href="">Jobs</a>
                <a href="">Help</a>
                <a href="">API</a>
                <a href="">Privacy</a>
                <a href="">Terms</a>
                <a href="">location</a>
                <a href="">Instragram Lite</a>
                <a href="">Threads</a>
                <a href="">Contact Uploading & Non-Users</a>
                <a href="">Meta Verified</a>

                <div class="contianer mt-2 copyright">
                    <select aria-label="Switch Display Language" class="">
                        <option value="af">Afrikaans</option>
                        <option value="ar">العربية</option>
                        <option value="cs">Čeština</option>
                        <option value="da">Dansk</option>
                        <option value="de">Deutsch</option>
                        <option value="el">Ελληνικά</option>
                        <option value="en">English</option>
                        <option value="en-gb">English (UK)</option>
                        <option value="es">Español (España)</option>
                        <option value="es-la">Español</option>
                        <option value="fa">فارسی</option>
                        <option value="fi">Suomi</option>
                        <option value="fr">Français</option>
                        <option value="he">עברית</option>
                        <option value="id">Bahasa Indonesia</option>
                        <option value="it">Italiano</option>
                        <option value="ja">日本語</option>
                        <option value="ko">한국어</option>
                        <option value="ms">Bahasa Melayu</option>
                        <option value="nb">Norsk</option>
                        <option value="nl">Nederlands</option>
                        <option value="pl">Polski</option>
                        <option value="pt-br">Português (Brasil)</option>
                        <option value="pt">Português (Portugal)</option>
                        <option value="ru">Русский</option>
                        <option value="sv">Svenska</option>
                        <option value="th">ภาษาไทย</option>
                        <option value="tl">Filipino</option>
                        <option value="tr">Türkçe</option>
                        <option value="zh-cn">中文(简体)</option>
                        <option value="zh-tw">中文(台灣)</option>
                        <option value="bn">বাংলা</option>
                        <option value="gu">ગુજરાતી</option>
                        <option value="hi">हिन्दी</option>
                        <option value="hr">Hrvatski</option>
                        <option value="hu">Magyar</option>
                        <option value="kn">ಕನ್ನಡ</option>
                        <option value="ml">മലയാളം</option>
                        <option value="mr">मराठी</option>
                        <option value="ne">नेपाली</option>
                        <option value="pa">ਪੰਜਾਬੀ</option>
                        <option value="si">සිංහල</option>
                        <option value="sk">Slovenčina</option>
                        <option value="ta">தமிழ்</option>
                        <option value="te">తెలుగు</option>
                        <option value="ur">اردو</option>
                        <option value="vi">Tiếng Việt</option>
                        <option value="zh-hk">中文(香港)</option>
                        <option value="bg">Български</option>
                        <option value="fr-ca">Français (Canada)</option>
                        <option value="ro">Română</option>
                        <option value="sr">Српски</option>
                        <option value="uk">Українська</option>
                    </select>

                    © 2024 Instagram from Meta

                </div>
            </footer>
        </div>
        <div class="container friend-suggest">
            <div class="users-suggest-profile mt-4 d-flex">
                <img src="../image/profile/samplepic.jpg" alt="" class="img-fluid users-profile">
                <div class="user_name flex-column">
                    <div class="my_user"><span>col3.trinity</span></div>
                    <div class="my_name"><span>Nicole Franz Dizon</span></div>
                </div>
                <div class="my_switch"><span>Switch</span></div>
            </div>
            <div class="suggested-word d-flex">
                <span class="first">Suggested for you</span>
                <span class="seall">See All</span>
            </div>
            <div class="suggested-people d-flex">
                <img src="../image/profile/samplepic.jpg" alt="" class="img-fluid users-profile">
                <div class="user_name flex-column">
                    <div class="my_user"><span>col3.trinity</span></div>
                    <div class="my_name"><span>Nicole Franz Dizon</span></div>
                </div>
                <div class="my_switch"><span>Follow</span></div>
            </div>
            <div class="suggested-people d-flex">
                <img src="../image/profile/samplepic.jpg" alt="" class="img-fluid users-profile">
                <div class="user_name flex-column">
                    <div class="my_user"><span>col3.trinity</span></div>
                    <div class="my_name"><span>Nicole Franz Dizon</span></div>
                </div>
                <div class="my_switch"><span>Follow</span></div>
            </div>
            <div class="suggested-people d-flex">
                <img src="../image/profile/samplepic.jpg" alt="" class="img-fluid users-profile">
                <div class="user_name flex-column">
                    <div class="my_user"><span>col3.trinity</span></div>
                    <div class="my_name"><span>Nicole Franz Dizon</span></div>
                </div>
                <div class="my_switch"><span>Follow</span></div>
            </div>
            <footer class="suggested-footer mt-5">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Press</a></li>
                    <li><a href="">Api</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Terms Lite</a></li>
                    <li><a href="">Locations</a></li>
                    <li><a href="">Language</a></li>
                    <li><a href="">Meta Verified</a></li>
                </ul>

                <div class="contianer mt-2 copyright">

                    © 2024 Instagram from Meta

                </div>
            </footer>
        </div>
    </div>
    <!-- BS JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>