<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="../../web/css/customstyle.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>
  
<div class="jumbotron container">
	
  		<div class="first-row">
  			<div class="header-left">
  			<a href="/">
  				<img src="../../web/img/02.png" class="img-responsive">
  			</a>
  			</div>
  			<div class="header-right">
  				<h3>8-888-888-88-88</h3>
  				<button type="button" class="btn btn-outline-success text-uppercase">узнать условия</button>
  			</div>
  		</div>
  	
  		<div class="page-header text-uppercase">
  			<h1>сотрудник за 24 часа</h1>
  			<h1>от 990 руб/чел</h1>
  			<h2>для любой сферы<h2>
		</div>
  	
  		<div class="header-desktop text-uppercase">
  			<h5>- КУРИРУЕМ В ПЕРИОД ИСПЫТАТЕЛЬНОГО СРОКА</h5>
  			<h5>- ЗАМЕНИМ СОТРУДНИКА ЗА 6 ЧАСОВ БЕЗ ОПЛАТЫ</h5>
  			<h5>- ПРОВЕРИМ ПО СЛУЖБЕ БЕЗОПАСНОСТИ</h5>
  		</div> 
  		<a href="#" class="btn btn-success text-uppercase" role="button">ПОЛУЧИТЬ ПРЕТЕНДЕНТОВ</a> 	
</div>

<?= $content ?>

<div class="container">
	<footer class="footer">
        <div class="footer-left">
				<div class="footer-row">
					<img src="../../web/img/footer (8).png" class="img-responsive">
					<span>Г. КРАСНОДАР</br> УЛ. КРАСНЫХ ПАРТИЗАН 117</span></br>
				</div>
				<div class="footer-row">	
					<img src="../../web/img/footer (7).png" class="img-responsive">
					<span>8-888-888-88-88</span></br>
				</div>
				<div class="footer-row">
					<img src="../../web/img/footer (6).png" class="img-responsive">
					<span>PERSONAL@YA.RU</span></br>
				</div>
				<div class="footer-row">
					<img src="../../web/img/footer (5).png" class="img-responsive">
					<span>FAQ</span>
				</div>
			</div>
			
			<div class="footer-right">
				<a href="/"><img src="../../web/img/footer (1).png" class="img-responsive"></a></br>
				<div class="social-buttons">
					<img src="../../web/img/footer (4).png" class="img-responsive">
					<img src="../../web/img/footer (3).png" class="img-responsive">
					<img src="../../web/img/footer (2).png" class="img-responsive">
				</div>
			</div>
	</footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
