<?php
/* @var $this \yii\web\View */
/* @var $content string */

/* session_start();

$name = "xisobot";
$forword = 'fermer20202word.php';
$papka = 'fermer';
$fayl = 'Fermer xo\'jaliklar hisobotlari'; */
/* if (isset($_GET['table'])) {
} else {
	header("Location: http://127.0.0.1/stat/fermer/ruyxat.php");
	exit;
}
 */
//include_once('../blocks/bd.php');
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use app\components\HMWidget;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html">
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>Fermer xo'jaligi faoliyati to'g'risida 2020 yil yanver-sentabr oylari uchun xisobot</title>

    <!-- <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/dist/css/bootstrap.min.css"> -->
    <!--  <link rel="stylesheet" type="text/css" href="../css/main.css"> -->
    <!--     <script type="text/javascript" src="../plugins/jquery/jquery.js"></script> -->
    <link href="../logo.ico" rel="shortcut icon" type="image/x-icon">
    <!-- 	<script type="text/javascript" src="search/jquery.js"></script>-->
    <!-- <script type="text/javascript" src="inc/main.js"></script> -->
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header class="row row-xl align-content-center">
        <?php
  /*   NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end(); */
    ?>
        <div class="header-h1 col-xl-12 mb-1 shadow-lg p-0 mb-3 mt-3 rounded" class="header-h1">
            <img class="rounded float-left" width="100px" height="100px" src="img/logo.png" />
            <h1
                class="font-weight-bolder text-uppercase text-xl-center text-sm-center text-md-center text-lg-center text-success col-12 header-h1">
                Qishloq xo'jaligi statistikasi</h1>
        </div>
        <div class="container container-xl-auto marque">
            <div class="row">
                <div class="col-12">
                    <marquee title="Sayt loyixasi bo'yicha dinamik ma'lumotlar" behavior="direction" loop="3"
                        scrollamount="4" scrolldelay="3" style="padding-left:1px; margin-left:1px;"><span
                            style="font-size: 18px; font-style:bold; font-family: ' Times New Roman', Times, serif; color:#007bff;"><strong>Ayni
                                paytda <a class="animat1" href="http://127.0.0.1/svod/word.php">Qishloq
                                    xo'jaligi</a>
                                sayti loyihasi bazasida yangiliklar soni <a class="animatqw">
                                    25
                                </a> tani, fayllar soni <a class="animatqw">
                                    124
                                </a> tani tashkil qilmoqda. Hozirgacha saytga tashrif buyurganlar soni <a
                                    class="animatqw">54

                                </a> nafar.</strong></span></marquee>
                </div>
            </div>
        </div>
    </header>
    <div class="container container-xl">

        <?= HMWidget::widget() ?>
        <main role="main" class="flex-shrink-0">



            <div class="row align-content-center"><?php //require_once('../blocks/header.php'); ?></div>
            <?php //require_once('../blocks/menyu.php'); ?>

            <div class="row bg-success text-white color-white">
                <nav class="navbar navbar-expand-lg" role="navigation">
                    <a class="bosh navbar-brand text-white" href="../fermer/ruyxat.php"><svg
                            class="bi bi-house-fill mb-1" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z"
                                clip-rule="evenodd" />
                        </svg> Bosh sahifa</a>
                    <div class="collapse navbar-collapse  text-white">
                        <ul class="navbar-nav mr-4 p-0">
                            <li class="news nav-item"><a class="nav-link  text-white" href="../news/index.php"><svg
                                        class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg> Yangilikar</a>
                            </li>

                            <li class="profil nav-item"><a class="nav-link  text-white" href="../reg/index.php"><svg
                                        class="bi bi-graph-up" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z" />
                                        <path fill-rule="evenodd"
                                            d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M10 3.5a.5.5 0 01.5-.5h4a.5.5 0 01.5.5v4a.5.5 0 01-1 0V4h-3.5a.5.5 0 01-.5-.5z"
                                            clip-rule="evenodd" />
                                    </svg> Profil</a>
                            </li>
                            <li class="fermer nav-item"><a class="nav-link  text-white"
                                    href="../fermer/ruyxat.php">Fermer</a></li>
                            <li class="dropdown nav-item"><a class="dropdown-toggle nav-link  text-white"
                                    data-toggle="dropdown" href="#"><svg class="bi bi-briefcase-fill" width="1em"
                                        height="1em" viewBox="0 0 16 16" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5V6.85L8.129 8.947a.5.5 0 01-.258 0L0 6.85v5.65z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v1.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z"
                                            clip-rule="evenodd" />
                                    </svg> Hisobot<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <div class="list-group m-0 p-0">
                                        <li class="list-group-item list-group-item-action nav-item bg-primary"><a
                                                class="nav-link  text-white" href="fermer2019god.php">Fermer 2019
                                                yillik</a></li>
                                        <li class="list-group-item list-group-item-action nav-item bg-primary"><a
                                                class="nav-link  text-white" href="fermer2019.php">2019 yil yarim
                                                yillik</a></li>
                                        <li class="list-group-item list-group-item-action nav-item bg-primary"><a
                                                class="nav-link  text-white" href="#">Dinamik ko'rsatkichlar</a></li>
                                        <li class="list-group-item list-group-item-action nav-item bg-primary"
                                            class="nav-link  text-white">
                                            <div class="dropdown-divider bg-primary"></div>
                                        </li>
                                        <li class="list-group-item list-group-item-action nav-item bg-primary"><a
                                                class="nav-link  text-white" href="#">Yarim yillik</a></li>
                                        <li class="list-group-item list-group-item-action nav-item bg-primary"><a
                                                class="nav-link  text-white" href="#">Ish rejalar</a></li>
                                        <li class="list-group-item list-group-item-action nav-item disabled bg-primary">
                                            <a class="nav-link  text-white" href="#">Tumanlar kamchiliklari</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link text-white" href="#"><svg class="bi bi-graph-up"
                                        width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z" />
                                        <path fill-rule="evenodd"
                                            d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M10 3.5a.5.5 0 01.5-.5h4a.5.5 0 01.5.5v4a.5.5 0 01-1 0V4h-3.5a.5.5 0 01-.5-.5z"
                                            clip-rule="evenodd" />
                                    </svg> Dinamika</a>
                            </li>
                            <li class="search nav-item"><a class="nav-link text-white" href="../search/search.php"><svg
                                        class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z"
                                            clip-rule="evenodd" />
                                    </svg> Jonli qidiruv</a></li>
                            <li class="nav-item mahsulot"><a class="nav-link text-white"
                                    href="../mahsulot/index.php">Yalpi
                                    mahsulot</a></li>
                            <li class="nav-item disabled"><a class="nav-link text-white" href="#">Tumanlar</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row">
                <?php //require_once('../blocks/left.php'); ?>
                <div class="col-3">
                    <div class="list-group align-top shadow-lg mb-3 mt-3 bg-white rounded">
                        <a href="#"
                            class="list-group-item list-group-item-action active font-weight-bold text-center">Qishloq
                            xo'jaligi</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">YaIM</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Qishloq xo'jaligi</a>
                        <ul class="mb-0 pl-4">
                            <li class="list-group-item list-group-item-action">Dehqonchilik</li>
                            <li class="list-group-item list-group-item-action mb-0">Chorvachilik</li>
                        </ul>
                        <a href="#" class="list-group-item list-group-item-action">Ovchilik</a>
                        <a href="#" class="list-group-item list-group-item-action">O'rmonchilik</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Baliqchilik</a>
                    </div>
                    <div class="list-group align-top shadow-lg mb-3 mt-3 bg-white rounded">
                        <a href="#"
                            class="list-group-item list-group-item-action active  font-weight-bold text-center">FERMER</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Me'yoriy hujjatlar</a>
                        <a href="fermer_kat.php" class="list-group-item list-group-item-action text-dark">Katalog</a>
                        <ul class="mb-0 pl-4">
                            <li class="list-group-item list-group-item-action">Yo'nalishi</li>
                            <li class="list-group-item list-group-item-action">Faoliyat yuritayotgani</li>
                        </ul>
                        <a href="http://127.0.0.1/fermer/fermer.php"
                            class="list-group-item list-group-item-action">Hisobotlar</a>
                        <a href="#" class="list-group-item list-group-item-action">Oxirgi hisobot</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Ko'rsatkichlar</a>
                    </div>

                </div>
                <div class="col-6">
                    <?= $content ?>
                    <?php

				//include_once('../class/breadcrumb.php');
				//$breadcrumb = new breadcrumb($papka, $fayl);
				//echo '<div class="mt-5 mx-auto">';
				//include_once('inc/okpo.class.php'); //okpo formasi

				//echo '</div>';

				/* $classokpo = new okpo($name . '.php'); //formani obrabotka faylini ko'rsatish kerak
				if (isset($_GET['okpo']) && isset($_GET['table'])) {
					$okpo = $_GET['okpo'];
					$table = $_GET['table'];
					$_SESSION['okpo'] = $_GET['okpo'];
					$_SESSION['table'] = $_GET['table'];
					include_once('inc/perv5.class.php');
					$classokpo1 = new pervichka($okpo, 8);
					include_once('inc/office.php');
					include_once('inc/perv4.class.php');
					$classokpo1 = new pervichka1($okpo, $table, 8);
					echo '</table>';
				} */
				?>
                </div>
                <div class="col-3">
                    <?php //require_once('blocks/right.php');
				//require_once('../blocks/right.php'); ?>
                    <div class="list-group align-top shadow-lg p-0 mb-3 mt-3 bg-white rounded">
                        <a href="bulliten.php"
                            class="list-group-item list-group-item-action active font-weight-bold text-center">Ko'rsatkichlar</a>
                        <a href="bulliten.php" class="list-group-item list-group-item-action text-dark">Bulliten</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">YaHM</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Texnika</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Ekin maydon</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Chorva</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">O'g'it</a>
                        <a href="#" class="list-group-item list-group-item-action">Boshqa jadvallar</a>
                    </div>
                    <div class="list-group align-top shadow-lg p-0 mb-3 mt-3 bg-white rounded">
                        <a href="hisobot.php"
                            class="list-group-item list-group-item-action active font-weight-bold text-center">Hisobot</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Fermer</a>
                        <a href="#" class="list-group-item list-group-item-action">Qishloq xo'jaligi</a>
                        <a href="#" class="list-group-item list-group-item-action">Paxta</a>
                        <a href="#" class="list-group-item list-group-item-action">G'alla</a>
                        <a href="#" class="list-group-item list-group-item-action">Pilla</a>
                        <a href="#" class="list-group-item list-group-item-action">Dehqon</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Ekologiya</a>
                    </div>
                    <div class="list-group align-top shadow-lg p-0 mb-3 mt-3 bg-white rounded">
                        <a href="#"
                            class="list-group-item list-group-item-action active font-weight-bold text-center">Dehqonchilik</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Me'yoriy hujjatlar</a>
                        <a href="#" class="list-group-item list-group-item-action text-dark">Soni</a>
                        <ul class="mb-0 pl-4">
                            <li class="list-group-item list-group-item-action">Yuridik dehqon</li>
                            <ul class="mb-0 pl-4">
                                <li class="list-group-item list-group-item-action">yo'nalishi</li>
                                <li class="list-group-item list-group-item-action mb-0">tumanlar bo'yicha</li>
                            </ul>
                            <li class="list-group-item list-group-item-action">Dehqon(shaxsiy yordamchi)</li>
                        </ul>
                        <a href="#" class="list-group-item list-group-item-action">Ko'rsatkichlar</a>
                    </div>
                </div>
            </div>
    </div>


    <!-- <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script> -->

    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; Qishloq xo'jaligi va ekologiya statistikasi <?= date('Y') ?></p>
            <p class="float-right">Oblstat</p>
        </div>
    </footer>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>