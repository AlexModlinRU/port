<?php $topmenu = include(ROOT . '/config/topmenu.php'); ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="/"><img src="/favicon.png" alt="Виталий Скворцов Логотип"></a>-->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div id="topmenu">
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <?php foreach ($topmenu as $path => $title): ?>
                    <li><a href="<?php echo $path; ?>"><?php echo $title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-lg hidden-md hidden-sm">
                    <?php foreach ($topmenu as $path => $title): ?>
                    <li><a href="<?php echo $path; ?>"><?php echo $title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>