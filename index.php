<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sergey Plotnikov</title>
</head>
<body>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sergey Plotnikov</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div id="header">
    <ul id="nav">
        <li>
            <a href="http://sergeyplotnikov.ru" title="Вернуться на главную страницу">Главная</a>
        </li>
        <li>
            <a href="#" title="Что мы можем для вас сделать">Макеты</a>
            <ul>
                <li><a href="My_works/test1/index.html" target="_blank">Шаблон1</a></li>
                <li><a href="My_works/test2/index.html" target="_blank">Шаблон2</a></li>
                <li><a href="My_works/test3/index.html" target="_blank">Шаблон3</a></li>
                <li><a href="My_works/test4/index.html" target="_blank">Шаблон4</a></li>
                <li><a href="My_works/test5/index.html" target="_blank">Шаблон5</a></li>
                <li><a href="My_works/test6/index.html" target="_blank">Шаблон6</a></li>
                <li><a href="My_works/test7/index.html" target="_blank">Шаблон7</a></li>
            </ul>
        </li>
        <li>
            <a href="https://github.com/SerPstrong/" target="_blank" title="My github">Github</a>
        </li>
    </ul>

</div>

<div id="content">
    <h1>Website of Sergey Plotnikov's portfolio</h1>
    <div id="center">
        <img src="img/plotnikov.jpg" alt="Сергей Плотников">

        <details class="order">
            <summary>заказать разработку сайта</summary>
            <div class="form__mail">
                <form class="title_work_form" action="send.php" method="post">
                    <span class="title_work__name">Ваше имя:</span><input type="text" name="first_name" required
                                                                          placeholder="Обязательное поле"><br>
                    <span class="title_work__name">Email:</span><input type="text" name="email" required
                                                                       placeholder="Обязательное поле"><br>
                    <span class="title_work__name">Телефон:</span><input type="text" name="phone" required
                                                                         placeholder="Обязательное поле"><br>
                    <div class="g-recaptcha" data-sitekey="6LfZ1ngUAAAAALcBs315TaDDffr5Ry0bQ_FZfapR"></div>
                    <input class="formButton" type="submit" name="submit" value="Отправить">
                </form>
            </div>
        </details>


    </div>

    <div class="flex_frame" style="display: none">
        <div class="frame_wrap">
            <iframe class="frame" src="https://serpstrong.github.io/kordon"></iframe>
        </div>
        <div class="frame_wrap">
            <iframe class="frame" src="My_works/test1"></iframe>
        </div>
        <div class="frame_wrap">
            <iframe class="frame" src="My_works/test2"></iframe>
        </div>
        <div class="frame_wrap">
            <iframe class="frame" src="My_works/test3"></iframe>
        </div>
        <div class="frame_wrap">
            <iframe class="frame" src="My_works/test4"></iframe>
        </div>
        <div class="frame_wrap">
            <iframe class="frame" src="My_works/test5"></iframe>
        </div>
        <div class="frame_wrap">
            <iframe class="frame" src="My_works/test6"></iframe>
        </div>
    </div>
</div>

<div id="footer">
    <div class="footer__container">
        <div class="footer__phone">
            <div class="footer-container__block"><i class=" fas fa-phone"></i> <a class="footer-container__contact"
                                                                                  href="tel:+7 (999) 563-71-98">+7 (999)
                563-71-98</a></div>
            <div class="footer-container__block"><i class=" far fa-envelope-open
        "></i> <a class="footer-container__contact" href="mailto:segap@segap.ru">segap@segap.ru</a></div>
        </div>
        Copyright ©
        <div class="date-footer">ЗАГРУЗКА...</div>
        <a class="footer_social" href="https://vk.com/serpstrong" target="_blank"><i class="fab fa-vk"></i></a>
        <a class="footer_social" href="https://www.facebook.com/serpstrong" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
        <a class="footer_social" href="https://twitter.com/serplstrong" target="_blank"><i
                class="fab fa-twitter"></i></a>
        <a class="footer_social" href="https://www.instagram.com/serpstrong" target="_blank"><i
                class="fab fa-instagram"></i></a>
        <a class="footer_social" href="https://github.com/SerPstrong/" target="_blank"><i class="fab fa-github"></i></a>
    </div>
</div>

<script>
    function sec() {
        let today = new Date().toLocaleDateString();
        let todayTime = new Date().toLocaleTimeString();
        document.querySelector('.date-footer').innerHTML = `${today} ${todayTime}`;
    }
    setInterval(sec, 1000);
</script>

</body>
</html>
