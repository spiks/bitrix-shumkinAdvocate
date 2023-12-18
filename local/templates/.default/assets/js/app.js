/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

;// CONCATENATED MODULE: ./src/js/files/functions.js
// Добавление loaded для HTML после полной загрузки страницы
function addLoadedClass() {
  window.addEventListener("load", function () {
    setTimeout(function () {
      document.documentElement.classList.add('loaded');
    }, 0);
  });
}
// Вспомогательные модули блокировки прокрутки и скочка ====================================================================================================================================================================================================================================================================================
let bodyLockStatus = true;
let bodyLockToggle = (delay = 500) => {
  if (document.documentElement.classList.contains('lock')) {
    bodyUnlock(delay);
  } else {
    bodyLock(delay);
  }
}
let bodyUnlock = (delay = 500) => {
  let body = document.querySelector("body");
  if (bodyLockStatus) {
    let lock_padding = document.querySelectorAll("[data-lp]");
    setTimeout(() => {
      for (let index = 0; index < lock_padding.length; index++) {
        const el = lock_padding[index];
        el.style.paddingRight = '0px';
      }
      body.style.paddingRight = '0px';
      document.documentElement.classList.remove("lock");
    }, delay);
    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
}
let bodyLock = (delay = 500) => {
  let body = document.querySelector("body");
  if (bodyLockStatus) {
    let lock_padding = document.querySelectorAll("[data-lp]");
    for (let index = 0; index < lock_padding.length; index++) {
      const el = lock_padding[index];
      el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    }
    body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    document.documentElement.classList.add("lock");

    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
}

// Модуь работы с меню (бургер) =======================================================================================================================================================================================================================
function menuInit() {
  let wrapper = document.querySelector(".wrapper"),
      close = document.querySelector(".close"),
      menuBody = document.querySelector(".menu__body"),
      header = document.querySelector(".header");
  document.addEventListener("click", function (e) {
    let target = e.target;
    if (target.closest(".icon-menu")) {
      if (bodyLockStatus) {
        bodyLockToggle();
        document.documentElement.classList.add("menu-open");
      }
    } else if (!target.closest(".menu-block__body") || target.closest(".close") || target.closest(".menu__link") ) { 
      menuClose();
    }
  });
}
function menuOpen() {
  bodyLock();
}
function menuClose() {
  bodyUnlock();
  document.documentElement.classList.remove("menu-open");
}

//плавный scroll
let functions_scroll = new SmoothScroll('a[href*="#"]', {
  speed: 600
});

//Инициализация wow анимации
new WOW().init();

//fancybox
$.fancybox.defaults.backFocus = false;

//Открытие модального окна
$('.btn-callback').click(function () {
  $.fancybox.open({
    src: '.popup-callback',
    type: 'inline',
    touch: false,
  });
});
//Открытие модального окна
$('.btn-success').click(function () {
  $.fancybox.open({
    src: '.popup-success',
    type: 'inline',
    touch: false,
  });
});



$(document).on('keyup keydown', '[data-mask="name"]', function (event) {
  if ("1234567890".indexOf(event.key) != -1) event.preventDefault();
});

window.addEventListener('DOMContentLoaded' , () =>{
  document.addEventListener('click', (item)=>{
    let target = item.target,
        btnServices = document.querySelectorAll('.btn-callback'),
        nameServ = document.querySelector('.name-service');
      if(target.closest('.btn-callback')){
        btnServices.forEach(function(item){
          let valueBtn = item.getAttribute("data-value");
            if(item.parentNode === target.parentNode){
              nameServ.value = valueBtn;
            }
        })
      }
    });
});

$(document).ready(function(){
  //Открытие модального окна
  $(document).on('click', '.practices__slide_more',function () {
    $.fancybox.open({
      src: '.popup-practics',
      type: 'inline',
      touch: false,
    });

    let namePractics = $(this).attr('data-name');
    let textPractics = $(this).attr('data-text');
    $('.form-title_practics').html(namePractics);
    $('.form-text_practics').html(textPractics);
  });
})

;// CONCATENATED MODULE: ./src/js/modules/dynamic_adapt.js
// Dynamic Adapt v.1
// HTML data-da="where(uniq class name),when(breakpoint),position(digi)"
// e.x. data-da=".item,992,2"



function DynamicAdapt(type) {
  this.type = type;
}
DynamicAdapt.prototype.init = function () {
  const _this = this;
  // массив объектов
  this.оbjects = [];
  this.daClassname = "_dynamic_adapt_";
  // массив DOM-элементов
  this.nodes = document.querySelectorAll("[data-da]");
  // наполнение оbjects объктами
  for (let i = 0; i < this.nodes.length; i++) {
    const node = this.nodes[i];
    const data = node.dataset.da.trim();
    const dataArray = data.split(",");
    const оbject = {};
    оbject.element = node;
    оbject.parent = node.parentNode;
    оbject.destination = document.querySelector(dataArray[0].trim());
    оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
    оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
    оbject.index = this.indexInParent(оbject.parent, оbject.element);
    this.оbjects.push(оbject);
  }
  this.arraySort(this.оbjects);
  // массив уникальных медиа-запросов
  this.mediaQueries = Array.prototype.map.call(this.оbjects, function (item) {
    return '(' + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
  }, this);
  this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, function (item, index, self) {
    return Array.prototype.indexOf.call(self, item) === index;
  });
  // навешивание слушателя на медиа-запрос
  // и вызов обработчика при первом запуске
  for (let i = 0; i < this.mediaQueries.length; i++) {
    const media = this.mediaQueries[i];
    const mediaSplit = String.prototype.split.call(media, ',');
    const matchMedia = window.matchMedia(mediaSplit[0]);
    const mediaBreakpoint = mediaSplit[1];
    // массив объектов с подходящим брейкпоинтом
    const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
      return item.breakpoint === mediaBreakpoint;
    });
    matchMedia.addListener(function () {
      _this.mediaHandler(matchMedia, оbjectsFilter);
    });
    this.mediaHandler(matchMedia, оbjectsFilter);
  }
};
DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
  if (matchMedia.matches) {
    for (let i = 0; i < оbjects.length; i++) {
      const оbject = оbjects[i];
      оbject.index = this.indexInParent(оbject.parent, оbject.element);
      this.moveTo(оbject.place, оbject.element, оbject.destination);
    }
  } else {
    //for (let i = 0; i < оbjects.length; i++) {
    for (let i = оbjects.length - 1; i >= 0; i--) {
      const оbject = оbjects[i];
      if (оbject.element.classList.contains(this.daClassname)) {
        this.moveBack(оbject.parent, оbject.element, оbject.index);
      }
    }
  }
};
// Функция перемещения
DynamicAdapt.prototype.moveTo = function (place, element, destination) {
  element.classList.add(this.daClassname);
  if (place === 'last' || place >= destination.children.length) {
    destination.insertAdjacentElement('beforeend', element);
    return;
  }
  if (place === 'first') {
    destination.insertAdjacentElement('afterbegin', element);
    return;
  }
  destination.children[place].insertAdjacentElement('beforebegin', element);
}
// Функция возврата
DynamicAdapt.prototype.moveBack = function (parent, element, index) {
  element.classList.remove(this.daClassname);
  if (parent.children[index] !== undefined) {
    parent.children[index].insertAdjacentElement('beforebegin', element);
  } else {
    parent.insertAdjacentElement('beforeend', element);
  }
}
// Функция получения индекса внутри родителя
DynamicAdapt.prototype.indexInParent = function (parent, element) {
  const array = Array.prototype.slice.call(parent.children);
  return Array.prototype.indexOf.call(array, element);
};
// Функция сортировки массива по breakpoint и place 
// по возрастанию для this.type = min
// по убыванию для this.type = max
DynamicAdapt.prototype.arraySort = function (arr) {
  if (this.type === "min") {
    Array.prototype.sort.call(arr, function (a, b) {
      if (a.breakpoint === b.breakpoint) {
        if (a.place === b.place) {
          return 0;
        }

        if (a.place === "first" || b.place === "last") {
          return -1;
        }

        if (a.place === "last" || b.place === "first") {
          return 1;
        }

        return a.place - b.place;
      }

      return a.breakpoint - b.breakpoint;
    });
  } else {
    Array.prototype.sort.call(arr, function (a, b) {
      if (a.breakpoint === b.breakpoint) {
        if (a.place === b.place) {
          return 0;
        }

        if (a.place === "first" || b.place === "last") {
          return 1;
        }

        if (a.place === "last" || b.place === "first") {
          return -1;
        }

        return b.place - a.place;
      }

      return b.breakpoint - a.breakpoint;
    });
    return;
  }
};
const da = new DynamicAdapt("max");
da.init();
;// CONCATENATED MODULE: ./src/js/modules/sliders.js
// Добавление классов слайдерам
// swiper главному блоку, swiper-wrapper оболочке, swiper-slide для слайдов
function bildSliders() {
    //BildSlider
    let sliders = document.querySelectorAll('[class*="__swiper"]:not(.swiper-wrapper)');
    if (sliders) {
        sliders.forEach(slider => {
            slider.parentElement.classList.add('swiper');
            slider.classList.add('swiper-wrapper');
            for (const slide of slider.children) {
                slide.classList.add('swiper-slide');
            }
        });
    }
}
// Инициализация слайдеров
function initSliders() {
    // Добавление классов слайдера
    // при необходимости отключить
    bildSliders();

    // Перечень слайдеров
    if (document.querySelector('.services__slider')) {
      const servicesSlider = new Swiper('.services__slider', {
        observer: true,
        observeParents: true,
        slidesPerView: 'auto',
        spaceBetween: 0,
        watchOverflow: true,
        speed: 800,
        navigation: {
            nextEl: '.services-next',
            prevEl: '.services-prev',
        },
        breakpoints: {
          320: {
            centeredSlides: true,
            initialSlide: 1,
          },
          1023.98: {
            centeredSlides: false,
            initialSlide: 0,
          },
        },
      });
    }
    if (document.querySelector('.stages__slider')) {   
      new Swiper('.stages__slider', {
        observer: true,
        observeParents: true,
        slidesPerView: 1,
        spaceBetween: 0,
        watchOverflow: true,
        speed: 800,
        // mousewheel: true,
        grabCursor: true,
        autoHeight: true,
        navigation: {
            nextEl: '.stages-next',
            prevEl: '.stages-prev',
        },
        pagination: {
          el: ".stages-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + '<div>'+0+(index + 1)+'</div>' + "</span>";
          },

        },
        
        breakpoints: {
          320: {
            direction: "horizontal",
          },
          1023.98: {
            direction: "vertical",
          },
        },
        on: {
          init: function (slide) {
            slideViewPerCol(slide);
          },
          slideChange: function (slide) {
            slideViewPerCol(slide);
          }
        },

      });
      function slideViewPerCol(slide) {
        let startSlide = slide.snapIndex;
        let endSlide = slide.snapIndex;
        $.each(slide.slides, function (index, el) {
            if (index >= startSlide && index <= endSlide) $(el).addClass('stages__slide-visible');
            else $(el).removeClass('stages__slide-visible');
        });
      };
    }
    if (document.querySelector('.practices__slider')) {
      window.practices = function (){
        new Swiper('.practices__slider', {
          observer: true,
          observeParents: true,
          slidesPerView: 2,
          spaceBetween: 80,
          watchOverflow: true,
          speed: 800,
          navigation: {
              nextEl: '.practices-next',
              prevEl: '.practices-prev',
          },
          pagination: {
            el: ".practices-pagination",
            clickable: true,
          },
          breakpoints: {
            320: {
              slidesPerView: 1,
            },
            1023.98: {
              slidesPerView: 2,
            },
          },
          on: {
            init: function (slide) {
              slideViewPerCol(slide);
            },
            slideChange: function (slide) {
              slideViewPerCol(slide);
            }
          }
        });
        function slideViewPerCol(slide) {
          const width = window.innerWidth;
          if (width > 1023.98) {
            let startSlide = slide.snapIndex;
            let endSlide = slide.snapIndex + 1;
            $.each(slide.slides, function (index, el) {
                if (index >= startSlide && index <= endSlide) $(el).addClass('practices__slide-visible');
                else $(el).removeClass('practices__slide-visible');
            });
          }
        };
      }
      practices();
    }
    if (document.querySelector('.gratitude__slider')) {
      new Swiper('.gratitude__slider', {
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        observer: true,
        observeParents: true,
        slidesPerView: 1,
        spaceBetween: 60,
        watchOverflow: true,
        speed: 800,
        autoHeight: true,
        navigation: {
          nextEl: '.gratitude-next',
          prevEl: '.gratitude-prev',
      },
        on: {
          init: function (slide) {
            slideViewPerCol(slide);
          },
          slideChange: function (slide) {
            slideViewPerCol(slide);
          }
        },

      });
      function slideViewPerCol(slide) {
        const width = window.innerWidth;
        if (width > 479.98) {
          let startSlide = slide.snapIndex;
          let endSlide = slide.snapIndex;
          $.each(slide.slides, function (index, el) {
              if (index >= startSlide && index <= endSlide) $(el).addClass('gratitude__slide-visible');
              else $(el).removeClass('gratitude__slide-visible');
          });
        };
      };
    }
}
window.addEventListener("load", function (e) {
    // Запуск инициализации слайдеров
    initSliders();
});
;// CONCATENATED MODULE: ./src/js/modules/isWebp.js
/* Проверка поддержки webp, добавление класса webp или no-webp для HTML */
function isWebp() {
	// Проверка поддержки webp
	function testWebP(callback) {
		let webP = new Image();
		webP.onload = webP.onerror = function () {
			callback(webP.height == 2);
		};
		webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
	}
	// Добавление класса _webp или _no-webp для HTML
	testWebP(function (support) {
		let className = support === true ? 'webp' : 'no-webp';
		document.documentElement.classList.add(className);
	});
}
/* harmony default export */ const modules_isWebp = (isWebp);
;// CONCATENATED MODULE: ./src/js/modules/validation.js
const validate = () =>{
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
        required: "Некорректный номер телефона",
      },
      checkbox: {
        required: "Поставьте галочку",
      },
    },
  });
  $(".form-popup").validate({
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
        required: "Некорректный номер телефона",
      },
      checkbox: {
        required: "Поставьте галочку",
      },
    },
  });
}
/* harmony default export */ const validation = (validate);
;// CONCATENATED MODULE: ./src/js/modules/inputmask.js
  //маска для ввода телефона
  const inputmask = () => {
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
};
/* harmony default export */ const modules_inputmask = (inputmask);
;// CONCATENATED MODULE: ./src/js/modules/scrollHeader.js
  const scrollHeader = () => {
    let lastScroll = 70,
      defaultOffset = 70;
      // languageBlock = document.querySelector('.language-block');

    const header = document.querySelector('.header'),
      scrollPosition = () => window.pageYOffset || document.documentElement.scrollTop;
    window.addEventListener('scroll', () => {
      if (scrollPosition() < lastScroll) {
        header.classList.add('header-active');
        header.classList.remove('header-active2');
        // languageBlock.classList.remove('active');
      } else if (scrollPosition() > lastScroll && scrollPosition() > defaultOffset) {
        header.classList.add('header-active2');
        // languageBlock.classList.remove('active');
      }
      if (scrollPosition() <= defaultOffset) {
        header.classList.remove('header-active');
      }
      lastScroll = scrollPosition();
    });

  };
  window.addEventListener("resize", scrollHeader);
  /* harmony default export */ const modules_scrollHeader = (scrollHeader);
;// CONCATENATED MODULE: ./src/js/modules/cookiesFile.js
// cookies
const cookiesFile = () => {
  document.addEventListener('click', (item)=>{
    let target = item.target,
        cookies = document.querySelector('.cookies');
      
      if(target.closest('.cookies-btn__cancel')){
        cookies.classList.add('cookies-active');
      } else if(target.closest('.cookies-btn__sucsess')){
        cookies.classList.add('cookies-active');
        $.cookie('COOKIE_AGREE', 'Y',{ expires: 14 });
      }
  });
}
/* harmony default export */ const modules_cookiesFile = (cookiesFile);

;// CONCATENATED MODULE: ./src/js/files/script.js
// переключение языка 
// let language = document.querySelector('.language'),
//     languageBlock = document.querySelector('.language-block');

//     document.addEventListener('click',(item)=>{
//       let target = item.target;
//       if(target.closest('.language')){
//         languageBlock.classList.toggle('active');
//       }else if(!target.closest('.language-block')){
//         languageBlock.classList.remove('active');
//       }
//     })

window.addEventListener('DOMContentLoaded' , () =>{
// Выбор сертефиката 
let certificatesTabsItem = document.querySelectorAll('.certificates-tabs__item'),
    certificatesSlide = document.querySelectorAll('.certificates__slide');

    certificatesTabsItem.forEach(function(item){
      if(item.closest('.certificates-tabs__item_active')){
        
        certificatesSlide.forEach(function(elem){
          if(item.getAttribute('data-tab') === elem.getAttribute('data-id')){
            elem.style.display = 'block';
          }else if(item.getAttribute('data-tab') !== elem.getAttribute('data-id')){
              elem.style.display = 'none';
            }
          });
        }
    })

if (document.querySelector('.certificates__slider')) {
  let certificates = new Swiper('.certificates__slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    speed: 800,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 78,
      },
      767.98: {
        slidesPerView: 2,
        spaceBetween: 78,
      },
      1023.98: {
        slidesPerView: 3,
        spaceBetween: 44,
      },
    },
    pagination: {
      el: ".certificates-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: '.certificates-next',
        prevEl: '.certificates-prev',
    },
    
  });

  
  certificatesTabsItem.forEach((elem) => {
    elem.addEventListener('click',function(item){
      let target = item.target;

      if(target === target.closest('.certificates-tabs__item')){
        certificatesTabsItem.forEach((item) => {
          item.classList.remove('certificates-tabs__item_active');
        })
        target.classList.add('certificates-tabs__item_active');

      }

      certificatesSlide.forEach(function(elem){
        if(target.closest('.certificates-tabs__item_active')){
          if(target.getAttribute('data-tab') === elem.getAttribute('data-id')){
            elem.style.display = 'block';
            certificates.update();
          }else if(target.getAttribute('data-tab') !== elem.getAttribute('data-id')){
            elem.style.display = 'none';
          }
        }

      });
      
    });
  });
};
})

// Блок в слайдере

const btnMore = document.querySelectorAll('.btn-more'),
      slideBlockClose = document.querySelectorAll('.slide-block__close'),
      slideBlock = document.querySelector('.slide-block'),
      servicesPrev = document.querySelector('.services-prev'),
      servicesNext = document.querySelector('.services-next'),
      slideBlockInfo = document.querySelector('.slide-block-info'),
      slideHidden = document.querySelectorAll('.slide-hidden'),
      btnServicesCard = document.querySelector('.btn-services-card');

btnMore.forEach((btn)=>{     
  btn.addEventListener('click',function (item){
    let target = item.target;
    servicesNext.style.display = "none";
    servicesPrev.style.display = "none";
    slideBlock.classList.add('slide-block-active');
    slideHidden.forEach((elem)=>{
      if(elem.parentNode == target.parentNode.parentNode){
        slideBlockInfo.insertAdjacentHTML('afterBegin', elem.innerHTML);
      }
    });
    let name = target.getAttribute('data-value');
    btnServicesCard.setAttribute('data-value', name);
    let images = target.getAttribute('data-img');
    slideBlock.style.backgroundImage = "url("+images+")";
  });
});
slideBlockClose.forEach((close)=>{   
  close.addEventListener('click',function (item){
    let target = item.target;
    servicesNext.style.display = "block";
    servicesPrev.style.display = "block";
    slideBlock.classList.remove('slide-block-active');
    slideBlockInfo.innerHTML='';
  });
});
;// CONCATENATED MODULE: ./src/js/app.js
// Основные модули ========================================================================================================================================================================================================================================================



/* Модуль для работы с меню (Бургер) */
menuInit();
/* Добавление loaded для HTML после полной загрузки страницы */
addLoadedClass();
/* Динамический адаптив */

// Модуль работы с слайдером  (swiper) ====================================================================================================================================================================================================================================================================================








// import map from "./modules/map.js";
// import tabs from "./modules/tabs.js";


// JS isWebp
modules_isWebp();
// JS mask
modules_inputmask();
// JS скролл меню
modules_scrollHeader();
// JS tabs
// tabs();
// JS карта
// map();
// JS валидация форм
validation();
// cookiesFile
modules_cookiesFile();
// Прочее ========================================================================================================================================================================================================================================================

/* Подключаем файлы со своим кодом */

/******/ })()
;