<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
?>
<?$APPLICATION->IncludeComponent(
	"spiks:contacts",
	"",
Array()

);?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="2c52e8e6c694478c" />
    <link rel="shortcut icon" href="/favicon.svg">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap");
    </style>
    <link rel="canonical" href="https://<?=$_SERVER['HTTP_HOST']?><?=$APPLICATION->GetCurDir()?>">

    <?php
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/custom.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/simplebar.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/jquery.fancybox.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/swiper-bundle.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
    
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/wow.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/jquery.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/simplebar.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/jquery.cookie.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/swiper-bundle.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/jquery.fancybox.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/jquery.maskedinput.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/smooth-scroll.polyfills.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/libsJs/jquery.validate.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/app.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom.js');
    ?>

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?=$APPLICATION->ShowTitle()?>">
  <meta property="og:locale" content="ru_RU"/>
  <meta property="og:site_name" content="nakhshunov.com"/>
  <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST']?><?=$APPLICATION->GetCurPage(false)?>">
  <meta property="og:image" content="https://<?=$_SERVER['HTTP_HOST']?>/favicon.svg">
  <meta property="og:description" content="<?=$APPLICATION->ShowProperty("description")?>">
</head>

<body>
  <? if (!isset($_COOKIE['COOKIE_AGREE'])) : ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/cookies/cookies.php"
        )
      );?>
  <? endif; ?>
	<div class="wrapper">
  <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
		<header class="header">
    <div class="header-top">
        <div class="header-top__container">
            <a href="#contacts" class="address" data-da=".menu-block__body, 1023.98"><?=$GLOBALS['ADDRESS']?></a>
            <?if(false):?>
              <a href="mailto:<?=$GLOBALS['EMAIL']?>" class="mail" data-da=".menu-block__body, 1023.98"><?=$GLOBALS['EMAIL']?></a>
            <?endif;?>
            <div class="contacts" data-da=".menu-block__body, 1023.98">
              <div class="phone">
                <div class="phone__img">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/phone.svg" alt="Телефон">
                </div>
                <a href="tel:<?=$GLOBALS['PHONE_CLEAR']?>" class="phone__title"><?=$GLOBALS['PHONE']?></a>
              </div>
              <div class="social">
                <a href="https://wa.me/<?=$GLOBALS['PHONE_CLEAR']?>" target="_blank" class="social__item social__item_vk">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/whatsUp.svg" alt="WhatsUp">
                </a>
                <a href="https://t.me/<?=$GLOBALS['TG']?>" target="_blank" class="social__item social__item_telegram">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/telegram.svg" alt="Телеграм">
                </a>
              </div>
              <?if(false):?>
                <!--<div class="language">-->
                <!--  <div class="language__title">Ru</div>-->
                <!--  <div class="language__img">-->
                <!--    <img src="<//?= SITE_TEMPLATE_PATH ?>/assets/img/icons/language.svg" alt="Язык">-->
                <!--  </div>-->
                <!--  <div class="language-block">-->
                <!--    <a href="https://lawyerbx.tmweb.ru/" class="language-block__item">Русский</a>-->
                <!--    <a href="https://lawyerbx.tmweb.ru/en/" class="language-block__item">English</a>-->
                <!--    <a href="https://lawyerbx.tmweb.ru/iv/" class="language-block__item">Hebrew</a>-->
                <!--  </div>-->
                <!--</div>-->
              <?endif;?>
            </div>
        </div>
    </div>
    <div class="header-bottom">
      <div class="header-bottom__container">
        <a href="/" class="logo">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/logo.svg" alt="Логотип">
        </a>
        <a href="tel:<?=$GLOBALS['PHONE_CLEAR']?>" class="phone__img_mobile">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/phone.svg" alt="Телефон">
        </a>
        <div class="social_mobile">
          <a href="https://wa.me/<?=$GLOBALS['PHONE_CLEAR']?>" target="_blank" class="social__item social__item_vk"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/whatsUp.svg" alt="WhatsUp">
          </a>
          <a href="https://t.me/<?=$GLOBALS['TG']?>" target="_blank" class="social__item social__item_telegram"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/telegram.svg" alt="Телеграм">
          </a>
        </div>
        <?$APPLICATION->IncludeComponent(
          "bitrix:menu", 
          "menu", 
          array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "top",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "Y",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "menu"
          ),
          false
        );?>
        <nav hidden class="menu-block">
            <div class="menu-block-button">
                <button type="button" class="menu-block__icon icon-menu"><span></span></button>
            </div>
            <div class="menu-block__body">
                <div class="close"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/close.svg" alt="Крестик"></div>
                <div class="menu-title">Меню</div>
            </div>
        </nav>
      </div>
    </div>
</header>
		<main>
