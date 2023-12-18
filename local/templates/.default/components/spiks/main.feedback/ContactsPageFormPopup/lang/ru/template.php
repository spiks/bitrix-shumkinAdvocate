
<?if(stripos($_SERVER['REQUEST_URI'],'/en/') !== false){
  $MESS['NAME'] = 'Введите ваше имя на EN';
  $MESS['PHONE'] = 'Введите ваш номер телефона на EN';
  $MESS['PROBLEM'] = 'Кратко опишите свою проблему на EN';
  $MESS ['MFT_NAME'] = "Ваше имя на EN";
  $MESS ['MFT_PHONE'] = "Ваш телефон* на EN";
  $MESS ['MFT_SUBMIT'] = "Отправить на EN";
  $MESS ['MFT_MESSAGE'] = "Случилось это ... на EN";
  $MESS ['CHECKBOX'] = "Нажимая на эту кнопку вы соглашаетесь на обработку ваших персональных данных на EN";
  $MESS['PHONE_VALIDATE'] = 'Введите номер телефона на EN';
  $MESS['CHECKBOX_VALIDATE'] = 'Поставьте галочку на EN';

}elseif(stripos($_SERVER['REQUEST_URI'],'/iv/') !== false){
  $MESS['NAME'] = 'Введите ваше имя на IV';
  $MESS['PHONE'] = 'Введите ваш номер телефона на IV';
  $MESS['PROBLEM'] = 'Кратко опишите свою проблему на IV';
  $MESS ['MFT_NAME'] = "Ваше имя на IV";
  $MESS ['MFT_PHONE'] = "Ваш телефон* на IV";
  $MESS ['MFT_SUBMIT'] = "Отправить на IV";
  $MESS ['MFT_MESSAGE'] = "Случилось это ... на IV";
  $MESS ['CHECKBOX'] = "Нажимая на эту кнопку вы соглашаетесь на обработку ваших персональных данных на IV";
  $MESS['PHONE_VALIDATE'] = 'Введите номер телефона на IV';
  $MESS['CHECKBOX_VALIDATE'] = 'Поставьте галочку на IV';

}else{
  $MESS['NAME'] = 'Введите ваше имя';
  $MESS['PHONE'] = 'Введите ваш номер телефона';
  $MESS['PROBLEM'] = 'Кратко опишите свою проблему';
  $MESS ['MFT_NAME'] = "Ваше имя";
  $MESS ['MFT_PHONE'] = "Ваш телефон*";
  $MESS ['MFT_SUBMIT'] = "Отправить";
  $MESS ['MFT_MESSAGE'] = "Случилось это ...";
  $MESS ['CHECKBOX'] = "Нажимая на эту кнопку вы соглашаетесь на обработку ваших персональных данных";
  $MESS['PHONE_VALIDATE'] = 'Введите номер телефона';
  $MESS['CHECKBOX_VALIDATE'] = 'Поставьте галочку';
}?>