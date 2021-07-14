



$('.gallaryVideoLayer').hover(function (){
	$('.gallaryPlayBtnWrap').addClass('vivify ball')
},function (){
	$('.gallaryPlayBtnWrap').removeClass('vivify ball')
})

$(document).ready(function(){
	$(".hamkaran").owlCarousel();
});
$('.hamkaran').owlCarousel({
	loop:false,
	margin:10,
	rtl:true,
	animateOut: 'fadeOut',
	responsiveClass:true,
	responsive:{
		0:{
			items:1,
			nav:true,
			dots: false,
		},
		600:{
			items:3,
			nav:false
		},
		1000:{
			items:1,
			nav:true,
			dots: false,
			loop:false
		}
	}
})

$(document).ready(function(){
	$(".otherBooksSlider").owlCarousel();
});
$('.otherBooksSlider').owlCarousel({
	loop:false,
	margin:10,
	rtl:true,
	responsiveClass:true,
	responsive:{
		0:{
			items:1,
			nav:true
		},
		600:{
			items:3,
			nav:false
		},
		1000:{
			items:5,
			nav:false,
			dots: false,
		}
	}
})

$(document).ready(function(){
	$(".booksSlider").owlCarousel();
});
$('.booksSlider').owlCarousel({
	loop:false,
	margin:10,
	stagePadding: 250,
	rtl:true,
	responsiveClass:true,
	responsive:{
		0:{
			items:1,
			nav:true,
			stagePadding:0,
			margin:5,
			dots:false
		},
		600:{
			items:3,
			nav:false
		},
		1000:{
			items:1,
			nav:true,
			dots: false,
			loop:false
		}
	}
})

/*
$(window).scroll(function() {
	var scroll = $(window).scrollTop();


	if (scroll > 827) {
		$('#test1').removeClass('test');
		$('#test2').addClass('test')
	}
	if(scroll > 1670){
		$('#test2').removeClass('test')

		$('#test3').addClass('test')
	}
});*/


$('.icon').click(function (){
	// $('#menu').prop('checked',true)
	var checkBoxes = $('#menu');
	checkBoxes.prop("checked", !checkBoxes.prop("checked"));

	if($('#menu').is(':checked')){
		if ($(window).width() > 1000) {
			$('#navbarMenu').animate({width:"730px"},500)
		}else{
			$('#navbarMenu').addClass('menuM')
			$('header').css('position','unset')
			$('.icon').css('z-index',999)
			$('#top-menu-2').addClass('ulM')
			$('.enM').show()
		}


	}else {
		if ($(window).width() > 1000) {
			$('#navbarMenu').animate({width:"0px"},500)
		}else{
			$('#navbarMenu').removeClass('menuM')
			$('.enM').hide()
		}

	}
})



















$(document).ready(function () {
	$('.owl-prev,.owl-next').children().remove()
	$('.owl-prev').append('<i style="color: white;font-size: 30px;" class="fa fa-long-arrow-right"></i>')
	$('.owl-next').append('<i style="color: white;font-size: 30px;" class="fa fa-long-arrow-left"></i>')

})





let sections = document.getElementsByTagName('section');
let currentSectionIndex = 0;
var top = document.getElementsByTagName('section').offsetTop; //Getting Y of target element


document.addEventListener('wheel', e => {
	if (e.wheelDeltaY > 0 && currentSectionIndex - 1 >= 0) {
		// wheel up
		sections[currentSectionIndex].classList.remove("activee");

		currentSectionIndex--;
		// window.scrollTo({top: 0, behavior: 'smooth'});
		side(currentSectionIndex)
		console.log(currentSectionIndex)
		sections[currentSectionIndex].classList.add("activee");



	} else if (e.wheelDeltaY < 0 && currentSectionIndex + 1 < sections.length) {
		// wheel down

		sections[currentSectionIndex].classList.remove("activee");
		currentSectionIndex++;

		// window.scrollTo({top: 0, behavior: 'smooth'});
		side(currentSectionIndex);
		console.log()
		sections[currentSectionIndex].classList.add("activee");
		sections[currentSectionIndex].classList.add("vivify");
		sections[currentSectionIndex].classList.add("pullUp");
	}
});

let sideLine = document.getElementsByClassName('sideLine');


sideLine[0].addEventListener('click', e => {

	 if (currentSectionIndex + 1 < sections.length) {

		sections[currentSectionIndex].classList.remove("activee");
		currentSectionIndex++;
		 window.scrollTo({top: -20, behavior: 'smooth'});
		side(currentSectionIndex);
		sections[currentSectionIndex].classList.add("activee");
		sections[currentSectionIndex].classList.add("vivify");
		sections[currentSectionIndex].classList.add("pullUp");

	}
});






/*
var supportTouch = $.support.touch,
	scrollEvent = "touchmove scroll",
	touchStartEvent = supportTouch ? "touchstart" : "mousedown",
	touchStopEvent = supportTouch ? "touchend" : "mouseup",
	touchMoveEvent = supportTouch ? "touchmove" : "mousemove";
$.event.special.swipeupdown = {
	setup: function() {
		var thisObject = this;
		var $this = $(thisObject);
		$this.bind(touchStartEvent, function(event) {
			var data = event.originalEvent.touches ?
				event.originalEvent.touches[ 0 ] :
				event,
				start = {
					time: (new Date).getTime(),
					coords: [ data.pageX, data.pageY ],
					origin: $(event.target)
				},
				stop;

			function moveHandler(event) {
				if (!start) {
					return;
				}
				var data = event.originalEvent.touches ?
					event.originalEvent.touches[ 0 ] :
					event;
				stop = {
					time: (new Date).getTime(),
					coords: [ data.pageX, data.pageY ]
				};

				// prevent scrolling
				if (Math.abs(start.coords[1] - stop.coords[1]) > 10) {
					event.preventDefault();
				}
			}
			$this
				.bind(touchMoveEvent, moveHandler)
				.one(touchStopEvent, function(event) {
					$this.unbind(touchMoveEvent, moveHandler);
					if (start && stop) {
						if (stop.time - start.time < 100 &&
							Math.abs(start.coords[1] - stop.coords[1]) > 30 &&
							Math.abs(start.coords[0] - stop.coords[0]) < 75) {
							start.origin
								.trigger("swipeupdown")
								.trigger(start.coords[1] > stop.coords[1] ? "swipeup" : "swipedown");
						}
					}
					start = stop = undefined;
				});
		});
	}
};
$.each({
	swipedown: "swipeupdown",
	swipeup: "swipeupdown"
}, function(event, sourceEvent){
	$.event.special[event] = {
		setup: function(){
			$(this).bind(sourceEvent, $.noop);
		}
	};
});

$(document).on('swipedown',function(e){
	if (currentSectionIndex - 1 >= 0) {
		sections[currentSectionIndex].classList.remove("activee");
		currentSectionIndex--;
		side(currentSectionIndex)
		console.log(currentSectionIndex)
		sections[currentSectionIndex].classList.add("activee");
	}
});
$(document).on('swipeup',function(){
	if (currentSectionIndex + 1 < sections.length) {
		sections[currentSectionIndex].classList.remove("activee");
		currentSectionIndex++;
		side(currentSectionIndex);
		sections[currentSectionIndex].classList.add("activee");
		sections[currentSectionIndex].classList.add("vivify");
		sections[currentSectionIndex].classList.add("pullUp");

	}
});*/































function setupTypewriter(t) {
	var HTML = t.innerHTML;

	t.innerHTML = "";

	var cursorPosition = 0,
		tag = "",
		writingTag = false,
		tagOpen = false,
		typeSpeed = 50,
		tempTypeSpeed = 0;

	var type = function() {

		if (writingTag === true) {
			tag += HTML[cursorPosition];
		}

		if (HTML[cursorPosition] === "<") {
			tempTypeSpeed = 0;
			if (tagOpen) {
				tagOpen = false;
				writingTag = true;
			} else {
				tag = "";
				tagOpen = true;
				writingTag = true;
				tag += HTML[cursorPosition];
			}
		}
		if (!writingTag && tagOpen) {
			tag.innerHTML += HTML[cursorPosition];
		}
		if (!writingTag && !tagOpen) {
			if (HTML[cursorPosition] === " ") {
				tempTypeSpeed = 0;
			}
			else {
				tempTypeSpeed = (Math.random() * typeSpeed) + 50;
			}
			t.innerHTML += HTML[cursorPosition];
		}
		if (writingTag === true && HTML[cursorPosition] === ">") {
			tempTypeSpeed = (Math.random() * typeSpeed) + 50;
			writingTag = false;
			if (tagOpen) {
				var newSpan = document.createElement("span");
				t.appendChild(newSpan);
				newSpan.innerHTML = tag;
				tag = newSpan.firstChild;
			}
		}

		cursorPosition += 1;
		if (cursorPosition < HTML.length - 1) {
			setTimeout(type, tempTypeSpeed);
		}

	};

	return {
		type: type
	};
}

var typer = document.getElementById('typewriter');

typewriter = setupTypewriter(typewriter);

typewriter.type();


window.timeArray = [];
function side(foo) {
	if($("[data-secID='0']").hasClass( "activee" )){
		$('.sideSection').addClass('d-none')
	}else {
		$('.sideSection').removeClass('d-none')
		$('.sideSection').addClass('d-flex')
	}
	console.log(foo)
	switch (foo) {
		case 0:
			$('.sideSection').addClass('d-none')
			break;
		case 1:
			$('.numberside').html('۰۱').addClass('animate__animated animate__flash  animate__infinite animate__slower')
			$('.nameside').html('افتخارات')

			$('#ef-img1').addClass('animate__animated animate__bounceInDown animate__slower')
			$('#ef-img2').addClass('animate__animated animate__fadeInLeft animate__slower')
			$('#ef-img3').addClass('animate__animated animate__backInLeft animate__slower')

		break;
		case 2:
			$('.numberside').html('۰۲')
			$('.nameside').html('درباره او')
			$('#levels-wrapper').attr('style','--animate-sa:progress 10s  steps(1)')

			setTimeout(function () {
				$('#ex1').attr('style','--bg-color:#D9AF73').css('background','#D9AF73')
			},1000)

			setTimeout(function () {
				$('#ex1').attr('style','--bg-color:#02001E').css('background','#02001E')
				$('#ex2').attr('style','--bg-color:#D9AF73').css('background','#D9AF73')
			},2000)

			setTimeout(function () {
				$('#ex2').attr('style','--bg-color:#02001E').css('background','#02001E')
				$('#ex3').attr('style','--bg-color:#D9AF73').css('background','#D9AF73')
			},3000)

			setTimeout(function () {
				$('#ex3').attr('style','--bg-color:#02001E').css('background','#02001E')
				$('#ex4').attr('style','--bg-color:#D9AF73').css('background','#D9AF73')
			},4000)

			setTimeout(function () {
				$('#ex4').attr('style','--bg-color:#02001E').css('background','#02001E')
				$('#ex5').attr('style','--bg-color:#D9AF73').css('background','#D9AF73')
			},5000)

			setTimeout(function () {
				$('#ex5').attr('style','--bg-color:#02001E').css('background','#02001E')
				$('#ex6').attr('style','--bg-color:#D9AF73').css('background','#D9AF73')
			},6000)

			setTimeout(function () {
				$('#ex6').attr('style','--bg-color:#02001E').css('background','#02001E')
			},7000)

			
		break;
		case 3:


			$('.numberside').html('۰۳')
			$('.nameside').html('دانشگاه ها')
			/*$('#uni-img1').addClass('animate__animated  animate__backInDown')
			$('#uni-img2').addClass('animate__animated animate__bounceInDown animate__slower')
			$('#uni-img3').addClass('animate__animated animate__backInUp')
			$('#uni-img4').addClass('animate__animated animate__backInDown animate__slower')
			$('#uni-img5').addClass('animate__animated animate__backInRight')
			$('#uni-img6').addClass('animate__animated animate__fadeInTopLeft animate__slower')*/
		break;
		case 4:
			$('.numberside').html('۰۴')
			$('.nameside').html('کتابها')
		break;
		case 5:
			$('.numberside').html('۰۵')
			$('.nameside').html('نشر علوم پایه')
		break;
		case 6:
			$('.numberside').html('۰۶')
			$('.nameside').html('از زبان همکاران')

		break;
		case 7:
			$('.numberside').html('۰۷')
			$('.nameside').html('تماس با ما')
			$('#tamasbama-right').addClass('animate__animated animate__fadeInRight')
			$('.tamasBaMaForm').addClass('animate__animated animate__fadeInLeft')
		break;
	}
}


side()


$('#tamasBaMaSubmit').click(function (e) {
	e.preventDefault();
	$.ajax({
		type: "post",
		dataType: "json",
		data:{
			action: 'tamasbama',
			name: $('#nameForm').val(),
			email:$('#emailForm').val(),
			message:$('#textForm').val()
		},
		url: window.location.href + "wp-admin/admin-ajax.php",
		success: function(msg){
			console.log(msg);
		}
	});
})




	var owl = $(".hamkaran");
	owl.owlCarousel();
	owl.on('changed.owl.carousel', function(event) {
		var item = event.item.index;
		console.log(item)
		if ($(window).width() > 1000) {
			switch(item){
				case 1:
					removeClass()
					$("#hslide2").css("order",'2').addClass('vivify  fadeIn bgs-100');
					$("#hslide1").css("order",'1')
					$("#hslide4").css("order",'3')
					$("#hslide3").css("order",'4')
					break;
				case 2:
					removeClass()
					$("#hslide4").css("order",'1')
					$("#hslide1").css("order",'3')
					$("#hslide2").css("order",'4')
					$("#hslide3").css("order",'2').addClass('vivify  fadeIn bgs-100');
					break;
				case 3:
					removeClass()
					$("#hslide4").css("order",'2').addClass('vivify  fadeIn bgs-100');
					$("#hslide1").css("order",'1')
					$("#hslide2").css("order",'3')
					$("#hslide3").css("order",'4')
					break;
				case 0:
					removeClass()
					$("#hslide4").css("order",'1')
					$("#hslide1").css("order",'2').addClass('vivify  fadeIn bgs-100');
					$("#hslide2").css("order",'4')
					$("#hslide3").css("order",'3')
					break;
			}
		}else {
			switch(item){
				case 1:
					removeClass()
					$(".hamkaranM").css("background-image",'url('+templateDir+'/images/hamkaran1.png'+')');
					break;
				case 2:
					removeClass()
					$(".hamkaranM").css("background-image",'url('+templateDir+'/images/hamkaran2.png'+')');
					break;
				case 3:
					removeClass()
					$(".hamkaranM").css("background-image",'url('+templateDir+'/images/hamkaran3.png'+')');
					break;
				case 0:
					removeClass()
					$(".hamkaranM").css("background-image",'url('+templateDir+'/images/hamkaran4.png'+')');
					break;
			}
		}


	})
		function removeClass() {
			$('.hamkaranSlideImgWrap').children().removeClass('bgs-100 vivify fadeIn')
		}



$(document).ready(function(){
	$(".heroSlider").owlCarousel();
});
$('.heroSlider').owlCarousel({
	loop:true,
	margin:10,
	rtl:true,
	autoplay:true,
	autoplayTimeout:3000,
	animateOut: 'animate__fadeOutDown',
	animateIn: 'animate__fadeInLeft',
	responsiveClass:true,
	responsive:{
		0:{
			items:1,
			nav:false,
			dots:false
		},
		600:{
			items:3,
			nav:false
		},
		1000:{
			items:1,
			nav:false,
			dots: false,
			loop:true
		}
	}
})


$('.book-info-button').click(function (){
	$('.other-books').show()
	$('.other-books').addClass('vivify popInBottom ')
	/*$('.book-info').children().remove()*/
	$('.other-books-top').show();
	$('.other-books-top').addClass('vivify popInTop')

	$('.book-info').hide();
	var bookItem = parseInt($(this).attr('data-bookItem'));
	console.log(bookItem)

	switch (bookItem){

		case 0:
			$('.bookInfoHeader').html('آشنایی با منطق ریاضی')
			$('.bookInfoImg').attr('src',templateDir+"/images/book1.png")
		break;
		case 1:
			$('.bookInfoHeader').html('جبر و آنالیز')
			$('.bookInfoImg').attr('src',templateDir+"/images/book2.png");

		break;
		case 2:
			$('.bookInfoHeader').html('جبر خطی')
			$('.bookInfoImg').attr('src',templateDir+"/images/book3.png")
			$('.books-right-title').html('جبر خطی')
		break;
		case 3:
			$('.bookInfoHeader').html(' مسائل جبر و آنالیز ')
			$('.bookInfoImg').attr('src',templateDir+"/images/book4.png")

		break;

	}
})

$('.bookArchive').click(function (){
	$('.book-info').fadeIn();
	$('.other-books').hide()
	$('.other-books-top').hide();

})




	var owl2 = $(".booksSlider");
	owl2.on('changed.owl.carousel', function(event) {
		var item = event.item.index;
		console.log(item)
		$('.book-info-button').attr('data-bookItem',item)
		switch (item){
			case 0:
				$('.books-right-title').html('آشنایی با منطق ریاضی')
				break;
			case 1:
				$('.books-right-title').html('جبر و آنالیز')
				break;
			case 2:
				$('.books-right-title').html('جبر خطی')
				break;
			case 3:
				$('.books-right-title').html(' مسائل جبر و آنالیز ')
				break;
		}

	})

console.log()
var secNumber = $('section').length;
for(var i=0;i<secNumber;i++){
	$('.navsecWrap').prepend("<div id=nav"+i+" class='eachSectionNav'></div>")
}
$('#nav0').addClass('bg-select')

$('.fa.fa-chevron-right.secnav').click(function (){
	if(!$('#nav7').hasClass('bg-select')) {
		$('.eachSectionNav').removeClass('bg-select');
	}
	if (currentSectionIndex + 1 < sections.length) {

		sections[currentSectionIndex].classList.remove("activee");
		currentSectionIndex++;
		$('#nav'+currentSectionIndex).addClass('bg-select');
		window.scrollTo({top: -20, behavior: 'smooth'});
		side(currentSectionIndex);
		sections[currentSectionIndex].classList.add("activee");
		sections[currentSectionIndex].classList.add("vivify");
		sections[currentSectionIndex].classList.add("pullUp");

	}
})
$('.fa.fa-chevron-left.secnav').click(function (){
	if(!$('#nav0').hasClass('bg-select')) {
		$('.eachSectionNav').removeClass('bg-select');
	}
	if (currentSectionIndex - 1 >= 0) {
		// wheel up
		sections[currentSectionIndex].classList.remove("activee");

		currentSectionIndex--;
		$('#nav'+currentSectionIndex).addClass('bg-select');
		window.scrollTo({top: -20, behavior: 'smooth'});
		side(currentSectionIndex)
		console.log(currentSectionIndex)
		sections[currentSectionIndex].classList.add("activee");
	}
})


var test = $('.menu-item').not(':first,:last')
test.each(function (i){
	$(this).attr('data-sn',i+1)
})

test.click(function (e){
	e.preventDefault();
	var num = parseInt($(this).attr('data-sn'));
	$('section').removeClass('activee vivify pullUp')
	$('[data-secid='+num+']').addClass('activee vivify pullDown')
	$('.sideSection').removeClass('d-none').addClass('d-flex')
	currentSectionIndex = num
	side(num);
	if($(window).width() < 1000){
		$('#navbarMenu').toggleClass('menuM')
		$('#menu').prop('checked',false)
	}else {
		$('#menu').prop('checked',false)
		$('#navbarMenu').animate({width:"0px"},500)
	}
})





