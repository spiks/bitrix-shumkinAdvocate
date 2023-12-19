<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Защита по уголовным делам подозреваемых, обвиняемых на стадии предварительного расследования и подсудимых на стадии судебного производства.");
$APPLICATION->SetPageProperty("title", "Адвокат Шумкин А.М.");
?>

<section class="firstblock" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/firstblock.jpg)">
  <div class="firstblock__container">
    <div class="firstblock-block">
      <h1 class="title wow fadeInUp" data-wow-duration="1s">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/main/title.php"
          )
        );?>
      </h1>
      <div class="description wow fadeInUp" data-wow-duration="2s">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/main/desc.php"
          )
        );?>  
      </div>
      <div class="button btn-callback wow fadeInUp" data-wow-duration="2.5s" data-value="Узнать подробнее">Узнать
        подробнее</div>
    </div>
  </div>
  <a href="#about" class="arrow"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/expand_more.svg" alt="Стрелка"></a>
</section>
<section class="about" id="about">
  <div class="about__container">
    <div class="about-photo">
      <picture>
        <source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/img/about.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about.jpg" alt="Обо мне"></picture>
    </div>
    <div class="about-info">
      <h2 class="title wow fadeInDown" data-wow-duration="1.5s">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/about/title.php"
          )
        );?> 
      </h2>
      <div class="text wow fadeInDown" data-wow-duration="1s">
      <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/about/desc.php"
          )
        );?> 
      </div>
      <div class="about-block">
        <div class="about-item wow fadeIn" data-wow-duration="1s">
          <div class="about-item__title"
            style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/Shield.svg)">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/title1.php"
              )
            );?>
          </div>
          <div class="about-item__text">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/text1.php"
              )
            );?>
          </div>
        </div>
        <div class="about-item wow fadeIn" data-wow-duration="2s">
          <div class="about-item__title"
            style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/GraduationCap.svg)">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/title2.php"
              )
            );?>
          </div>
          <div class="about-item__text">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/text2.php"
              )
            );?>
          </div>
        </div>
        <div class="about-item wow fadeIn" data-wow-duration="3s">
          <div class="about-item__title"
            style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/Bank.svg)">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/title3.php"
              )
            );?>
          </div>
          <div class="about-item__text">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/text3.php"
              )
            );?>
          </div>
        </div>
        <div class="about-item wow fadeIn" data-wow-duration="4s">
          <div class="about-item__title"
            style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/Eyeglasses.svg)">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/title4.php"
              )
            );?>
          </div>
          <div class="about-item__text">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/ru/about/text4.php"
              )
            );?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services-list", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "services-list"
	),
	false
);?>
<section class="stages" id="stages">
  <div class="stages__container">
    <h2 class="title">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/stages/title.php"
        )
      );?> 
    </h2>
    <div class="swiper stages__slider">
      <div class="swiper-wrapper stages__swiper">
        <div class="swiper-slide stages__slide">
          <div class="block-info">
            <div class="title">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/title1.php"
                )
              );?> 
            </div>
            <div class="text">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/text1.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle block-img_first">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b1.svg" class="block-img-pic block-img_1" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b1.1.svg" class="block-img-pic block-img_2" alt="Картинка">
            </div>
            <div class="block-img_c block-img_c1"></div>
            <div class="block-img_c block-img_c2"></div>
            <div class="block-img_c block-img_c3"></div>
            <div class="block-img_c block-img_c4"></div>
          </div>
        </div>
        <div class="swiper-slide stages__slide">
          <div class="block-info">
            <div class="title">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/title2.php"
                )
              );?>
            </div>
            <div class="text">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/text2.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b2.1.svg" class="block-img-pic block-img_3" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b2.2.svg" class="block-img-pic block-img_4" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b2.3.svg" class="block-img-pic block-img_5" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b2.4.svg" class="block-img-pic block-img_6" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b2.5.svg" class="block-img-pic block-img_7" alt="Картинка">
            </div>
            <div class="block-img_c block-img_c5"></div>
            <div class="block-img_c block-img_c6"></div>
          </div>
        </div>
        <div class="swiper-slide stages__slide">
          <div class="block-info">
            <div class="title">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/title3.php"
                )
              );?>
            </div>
            <div class="text">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/text3.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b3.svg" class="block-img-pic block-img_8" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b3.svg" class="block-img-pic block-img_9" alt="Картинка">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b3.svg" class="block-img-pic block-img_10" alt="Картинка">
            </div>
            <div class="block-img_c block-img_c1"></div>
            <div class="block-img_c block-img_c2"></div>
            <div class="block-img_c block-img_c3"></div>
            <div class="block-img_c block-img_c4"></div>
          </div>
        </div>
        <div class="swiper-slide stages__slide">
          <div class="block-info">
            <div class="title">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/title4.php"
                )
              );?>
            </div>
            <div class="text">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/ru/stages/text4.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stages/b4.svg" class="block-img-pic block-img_11" alt="Картинка">
            </div>
            <div class="block-img_c block-img_c1"></div>
            <div class="block-img_c block-img_c2"></div>
            <div class="block-img_c block-img_c3"></div>
            <div class="block-img_c block-img_c4"></div>
          </div>
        </div>
      </div>
      <div class="navigation">
        <div class="swiper-button-prev stages-prev">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M26.6666 14.6666H10.44L17.8933 7.21331L16 5.33331L5.33331 16L16 26.6666L17.88 24.7866L10.44 17.3333H26.6666V14.6666Z"
              fill="white" />
          </svg>
        </div>
        <div class="swiper-button-next stages-next">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M5.33335 17.3334H21.56L14.1067 24.7867L16 26.6667L26.6667 16L16 5.33335L14.12 7.21335L21.56 14.6667L5.33335 14.6667V17.3334Z"
              fill="white" />
          </svg>
        </div>
      </div>
      <div class="swiper-pagination stages-pagination"></div>
    </div>
  </div>
</section>
<section class="practices" id="practices">
  <div class="practices__container">
    <h2 class="title">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/practices/title.php"
        )
      );?> 
    </h2>
    <div class="text">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/practices/desc.php"
        )
      );?>
    </div>
    <?$APPLICATION->IncludeComponent(
      "bitrix:catalog.section.list", 
      "practices-tabs", 
      array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "N",
        "COUNT_ELEMENTS" => "Y",
        "COUNT_ELEMENTS_FILTER" => "CNT_ALL",
        "FILTER_NAME" => "sectionsFilter",
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "Content",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array(
          0 => "",
          1 => "",
        ),
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array(
          0 => "",
          1 => "",
        ),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "LINE",
        "COMPONENT_TEMPLATE" => "practices-tabs"
      ),
      false
    );?>
    <div class="practices__container_main">
      <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "practices.list",
        Array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_SECTIONS_CHAIN" => "Y",
          "AJAX_MODE" => "Y",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "CACHE_FILTER" => "N",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "N",
          "DETAIL_URL" => "",
          "DISPLAY_BOTTOM_PAGER" => "Y",
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "FIELD_CODE" => array("",""),
          "FILE_404" => "",
          "FILTER_NAME" => "",
          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
          "IBLOCK_ID" => "6",
          "IBLOCK_TYPE" => "Content",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
          "INCLUDE_SUBSECTIONS" => "Y",
          "MESSAGE_404" => "",
          "NEWS_COUNT" => "99",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_DESC_NUMBERING" => "N",
          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_SHOW_ALWAYS" => "N",
          "PAGER_TEMPLATE" => ".default",
          "PAGER_TITLE" => "Новости",
          "PARENT_SECTION" => "",
          "PARENT_SECTION_CODE" => "",
          "PREVIEW_TRUNCATE_LEN" => "",
          "PROPERTY_CODE" => array("PRACTICES_LINKS",""),
          "SET_BROWSER_TITLE" => "N",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "Y",
          "SET_META_KEYWORDS" => "N",
          "SET_STATUS_404" => "Y",
          "SET_TITLE" => "N",
          "SHOW_404" => "Y",
          "SORT_BY1" => "ACTIVE_FROM",
          "SORT_BY2" => "SORT",
          "SORT_ORDER1" => "DESC",
          "SORT_ORDER2" => "ASC",
          "STRICT_SECTION_CHECK" => "N"
        )
      );?>
    </div>
  </div>
</section>
<?if(false):?>
  <section class="diplom">
    <div class="diplom__container">
      <h2 class="title">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/diplom/title.php"
          )
        );?> 
      </h2>
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/diplom/img.php"
        )
      );?> 
    </div>
  </section>
  <section class="certificates" id="certificates">
    <div class="certificates__container">
      <h2 class="title">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/certificates/title.php"
          )
        );?>
      </h2>
      <div class="text">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/ru/certificates/desc.php"
          )
        );?>
      </div>
      <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "category-tabs", Array(
        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
          "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
          "CACHE_GROUPS" => "Y",	// Учитывать права доступа
          "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
          "CACHE_TYPE" => "A",	// Тип кеширования
          "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
          "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
          "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
          "IBLOCK_ID" => "10",	// Инфоблок
          "IBLOCK_TYPE" => "Content",	// Тип инфоблока
          "SECTION_CODE" => "",	// Код раздела
          "SECTION_FIELDS" => array(	// Поля разделов
            0 => "ID",
            1 => "",
          ),
          "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
          "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
          "SECTION_USER_FIELDS" => array(	// Свойства разделов
            0 => "",
            1 => "",
          ),
          "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
          "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
          "VIEW_MODE" => "LINE",	// Вид списка подразделов
        ),
        false
      );?>
      <?$APPLICATION->IncludeComponent(
        "bitrix:news.list", 
        "certificate.list", 
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_SECTIONS_CHAIN" => "N",
          "AJAX_MODE" => "N",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "CACHE_FILTER" => "N",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "Y",
          "DETAIL_URL" => "",
          "DISPLAY_BOTTOM_PAGER" => "Y",
          "DISPLAY_DATE" => "N",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "FIELD_CODE" => array(
            0 => "",
            1 => "",
          ),
          "FILTER_NAME" => "",
          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
          "IBLOCK_ID" => "10",
          "IBLOCK_TYPE" => "Content",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
          "INCLUDE_SUBSECTIONS" => "Y",
          "MESSAGE_404" => "",
          "NEWS_COUNT" => "99",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_DESC_NUMBERING" => "N",
          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_SHOW_ALWAYS" => "N",
          "PAGER_TEMPLATE" => ".default",
          "PAGER_TITLE" => "Новости",
          "PARENT_SECTION" => "",
          "PARENT_SECTION_CODE" => "",
          "PREVIEW_TRUNCATE_LEN" => "",
          "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
          ),
          "SET_BROWSER_TITLE" => "N",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "N",
          "SET_META_KEYWORDS" => "N",
          "SET_STATUS_404" => "N",
          "SET_TITLE" => "N",
          "SHOW_404" => "N",
          "SORT_BY1" => "ACTIVE_FROM",
          "SORT_BY2" => "SORT",
          "SORT_ORDER1" => "DESC",
          "SORT_ORDER2" => "ASC",
          "STRICT_SECTION_CHECK" => "N",
          "COMPONENT_TEMPLATE" => "certificate.list"
        ),
        false
      );?>

    </div>
  </section>
<?endif;?>
<?if(false):?>
<!-- <section class="gratitude" id="gratitude">
  <div class="gratitude__container">
    <h2 class="title">
      <//?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_RECURSIVE" => "Y",
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "inc",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/ru/gratitude/title.php"
        )
      );?>
    </h2>
    <//?$APPLICATION->IncludeComponent("bitrix:news.list", "gratitude.list", Array(
      "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",	// Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
        "DISPLAY_DATE" => "N",	// Выводить дату элемента
        "DISPLAY_NAME" => "Y",	// Выводить название элемента
        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
        "FIELD_CODE" => array(	// Поля
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "",	// Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "7",	// Код информационного блока
        "IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",	// Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",	// Название категорий
        "PARENT_SECTION" => "",	// ID раздела
        "PARENT_SECTION_CODE" => "",	// Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(	// Свойства
          0 => "NAME",
          1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",	// Устанавливать статус 404
        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
        "SHOW_404" => "N",	// Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
      ),
      false
    );?>
  </div>
</section> -->
<? endif;?>
<section class="callback" id="contacts">
  <div class="callback__container">
    <div class="form form-callback wow fadeInLeft" data-wow-duration="3s">
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
	"ContactsPageForm", 
	array(
		"EMAIL_TO" => "amshumkin@gmail.com",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "ContactsPageForm",
		"OK_TEXT" => ""
	),
	false
);?>
    </div>
    <div class="map-fone" id="map">
      <div class="contacts-block">
        <div class="contacts-block__title">Адрес</div>
        <div class="contacts-block__text"><?=$GLOBALS['ADDRESS_ALL']?></div>
        <div class="contacts-block__text"><?=$GLOBALS['ADDRESS_ALL_2']?></div>
        <a href="https://yandex.ru/maps/2/saint-petersburg/house/shosse_revolyutsii_3k1/Z0kYcgdoT0EBQFtjfXV0eXplYQ==/?ll=30.409085%2C59.958199&z=17.07" class="contacts-block__btn button" target="_blank">Построить маршрут</a>
      </div>
    </div>
  </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>