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


    <link href="../logo.ico" rel="shortcut icon" type="image/x-icon">

    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header class="row row-xl align-content-center">

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