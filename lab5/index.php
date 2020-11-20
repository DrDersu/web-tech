<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Домашняя страница</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body style="background:#8b7f5596; ">
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center bg-light"
             style="border-bottom-right-radius: 9px; border-bottom-left-radius: 9px;">
            <div class="col-8 d-flex   align-items-center">
                <img src="image/vsrk.png" style="width: 60px; height: 60px;">
                <a href="index.php " style="text-decoration: none; color: black">
                    <h1 class="display-4 pl-2 pt-2 " style="font-family: Arial; font-weight: bold  ">Военный учет
                        студентов</h1></a>
            </div>
            <div class="col-4 ">
                <form action="search.php" method="post" class="d-flex ">
                    <input type="text" class="form-control border-dark" name="search_area">
                    <button class="btn btn-outline-dark" style="width: 50px" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-0" role="img"
                             viewBox="0 0 24 24" focusable="false"><title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <path d="M21 21l-5.2-5.2"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <div class="nav-scroller py-1 mb-2 bg-light">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-dark" href="register.php" style="font-weight: bold">Регистрация военнообязанных</a><br>
            <a class="p-2 text-dark" href="edit_db.php" style="font-weight: bold">Внесение изменении</a><br>
            <a class="p-2 text-dark " href="students_list.php" style="font-weight: bold">Список студентов</a>
            <a class="p-2 text-dark" href="spravka.php" style="font-weight: bold">Оформление справки</a>
            <a class="p-2 text-dark" href="contacts.php" style="font-weight: bold">Контакты</a>
        </nav>
    </div>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background:url(image/jtsvj.jpg);">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Защита Республики Казахстан является священным долгом и обязанностью
                каждого ее гражданина</h1>
            <p class="lead my-3">Конституция РК cтатья 36</p>
            <p class="lead mb-0"><a href="register.php" class="btn btn-outline-light p-3">Bстать на воинский учет...</a>
            </p>
        </div>
    </div>
</div>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main bg-light rounded">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                Постановка и снятие с воинского учета военнообязанных и призывников
            </h3>
            <div class="blog-post">
                <h2 class="blog-post-title">Воинский учет</h2>
                <p>
                    На основании Приказа Министра обороны Республики Казахстан от 24 января 2017 года № 28 «Об
                    утверждении Правил воинского учета военнообязанных и призывников» воинский учет военнообязанных и
                    призывников осуществляется по месту их жительства или временного пребывания (на срок более трех
                    месяцев) .</p>
                <hr>
                <p>После зачисления в Международный Университет Информационных Технологий иногородним студентам
                    необходимо сняться с воинского учета в военкомате по месту жительства. И в <span
                            class="text-primary">течение семи рабочих дней  студент обязан встать на &nbsp;<a href="#">воинский учет.</a></span>
                    Для этого иногородние студенты обязаны временно прописаться в г. Алматы со сроком не менее 6
                    месяцев. Студенты, которые получили место в общежитии, обязаны прописаться у коменданта семейного
                    общежития №1.</p>
                <hr>
                <p>После получения временной прописки в г. Алматы студент обязан обратиться городской ЦОН (центр
                    обслуживания населения) для постановки на воинский учет.</p>
                <blockquote>
                    <strong> При себе иметь следующие документы:</strong>
                    <ul>
                        <li>
                            <p>приписное свидетельство (оригинал);</p></li>
                        <li>
                            <p>удостоверение личности (оригинал).</p>
                        </li>
                    </ul>
                </blockquote>
                <p>Студенты, имеющие в приписном удостоверении печать военкомата г. Алматы, обращаются в обязательном
                    порядке в ЦОО (общ №8) каб. 104, окно №11.</p>
                <hr>
                <p>
                    <strong>Всем студентам мужского пола встать на воинский учет строго до 1 ноября. </strong>
                    Студентам, не вставшим на воинский учет, будут приниматься меры, вплоть до не допуска к
                    экзаменационной сессии.</p>
                <h2><a href="pravila.php">Ознакомиться</a>&nbsp; с постановлением Правительства Республики Казахстан от
                    5 мая 2006 года № 371 </h2>
            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-4 bg-light rounded">
                <h3 class="font-weight-bold">Военнослужащий </h3>
                <p class="mb-0">лицо (человек),исполняющее <em class="text-info">должностные</em>&nbsp;обязанности,
                    связанные с прохождением <em class="text-info">военной службы</em>&nbsp;которая призвана решать
                    задачи в сфере безопасности и обороны государства, и в связи с этим, обладающее специальным правовым
                    статусом</p>
            </div>
            <div class="p-4 bg-light rounded">
                <h4 class="font-italic">Архивы</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">Первое полугодие 2017</a></li>
                    <li><a href="#">Второе полугодие 2017</a></li>
                    <li><a href="#">Первое полугодие 2018</a></li>
                    <li><a href="#">Второе полугодие 2018</a></li>
                    <li><a href="#">Первое полугодие 2019</a></li>
                    <li><a href="#">Второе полугодие 2019</a></li>
                    <li><a href="#">Первое полугодие 2020</a></li>
                    <li><a href="#">Второе полугодие 2020</a></li>
                </ol>
            </div>
        </aside>
    </div>

</main>
<footer class="page-footer font-small mdb-color lighten-3 bg-light pt-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12 mb-4">
                <div class="view overlay z-depth-1-half">
                    <img src="https://static.zakon.kz/uploads/posts/2016-08/1472212519_2-1.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="view overlay z-depth-1-half">
                    <img src="https://inbusiness.kz/ru/images/original/26/images/1aAddaHN.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://i1.wp.com/otyrar.kz/wp-content/uploads/2016/03/img_417.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-12 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://www.inform.kz/radmin/news/2019/11/25/191125195632294a3588611i.jpg"
                         class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://ehonews.kz/wp-content/uploads/2018/12/Screenshot_20181202-135430_zakonkz.jpg"
                         class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://www.inform.kz/fotoarticles/20190405093932.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://www.viires.kz/">Военно-инженерный институт радиоэлектроники и связи</a>
        <br>
        <button type="button" class="btn btn-outline-light text-primary" data-toggle="modal"
                data-target="#exampleModal">
            Управление сайтом
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация администратора</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="adminproverka.php">
                        <div class="modal-body col-6 offset-3">
                            <input type="text" id="1" name="adminName" class="form-control"
                                   placeholder="Enter name"><br>
                            <input type="password" id="2" name="passAdmin" class="form-control"
                                   placeholder="Enter password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                            <button type="submit" class="btn btn-primary" name="signIn">Sign in</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</footer>


</body>
</html>