<?php include_once ROOT . '/views/settings/top.php'; ?>

<?php include_once ROOT . '/views/modules/topmenu.php'; ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1>Добро Пожаловать</h1>
                <h3>на сайт резюме.</h3>
                <p>Данная страница была создана для демонстрации приблизительных способностей автора.</p>
                <p>было использовано HTML, SCSS, JQuery, PHP</p>
                <a href="//github.com/AlexModlinRU/port" target="_blank" class="btn btn-info btn-lg">
                    <i class="fa fa-github-square"></i> Git repository
                </a>
                <br>
                <a href="//github.com/AlexModlinRU/port/archive/master.zip" class="btn btn-success btn-xs">
                    Download .zip
                </a>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Обо мне</h1>
                <?php include_once ROOT . '/views/modules/about.php'; ?>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="skills" class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Перечень моих навыков</h1>
                <?php include_once ROOT . '/views/modules/skills.php'; ?>
                <h1>Перечень используемых программ и др.</h1>
                <?php include_once ROOT . '/views/modules/programms.php'; ?>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="works" class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Работы</h1>
                <?php include_once ROOT . '/views/modules/works.php'; ?>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="contacts" class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Контакты</h1>
            </div>
        </div>
    </div>
    <?php include_once ROOT . '/views/modules/yandexMap.php'; ?>
    <?php include_once ROOT . '/views/modules/contacts.php'; ?>
</div>
<?php include_once ROOT . '/views/settings/bottom.php'; ?>