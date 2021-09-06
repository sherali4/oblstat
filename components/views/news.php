<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center pt-3 pb-3">
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        <li class="page-item active" aria-current="page">
            <span class="page-link">1<span class="sr-only">(current)</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<section class="timeline">

    <div class="row">


        <?php if (!empty($links)): ?>
        <?php
    foreach ($links as $link):
    ?>
        <div class="col-6 timeline-wrapper">
            <div class="timeline-item bg-success">
                <span class="timeline-item-section">Qishloq xo'jaligi</span>
                <span class="timeline-item-date">01.01.2021</span>
                <span class="timeline-item-header">
                    <h5><?= $link->title ?></h5>
                </span>
                <span class="timeline-item-description"><?= $link->short ?></span>
                <span class="timeline-item-link"><a href="%s">Kirish</a></span>
            </div>
        </div>



        <?php endforeach; ?>

        <?php endif; ?>





    </div>

</section>

<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center pt-3 pb-3">
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        <li class="page-item active" aria-current="page">
            <span class="page-link">1<span class="sr-only">(current)</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>