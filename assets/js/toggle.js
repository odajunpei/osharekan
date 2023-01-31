document.querySelector('.hamburger').addEventListener('click', function(){
  this.classList.toggle('active');
  document.querySelector('.slide-menu').classList.toggle('active');
})
document.querySelector('.slide-menu').addEventListener('click', function(){
  this.classList.remove('active');
  document.querySelector('.slide-menu').classList.remove('active');
})