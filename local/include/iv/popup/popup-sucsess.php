<!--попап - success-->
<div class="popup popup-success">
  <div class="popup__wrapper">
    <div class="popup__content">
      <button type="button" class="popup__close" data-fancybox-close>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
            fill="white" />
        </svg>
      </button>
      <div class="form">
        <div class="form-img">
          <picture>
            <source srcset="/local/templates/.default/assets/img/success.webp" type="image/webp"><img src="/local/templates/.default/assets/img/success.png" alt="Success"></picture>
        </div>
        <h2 class="form-title title">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_RECURSIVE" => "Y",
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/local/include/ru/popup/popup-title.php"
            )
          );?>
        </h2>
        <div class="form-text">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_RECURSIVE" => "Y",
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/local/include/ru/popup/popup-text.php"
            )
          );?>
        </div>
        <a href="/" class="form-btn button">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_RECURSIVE" => "Y",
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/local/include/ru/popup/popup-btn.php"
            )
          );?>
        </a>
      </div>
    </div>
  </div>
</div>