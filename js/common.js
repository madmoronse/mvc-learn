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