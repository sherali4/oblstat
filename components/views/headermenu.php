<?php if (!empty($links)): ?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavbar">
                <span class="icon-bar">1</span>
                <span class="icon-bar">1</span>
                <span class="icon-bar">1</span>
            </button>
            <a class="navbar-brand" href="#">The Providers</a>
        </div>
        <div class="collapse navbar-collapse"></div>
    </div>

</nav>


<ul class="navbar-nav ml-auto">
    <!--     <li class="nav-item active">
        <a class="nav-link" href="#">Bosh Sahifa<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">menu1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">menu2</a>
    </li> -->
    <?php
    foreach ($links as $link):
    ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= $link->link ?>"><?= $link->title ?></a>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>