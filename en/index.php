<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Адвокат Нахшунов А.Я.");
?>

<section class="firstblock" style="background-image: url(/local/templates/.default/assets/img/firstblock.jpg)">
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
            "PATH" => "/local/include/en/main/title.php"
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
            "PATH" => "/local/include/en/main/desc.php"
          )
        );?>
      </div>
      <div class="button btn-callback wow fadeInUp" data-wow-duration="2.5s" data-value="Learn more">Learn more</div>
    </div>
  </div>
  <a href="#about" class="arrow"><img src="/local/templates/.default/assets/img/icons/expand_more.svg" alt="Arrow"></a>
</section>
<section class="about" id="about">
  <div class="about__container">
    <div class="about-photo">
      <picture>
        <source srcset="/local/templates/.default/assets/img/about.webp" type="image/webp"><img src="/local/templates/.default/assets/img/about.jpg" alt="About"></picture>
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
            "PATH" => "/local/include/en/about/title.php"
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
            "PATH" => "/local/include/en/about/desc.php"
          )
        );?>
      </div>
      <div class="about-block">
        <div class="about-item wow fadeIn" data-wow-duration="1s">
          <div class="about-item__title"
            style="background: url(/local/templates/.default/assets/img/icons/Shield.svg)no-repeat left center/32px 32px;">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/en/about/title1.php"
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
                "PATH" => "/local/include/en/about/text1.php"
              )
            );?>
          </div>
        </div>
        <div class="about-item wow fadeIn" data-wow-duration="2s">
          <div class="about-item__title"
            style="background: url(/local/templates/.default/assets/img/icons/GraduationCap.svg)no-repeat left center/32px 32px;">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/en/about/title2.php"
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
                "PATH" => "/local/include/en/about/text2.php"
              )
            );?>
          </div>
        </div>
        <div class="about-item wow fadeIn" data-wow-duration="3s">
          <div class="about-item__title"
            style="background: url(/local/templates/.default/assets/img/icons/Bank.svg)no-repeat left center/32px 32px;">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/en/about/title3.php"
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
                "PATH" => "/local/include/en/about/text3.php"
              )
            );?>
          </div>
        </div>
        <div class="about-item wow fadeIn" data-wow-duration="4s">
          <div class="about-item__title"
            style="background: url(/local/templates/.default/assets/img/icons/Eyeglasses.svg)no-repeat left center/32px 32px;">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/en/about/title4.php"
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
                "PATH" => "/local/include/en/about/text4.php"
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
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
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
			1 => "DESCRIPTION",
			2 => "",
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
          "PATH" => "/local/include/en/stages/title.php"
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
                  "PATH" => "/local/include/en/stages/title1.php"
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
                  "PATH" => "/local/include/en/stages/text1.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle block-img_first">
              <img src="/local/templates/.default/assets/img/stages/b1.svg" class="block-img-pic block-img_1" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b1.1.svg" class="block-img-pic block-img_2" alt="Картинка">
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
                  "PATH" => "/local/include/en/stages/title2.php"
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
                  "PATH" => "/local/include/en/stages/text2.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle">
              <img src="/local/templates/.default/assets/img/stages/b2.1.svg" class="block-img-pic block-img_3" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b2.2.svg" class="block-img-pic block-img_4" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b2.3.svg" class="block-img-pic block-img_5" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b2.4.svg" class="block-img-pic block-img_6" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b2.5.svg" class="block-img-pic block-img_7" alt="Картинка">
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
                  "PATH" => "/local/include/en/stages/title3.php"
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
                  "PATH" => "/local/include/en/stages/text3.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle">
              <img src="/local/templates/.default/assets/img/stages/b3.svg" class="block-img-pic block-img_8" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b3.svg" class="block-img-pic block-img_9" alt="Картинка">
              <img src="/local/templates/.default/assets/img/stages/b3.svg" class="block-img-pic block-img_10" alt="Картинка">
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
                  "PATH" => "/local/include/en/stages/title4.php"
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
                  "PATH" => "/local/include/en/stages/text4.php"
                )
              );?>
            </div>
          </div>
          <div class="block-img">
            <div class="block-img_circle">
              <img src="/local/templates/.default/assets/img/stages/b4.svg" class="block-img-pic block-img_11" alt="Картинка">
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
          "PATH" => "/local/include/en/practices/title.php"
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
          "PATH" => "/local/include/en/practices/desc.php"
        )
      );?>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"practices.list", 
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
		"IBLOCK_ID" => "14",
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
		"COMPONENT_TEMPLATE" => "practices.list"
	),
	false
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
          "PATH" => "/local/include/en/certificates/title.php"
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
          "PATH" => "/local/include/en/certificates/desc.php"
        )
      );?>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"category-tabs", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "Content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "ID",
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
		"COMPONENT_TEMPLATE" => "category-tabs"
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
        "IBLOCK_ID" => "11",
        "IBLOCK_TYPE" => "Content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
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
        "COMPONENT_TEMPLATE" => "certificate.list"
      ),
      false
    );?>
  </div>
</section>
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
          "PATH" => "/local/include/en/gratitude/title.php"
        )
      );?>
    </h2>
    <//?$APPLICATION->IncludeComponent(
      "bitrix:news.list", 
      "gratitude.list", 
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
        "IBLOCK_ID" => "13",
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
          0 => "NAME",
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
        "COMPONENT_TEMPLATE" => "gratitude.list"
      ),
      false
    );?>
  </div>
</section> -->
<?endif;?>
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
            "PATH" => "/local/include/en/contacts/title.php"
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
            "PATH" => "/local/include/en/contacts/desc.php"
          )
        );?>
      </div>
      <?$APPLICATION->IncludeComponent(
        "spiks:main.feedback",
        "ContactsPageForm",
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
          "COMPONENT_TEMPLATE" => "ContactsPageForm",
          "OK_TEXT" => ""
        ),
        false
      );?>
    </div>
    <div class="map-fone" id="map">
      <script id="ymap_lazy" data-skip-moving="true" data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A63ec7192f3402a96008e562fb24a54d285a788f6d1c6928f6143370fcbd0bde9&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
  </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
