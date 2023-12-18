<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer-top">
          <a href="/" class="logo">
            <img src="/local/templates/.default/assets/img/icons/logoEn.svg" alt="Logo">
          </a>
          <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "menu-footer",
            Array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "",
              "COMPONENT_TEMPLATE" => "menu-footer",
              "DELAY" => "N",
              "MAX_LEVEL" => "1",
              "MENU_CACHE_GET_VARS" => array(),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "N",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "footer",
              "USE_EXT" => "Y"
            )
          );?>
          <div class="contacts">
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
          </div>
        </div>
        <div class="footer-bottom">
          <!-- <a href="#contacts" class="address"><//?=$GLOBALS['ADDRESS_ALL_IV']?></a> -->
          <a href="upload/politic.pdf" class="politics" target="_blank">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/iv/politics/politics.php"
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
      "PATH" => "/local/include/iv/popup/popup-callback.php"
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
      "PATH" => "/local/include/iv/popup/popup-sucsess.php"
    )
  );?> 
</body>

</html>
