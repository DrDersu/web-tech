<!DOCTYPE html>
<html lang="en">
<?php
require_once "db/connection.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Blog Template · Bootstrap</title>



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="css/blog.css" rel="stylesheet" >


    <!-- Favicons -->

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
<main class="container mb-5">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center bg-light" style="border-bottom-right-radius: 9px; border-bottom-left-radius: 9px;">

            <div class="col-8 d-flex   align-items-center">
                <img src="image/vsrk.png" style="width: 60px; height: 60px;">
                <a href="index.php " style="text-decoration: none; color: black" >
                    <h1 class="display-4 pl-2 pt-2 " style="font-family: Arial; font-weight: bold  ">Военный учет студентов</h1></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <input type="text" class="form-control" name="" >
                <a class="text-dark" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a>
            </div>
        </div>
    </header>
    <div class="container">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Surname</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Education</th>
            </tr>
            </thead>
            <tbody>
            <?php
           if(!empty($_POST['search_area'])){
            $sql="SELECT * FROM db_students
             WHERE name1  LIKE :jk";
            $g_row =  $pdo_conn->prepare($sql) ;
            $g_row ->execute(array(':jk'=>$_POST['search_area'].'%'));
            foreach($g_row as $row)
            {
            ?>
            <tr>
                <th scope="row"><?php echo($row['id'])?></th>
                <td><?php echo($row['name1'])?></td>
                <td><?php echo($row['lastname'])?></td>
                <td><?php echo($row['surname'])?></td>
                <td><?php echo($row['birthday'])?></td>
                <td><?php echo($row['education'])?></td>
            </tr>
            <?php
            }
            if(empty($g_row)==0){
                $sql="SELECT * FROM db_students
             WHERE lastname  LIKE :jk";
                $g_row2 =  $pdo_conn->prepare($sql) ;
                $g_row2 ->execute(array(':jk'=>$_POST['search_area'].'%'));
                foreach($g_row2 as $row)
                {
                    ?>
                    <tr>
                        <th scope="row"><?php echo($row['id'])?></th>
                        <td><?php echo($row['name1'])?></td>
                        <td><?php echo($row['lastname'])?></td>
                        <td><?php echo($row['surname'])?></td>
                        <td><?php echo($row['birthday'])?></td>
                        <td><?php echo($row['education'])?></td>
                    </tr>
                    <?php
                }
            }
            if(empty($g_row)==0 and empty($g_row2)==0){
                    $sql="SELECT * FROM db_students
             WHERE surname  LIKE :jk";
                    $g_row3 =  $pdo_conn->prepare($sql) ;
                    $g_row3 ->execute(array(':jk'=>$_POST['search_area'].'%'));
                    foreach($g_row3 as $row)
                    {
                    ?>
            <tr>
                <th scope="row"><?php echo($row['id'])?></th>
                <td><?php echo($row['name1'])?></td>
                <td><?php echo($row['lastname'])?></td>
                <td><?php echo($row['surname'])?></td>
                <td><?php echo($row['birthday'])?></td>
                <td><?php echo($row['education'])?></td>
            </tr>
            <?php
                }
            }
            }
            ?>
            </tbody>
        </table>
    </div>
</main>
<footer class="page-footer font-small mdb-color lighten-3 bg-light pt-4 mt-5">
    <div class="container-fluid">
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
                    <img src="https://www.inform.kz/radmin/news/2019/11/25/191125195632294a3588611i.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://ehonews.kz/wp-content/uploads/2018/12/Screenshot_20181202-135430_zakonkz.jpg" class="img-fluid"
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
    </div>
</footer>
</body>
</html>
