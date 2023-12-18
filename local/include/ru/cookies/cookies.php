<div class="cookies wow fadeInUp" data-wow-duration="1.5s">
  <div class="cookies__container">
    <div class="cookies__title">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/cookies/cookies-title.php"
        )
      );?>
    </div>
    <div class="cookies-btn__group">
      <!-- <div class="cookies-btn cookies-btn__cancel">
        <//?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/cookies/cookies-btn1.php"
          )
        );?>
      </div> -->
      <div class="cookies-btn cookies-btn__sucsess">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/cookies/cookies-btn2.php"
          )
        );?>
      </div>
    </div>
  </div>
</div>