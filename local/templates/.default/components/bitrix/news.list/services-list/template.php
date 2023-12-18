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

<?$count?>
<section class="services" id="services">
  <div class="swiper services__slider">
    <div class="swiper-wrapper services__swiper">
      <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?
          $resize_image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
          Array("width" => 360, "height" => 550),
          BX_RESIZE_IMAGE_EXACT, false);
        ?>
        <div class="swiper-slide services__slide" style="background: url(<?= $resize_image['src'] ?>)no-repeat center/cover;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
          <div class="title"><?= $arItem['NAME'] ?></div>
          <div class="services__slide_text">
            <?= $arItem['~PREVIEW_TEXT']?>
          </div>
          <div class="button-group">
            <div class="button btn-callback" data-value="<?= $arItem['NAME'] ?>">
              <?if(stripos($_SERVER['REQUEST_URI'],'/en/') !== false){?>
                Request service
              <?}elseif(stripos($_SERVER['REQUEST_URI'],'/iv/') !== false){?>
                שירות הזמנה
              <?}else{?>
                Обратиться
              <?}?>
            </div>
            <div class="button button-white btn-more" data-value="<?= $arItem['NAME'] ?>" data-img="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
              <?if(stripos($_SERVER['REQUEST_URI'],'/en/') !== false){?>
                More
              <?}elseif(stripos($_SERVER['REQUEST_URI'],'/iv/') !== false){?>
                יותר
              <?}else{?>
                Подробнее
              <?}?>
            </div>
          </div>
          <div class="number">
           <?echo str_pad($count = $count + 1, 2, 0, STR_PAD_LEFT)?>
          </div>
          <div class="slide-hidden">
            <h3><?= $arItem['NAME'] ?></h3>
            <div class="slide-block-info-text" data-simplebar>
              <?= $arItem['~DETAIL_TEXT']?>
            </div>
          </div>
        </div>
      <?endforeach;?>
    </div>
    
    <div class="slide-block" style="background: url()no-repeat center/cover;">
      <div class="slide-block-info"></div>
      <div class="slide-block__close"></div>
      <div class="button btn-callback btn-services-card" data-value="">Заказать услугу</div>
    </div>

    <div class="swiper-button-prev services-prev">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M23.3467 5.15999L20.9733 2.79999L7.78668 16L20.9867 29.2L23.3467 26.84L12.5067 16L23.3467 5.15999Z"
          fill="white" />
      </svg>
    </div>
    <div class="swiper-button-next services-next">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M8.65332 5.15999L11.0267 2.79999L24.2133 16L11.0133 29.2L8.65332 26.84L19.4933 16L8.65332 5.15999Z"
          fill="white" />
      </svg>
    </div>
  </div>
</section>
