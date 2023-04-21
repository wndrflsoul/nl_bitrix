<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;

?>	


	

		<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<?$APPLICATION->ShowHead();?>
	<?
	
	Asset::getInstance()->addCss( SITE_TEMPLATE_PATH .'/assets/style.css');
	?>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>


<header id="sticky-header" class="header-area header-wrapper white-bg">
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
							<p>Бизнес</p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>


                    

    
</header>

<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text">О бизнесе</h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
						