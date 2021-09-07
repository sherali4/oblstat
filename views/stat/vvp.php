<?php

use app\widgets\BgWidget;

echo \app\widgets\ButtonWidget::widget([
    'text'=> 'Submit',
]);
?>
<?php 
 \app\widgets\BgWidget::begin([
     'bgcolor'=>'light'
 ]);
?>
Hello World
<?php 
\app\widgets\BgWidget::end();
?>
<nav aria-label="breadcrumb" class="mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="http://127.0.0.1/oblstat/web/">Bosh sahifa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Yalpi Mahsulot</li>
    </ol>
</nav>