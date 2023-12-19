<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer-top">
          <a href="/" class="logo">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/logo.svg" alt="Логотип">
          </a>
          <?$APPLICATION->IncludeComponent(
            "bitrix:menu", 
            "menu-footer", 
            array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "",
              "COMPONENT_TEMPLATE" => "menu-footer",
              "DELAY" => "N",
              "MAX_LEVEL" => "1",
              "MENU_CACHE_GET_VARS" => array(
              ),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "Y",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "footer",
              "USE_EXT" => "Y"
            ),
            false
          );?>
          <div class="contacts">
            <div class="phone">
              <div class="phone__img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/phone.svg" alt="Телефон">
              </div>
              <a href="tel:<?=$GLOBALS['PHONE_CLEAR']?>" class="phone__title"><?=$GLOBALS['PHONE']?></a>
            </div>
            <div class="social">
              <a href="whatsapp://send?phone=<?=$GLOBALS['PHONE_CLEAR']?>" target="_blank" class="social__item social__item_vk">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/whatsUp.svg" alt="WhatsUp">
              </a>
              <a href="https://t.me/<?=$GLOBALS['TG']?>" target="_blank" class="social__item social__item_telegram">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/social/telegram.svg" alt="Телеграм">
              </a>
            </div>
          </div>
        </div>
        <div class="footer-middle">
          Партнеры: <span>Дик Д. А</span> <span>Нахшунов А. Я</span>
        </div>
        <div class="footer-bottom">
          <!-- <a href="#contacts" class="address"><//?=$GLOBALS['ADDRESS_ALL']?></a> -->
          <a href="upload/politic.pdf" class="politics" target="_blank">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/politics/politics.php"
              )
            );?>  
          </a>
        </div>
      </div>
    </footer>
  </div>
  <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
      "AREA_FILE_RECURSIVE" => "Y",
      "AREA_FILE_SHOW" => "file",
      "AREA_FILE_SUFFIX" => "inc",
      "EDIT_TEMPLATE" => "",
      "PATH" => "/local/include/ru/popup/popup-callback.php"
    )
  );?>  
  <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
      "AREA_FILE_RECURSIVE" => "Y",
      "AREA_FILE_SHOW" => "file",
      "AREA_FILE_SUFFIX" => "inc",
      "EDIT_TEMPLATE" => "",
      "PATH" => "/local/include/ru/popup/popup-sucsess.php"
    )
  );?> 
  <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
      "AREA_FILE_RECURSIVE" => "Y",
      "AREA_FILE_SHOW" => "file",
      "AREA_FILE_SUFFIX" => "inc",
      "EDIT_TEMPLATE" => "",
      "PATH" => "/local/include/ru/popup/popup-practics.php"
    )
  );?> 
</body>

</html>
