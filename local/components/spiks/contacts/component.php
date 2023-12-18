<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
  CModule::IncludeModule("iblock");
  $contactsData = CIBlockElement::GetList(array(),array("IBLOCK_CODE"=>"contacts","CODE"=>"contacts"),false,false,array());
  if($contacts = $contactsData->GetNextElement()){
    $contact = $contacts->GetProperties();
    foreach ($contact as $key => $property) {
      $GLOBALS[$property['CODE']] = $property['VALUE'];
      $GLOBALS[$property['CODE'].'_CLEAR'] = str_replace(Array(',','.','(',')',' ', '-', '+'),'',$property['VALUE']);
    }
  }
?>
