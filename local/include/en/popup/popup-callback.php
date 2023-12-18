  <!--попап - обратный звонок-->
  <div class="popup popup-callback">
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
          <h2 class="form-title title">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/contacts/title.php"
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
                "PATH" => "/local/include/ru/contacts/desc.php"
              )
            );?>
          </div>
          
          <?$APPLICATION->IncludeComponent(
	"spiks:main.feedback", 
	"ContactsPageFormPopup", 
	array(
		"EMAIL_TO" => "nekrasov@spiks.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "ContactsPageFormPopup",
		"OK_TEXT" => ""
	),
	false
);?>
        </div>
      </div>
    </div>
  </div>