<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<script>
  $(".form-contacts").validate({
    errorClass: "invalid",
    rules: {
      user_phone: {
        required: true,
      },
      checkbox: {
        required: true,
      },
    },
    //сообщения
    messages: {
      user_phone: {
        required: `<?=GetMessage("PHONE_VALIDATE")?>`,
      },
      checkbox: {
        required: `<?=GetMessage("CHECKBOX_VALIDATE")?>`,
      },
    },
  });
</script>
<?if(!empty($arResult["ERROR_MESSAGE"]))
  {
    foreach($arResult["ERROR_MESSAGE"] as $v)
      ShowError($v);
  }
?>
<?if($arResult["OK_MESSAGE"] <> ''):?>
  <script type="text/javascript">
    $.fancybox.open({
      src: '.popup-success',
      type: 'inline',
      touch: false,
    });

    $("input[type=tel]").mask("+7 (999) 999-99-99");

    $.fn.setCursorPosition = function (pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };
    $('input[type=tel]').click(function () {
        $(this).setCursorPosition(4); // set position number
    });

    $(".form-contacts").validate({
      errorClass: "invalid",
      rules: {
        user_phone: {
          required: true,
        },
        checkbox: {
          required: true,
        },
      },
      //сообщения
      messages: {
        user_phone: {
          required: "<?=GetMessage("PHONE_VALIDATE")?>",
        },
        checkbox: {
          required: "<?=GetMessage("CHECKBOX_VALIDATE")?>",
        },
      },
    });
  </script>
<?endif;?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST"  class="form-contacts">
  <?=bitrix_sessid_post()?>
  <div class="form-wrapper">
    <div class="form-wrapper-block">
      <div class="form-wrapper-item">
        <label><?=GetMessage("NAME")?></label>
        <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" class="input" placeholder="<?=GetMessage("MFT_NAME")?>" maxlength="15" data-mask="name">
      </div>
      <div class="form-wrapper-item">
        <label><?=GetMessage("PHONE")?></label>
        <input type="tel" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" class="input" placeholder="<?=GetMessage("MFT_PHONE")?>" required>
      </div>
      <div class="form-wrapper-item">
        <label><?=GetMessage("PROBLEM")?></label>
        <textarea name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?>" maxlength="150"><?=$arResult["MESSAGE"]?></textarea>
      </div>
    </div>
    <div class="form-checkbox">
      <label class="checkbox-label">
        <input type="checkbox" class="custom-checkbox" name="checkbox" value="yes" checked="checked" tabindex = "-1">
        <span class="checkbox__check"></span>
        <span class="checkbox__title"><?=GetMessage("CHECKBOX")?></span>
      </label>
    </div>
    <input type="submit" name="submit" class="form-btn button" value="<?=GetMessage("MFT_SUBMIT")?>">
    <input type="hidden" name="user_title" class="name-contacts" value="Контакты">
    <input type="text" name="name_user" class="name_user">
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
  </div>
</form>
