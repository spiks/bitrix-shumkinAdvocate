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
<div class="certificates-wrapper wow fadeInUp" data-wow-duration="1s">
  <div class="swiper certificates__slider certificates__slider" >
    <div class="swiper-wrapper certificates__swiper">
      <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <? 
          $resize_image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], 
          Array("width" => 389, "height" => 534),
          BX_RESIZE_IMAGE_EXACT, false);
        ?> 
        <a href="<?= $resize_image['src'] ?>" class="swiper-slide certificates__slide" data-fancybox="<?= $arItem['TITLE'] ?>" data-id="<?= $arItem['IBLOCK_SECTION_ID'] ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
          <picture>
            <source srcset="<?= $resize_image['src'] ?>" type="image/webp"><img src="<?= $resize_image['src'] ?>"
              alt="<?= $arItem['TITLE'] ?>"></picture>
        </a>
      <?endforeach;?>
    </div>
    <div class="navigation">
      <div class="swiper-button-prev certificates-prev">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M26.6667 14.6667H10.44L17.8933 7.21337L16 5.33337L5.33334 16L16 26.6667L17.88 24.7867L10.44 17.3334H26.6667V14.6667Z"
            fill="#FFEDBD" />
        </svg>
      </div>
      <div class="swiper-pagination certificates-pagination certificates-pagination"></div>
      <div class="swiper-button-next certificates-next">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M5.33333 17.3333H21.56L14.1067 24.7866L16 26.6666L26.6667 16L16 5.33329L14.12 7.21329L21.56 14.6666L5.33333 14.6666V17.3333Z"
            fill="#FFEDBD" />
        </svg>
      </div>
    </div>
  </div>
</div>





