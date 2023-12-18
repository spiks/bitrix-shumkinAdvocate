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
    <link rel="shortcut icon" href="/favicon.svg">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap");
    </style>
    <?php
    $asset->addCss('/local/templates/.default/assets/css/animate.min.css');
    $asset->addCss('/local/templates/.default/assets/css/custom.css');
    $asset->addCss('/local/templates/.default/assets/css/simplebar.css');
    $asset->addCss('/local/templates/.default/assets/css/jquery.fancybox.min.css');
    $asset->addCss('/local/templates/.default/assets/css/swiper-bundle.min.css');
    $asset->addCss('/local/templates/.default/assets/css/style.css');

    $asset->addJs('/local/templates/.default/assets/libsJs/wow.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/jquery.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/simplebar.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/jquery.cookie.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/swiper-bundle.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/jquery.fancybox.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/jquery.maskedinput.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/smooth-scroll.polyfills.min.js');
    $asset->addJs('/local/templates/.default/assets/libsJs/jquery.validate.min.js');
    $asset->addJs('/local/templates/.default/assets/js/app.js');
    $asset->addJs('/local/templates/.default/assets/js/custom.js');

    ?>
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
        "PATH" => "/local/include/iv/cookies/cookies.php"
      )
    );?>
  <? endif; ?>
	<div class="wrapper">
  <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
		<header class="header">
    <div class="header-top">
        <div class="header-top__container">
            <a href="#contacts" class="address" data-da=".menu-block__body, 1023.98"><?=$GLOBALS['ADDRESS_IV']?></a>
            <?if(false):?>
              <a href="mailto:<?=$GLOBALS['EMAIL']?>" class="mail" data-da=".menu-block__body, 1023.98"><?=$GLOBALS['EMAIL']?></a>
            <?endif;?>
            <div class="contacts" data-da=".menu-block__body, 1023.98">
              <div class="phone">
                <div class="phone__img">
                  <img src="/local/templates/.default/assets/img/icons/social/phone.svg" alt="phone">
                </div>
                <a href="tel:<?=$GLOBALS['PHONE_CLEAR']?>" class="phone__title"><?=$GLOBALS['PHONE']?></a>
              </div>
              <div class="social">
                <a href="whatsapp://send?phone=<?=$GLOBALS['PHONE']?>" target="_blank" class="social__item social__item_vk">
                  <img src="/local/templates/.default/assets/img/icons/social/whatsUp.svg" alt="WhatsUp">
                </a>
                <a href="https://t.me/anahshunov" target="_blank" class="social__item social__item_telegram">
                  <img src="/local/templates/.default/assets/img/icons/social/telegram.svg" alt="telegram">
                </a>
              </div>
              <div class="language">
                <div class="language__title">He</div>
                <div class="language__img">
                  <img src="/local/templates/.default/assets/img/icons/language.svg" alt="language">
                </div>
                <div class="language-block">
                  <a href="https://lawyerbx.tmweb.ru/" class="language-block__item">Russian</a>
                  <a href="https://lawyerbx.tmweb.ru/en/" class="language-block__item">English</a>
                  <a href="https://lawyerbx.tmweb.ru/iv/" class="language-block__item">Hebrew</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="header-bottom__container">
            <a href="/" class="logo">
              <img src="/local/templates/.default/assets/img/icons/logoEn.svg" alt="Logo">
            </a>
            <a href="tel:<?=$GLOBALS['PHONE_CLEAR']?>" class="phone__img_mobile">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/phone.svg" alt="Phone">
            </a>
            <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "menu",
              Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "top",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(0=>"",),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
              )
            );?>
            <nav hidden class="menu-block">
                <div class="menu-block-button">
                    <button type="button" class="menu-block__icon icon-menu"><span></span></button>
                </div>
                <div class="menu-block__body">
                    <div class="close"><img src="/local/templates/.default/assets/img/icons/close.svg" alt="Close"></div>
                    <div class="menu-title">תַפרִיט</div>
                </div>
            </nav>
        </div>
    </div>

</header>
		<main></main>
