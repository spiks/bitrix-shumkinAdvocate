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

<div class="swiper gratitude__slider wow fadeIn" data-wow-duration="3s">
  <div class="swiper-wrapper gratitude__swiper">
    <?foreach($arResult["ITEMS"] as $arItem):?>

      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>
      <div class="swiper-slide gratitude__slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="gratitude__slide_title"><?= $arItem['NAME'] ?></div>
        <div class="gratitude__slide_text">
          <?= $arItem['~PREVIEW_TEXT']?>
        </div>
        <div class="gratitude__slide_name">
          <?= $arItem['DISPLAY_PROPERTIES']['NAME']['~VALUE']?>
        </div>
      </div>
    <?endforeach;?>
  </div>
  <div class="navigation">
    <div class="swiper-button-prev gratitude-prev">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="#FFEDBD" />
      </svg>
    </div>
    <div class="swiper-button-next gratitude-next">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 13L16.17 13L10.58 18.59L12 20L20 12L12 4L10.59 5.41L16.17 11L4 11L4 13Z" fill="#FFEDBD" />
      </svg>
    </div>
  </div>
</div>
