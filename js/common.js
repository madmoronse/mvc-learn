toggle = document.querySelectorAll(".toggle")[0];
nav = document.querySelectorAll("nav")[0];
toggle_open_text = 'Меню';
toggle_close_text = 'Закрыть';

toggle.addEventListener('click', function() {
  nav.classList.toggle('open');


}, false);

setTimeout(function(){
  nav.classList.toggle('open');
}, 800);

const offset = 100;
const scrollUp = document.querySelectorAll('.scroll-up');
const scrollUpSvgPath = document.querySelectorAll('.scroll-up__svg-path');
const pathLength = scrollUpSvgPath[0].getTotalLength();

scrollUpSvgPath[0].style.strokeDasharray = `${pathLength} ${pathLength}`;
scrollUpSvgPath[0].style.transition = 'stroke-dashoffset 20ms';
const getTop = () => window.pageYOffset || document.documentElement.scrollTop;

const updateDashoffset = () => {
	const height = document.documentElement.scrollHeight - window.innerHeight;
	const dashoffset = pathLength - (getTop() * pathLength / height);
	scrollUpSvgPath[0].style.strokeDashoffset = dashoffset;
};


// SCROLL
window.addEventListener('scroll', function() {
	updateDashoffset();

	if (getTop() > offset) {
		scrollUp[0].classList.add('scroll-up--active');
	} else {
		scrollUp[0].classList.remove('scroll-up--active');
	}
});

// CLICK
scrollUp[0].addEventListener('click', function() {
	window.scrollTo({
		top: 0,
		behavior: 'smooth',
	});
});

const popup = document.getElementById('popup');

const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
    for(let index = 0; index < popupCloseIcon.length; index++) {
        const el = popupCloseIcon[index];
        el.addEventListener('click', function(e ) {
            popupClose(el.closest(".popup"));
            e.preventDefault();
        });
    }
}

function popupOpen(popup) {
    popup.classList.add('open');
    popup.addEventListener("click", function (e) {
        if (!e.target.closest('.popup_content')) {
            popupClose(e.target.closest('.popup'));
        }
    });

}

function popupCartOpen() {
	const cart = document.getElementById('cart');
    cart.classList.add('open');
    cart.addEventListener("click", function (e) {
        if (!e.target.closest('.popup_content')) {
            popupClose(e.target.closest('.popup'));
        }
    });

}



function popupClose(popup) {
    popup.classList.remove('open');
}


function addToCart(id) {
$.ajax({
	url: '/products/addToCart',
	type: 'post',
	data: 'id=' + id,
	dataType: 'json',
	success: function(json) {
		if (json['error']) {
			$('.popup_text').html(json['error']);
		} else {
			$('#cart-total').html(json['total']);
		}

		popupOpen(popup);
	}
});
}

function deleteToCart(id) {
$.ajax({
	url: '/products/deleteToCart',
	type: 'post',
	data: 'id=' + id,
	dataType: 'json',
	success: function(json) {
		$('.product-' + id).hide();
		$('#cart-total').html(json['total']);
	}
});
}

function getCart() {
	$.ajax({
	url: '/header/getCart',
	type: 'post',
	dataType: 'json',
	success: function(json) {
		$('.cart__content').addClass('product-' + json['success'][0]['id']);
		$('.cart__product-image').html(json['success'][0]['title']);
		$('.cart__product-name').html(json['success'][0]['image']);
		$('.cart__product-price').html(json['success'][0]['price']);
		$('.cart__action-delete').html('<a onclick="deleteToCart(' + json['success'][0]['id'] + ');"><button style="color: black; padding: 5px;">X</button></a>');
		popupCartOpen();
	}

});
}

