<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="swiper practices__slider wow fadeInUp" data-wow-duration="1s">
  <div class="swiper-wrapper practices__swiper">
    <?foreach($arResult["ITEMS"] as $arItem):?>
      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>
      <div class="swiper-slide practices__slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="practices__slide_title"><?= $arItem['NAME'] ?></div>
        <div class="practices__slide_text">
          <?= $arItem['~PREVIEW_TEXT']?>
        </div>
        <div class="practices__slide_more" data-name="<?= $arItem['NAME'] ?>" data-text="<?= $arItem['PREVIEW_TEXT'] ?>">Показать еще</div>
        <?if($arItem['DISPLAY_PROPERTIES']['PRACTICES_LINKS']['VALUE']):?>
          <a href="<?=$arItem['DISPLAY_PROPERTIES']['PRACTICES_LINKS']['FILE_VALUE']['SRC']?>" class="practices__slide_btn" target="_blank">Ознакомиться с делом </a>
        <?endif;?>
      </div>
    <?endforeach;?>
  </div>
  <div class="navigation">
    <div class="swiper-button-prev practices-prev">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M26.6667 14.6667H10.44L17.8933 7.21337L16 5.33337L5.33334 16L16 26.6667L17.88 24.7867L10.44 17.3334H26.6667V14.6667Z"
          fill="#314F65" />
      </svg>
    </div>
    <div class="swiper-pagination practices-pagination"></div>
    <div class="swiper-button-next practices-next">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M5.33333 17.3333H21.56L14.1067 24.7866L16 26.6666L26.6667 16L16 5.33329L14.12 7.21329L21.56 14.6666L5.33333 14.6666V17.3333Z"
          fill="#314F65" />
      </svg>
    </div>
  </div>
</div>
