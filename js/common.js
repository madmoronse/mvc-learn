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
//const pathLenght = scrollUpSvgPath.getTotalLenght();

//scrollUpSvgPath.style.strokeDasharray = `${pathLenght} ${pathLenght}`;
console.log(scrollUpSvgPath);
scrollUpSvgPath[0].style.transition = 'stroke-dashoffset 20ms';

const updateDashoffset = () => {};



// CLICK
scrollUp[0].addEventListener('click', function() {
	window.scrollTo({
		top: 0,
		behavior: 'smooth',
	});
});
