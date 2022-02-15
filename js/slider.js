document.addEventListener("DOMContentLoaded", () => {
  function disabledScroll() {
  	var paddingOffset = window.innerWidth - $('body').outerWidth() + 'px';
  	$('body').css('overflow', 'hidden');
  	$('body').css('padding-right', paddingOffset);
  }
  function enableScroll() {
  	$('body').css('overflow', 'auto');
  	$('body').css('padding-right', 0);
  }
  const swiperMain = new Swiper('.home-slider', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 5,
    speed: 1600,
    loop: true,
    navigation: {
      nextEl: '.swiperMain-next',
      prevEl: '.swiperMain-prev',
    },
    autoplay: {
      delay: 3300,
      disableOnInteraction: false
    },
    breakpoints: {
      320: {
        spaceBetween: 0,
      },
      480: {
        spaceBetween: 5,
      }
    },
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
  });
  const peculiaritiesSliderOne = new Swiper('.peculiaritiesSliderOne', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 0,
    speed: 1100,
    loop: true,
    navigation: {
      nextEl: '.peculiaritiesSliderOne-next',
      prevEl: '.peculiaritiesSliderOne-prev',
    },
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
  });
  const peculiaritiesSliderTwo = new Swiper('.peculiaritiesSliderTwo', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 0,
    speed: 1100,
    loop: true,
    navigation: {
      nextEl: '.peculiaritiesSliderTwo-next',
      prevEl: '.peculiaritiesSliderTwo-prev',
    },
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
  });
  peculiaritiesSliderOne.controller.control = peculiaritiesSliderTwo;
  peculiaritiesSliderTwo.controller.control = peculiaritiesSliderOne;
  $('.peculiarities-sticky-link').click(function(e){
		e.preventDefault();
    $('.peculiarities-sticky-link').removeClass('active');
    $('.peculiarities-block-wrapper').removeClass('active');
    var dataLink = $(this).attr('data-link');
    $(`.peculiarities-sticky-link[data-link="${dataLink}"]`).addClass('active');
    $(`.${$(this).attr('data-link')}`).addClass('active');
		var target = $("#linktop").offset().top;
		$("html, body").animate({scrollTop: target-150}, 800);
  });
  const swiper1 = new Swiper('.swiper1', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 5,
    speed: 1400,
    loop: true,
    pagination: {
      el: '.swiper1-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper1-next',
      prevEl: '.swiper1-prev',
    },
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
  });
  const swiper2 = new Swiper('.swiper2', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 5,
    speed: 1400,
    loop: true,
    pagination: {
      el: '.swiper2-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper2-next',
      prevEl: '.swiper2-prev',
    },
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
  });
  const swiper3 = new Swiper('.swiper3', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 5,
    speed: 1500,
    loop: true,
    pagination: {
      el: '.swiper3-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper3-next',
      prevEl: '.swiper3-prev',
    },
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
  });
  $('.gone').click(function(){
		$('.gallery-popup-one').addClass('show');
		disabledScroll();
	})
	$('.gtwo').click(function(){
		$('.gallery-popup-two').addClass('show');
		disabledScroll();
	})
	$('.gthree').click(function(){
		$('.gallery-popup-three').addClass('show');
		disabledScroll();
	})
  $('.peculiarities-video-one').click(function(){
    $('.peculiarities-popup-one').addClass('show');
    disabledScroll();
  })
  $('.peculiarities-video-two').click(function(){
    $('.peculiarities-popup-two').addClass('show');
    disabledScroll();
  })
	function closePeculiaritiesPopup() {
		$('.peculiarities-popup').removeClass('show'); // скрываем его
		enableScroll();
    $("iframe").each(function() {
      $(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')
    });
	}
  $('.peculiarities-popup-close').click(function(){closePeculiaritiesPopup()})
	$('.peculiarities-popup').mouseup(function (e){ // событие клика по веб-документу
		var div = $('.peculiarities-popup-video'); // тут указываем класс элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
			&& div.has(e.target).length === 0) { // и не по его дочерним элементам
        closePeculiaritiesPopup();
		}
	});
  function closeGalleryPopup() {
		$('.gallery-popup').removeClass('show'); // скрываем его
		enableScroll();
	}
	$('.gallery-popup-close').click(function(){closeGalleryPopup()})
	$('.gallery-popup').mouseup(function (e){ // событие клика по веб-документу
		var div = $('.gallery-popup-body'); // тут указываем класс элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
			&& div.has(e.target).length === 0) { // и не по его дочерним элементам
			closeGalleryPopup();
		}
	});
})