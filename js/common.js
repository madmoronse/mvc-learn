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
