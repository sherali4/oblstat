<?php 
namespace app\views\stat\news;
use app\components\NewsWidget;
?>
<nav aria-label="breadcrumb" class="mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="http://127.0.0.1/oblstat/web/">Bosh sahifa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sayt yangiliklari</li>
    </ol>
</nav>
<div class="col-xl-12">
    <h1>Yangiliklar</h1>
    <?= NewsWidget::widget() ?>
</div>

<!-- </section>

</div> -->