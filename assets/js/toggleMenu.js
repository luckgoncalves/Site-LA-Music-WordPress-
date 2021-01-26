window.addEventListener("scroll", (event) => {
  fixedNav();
});

$(document).ready(function(){
  fixedNav();
})

function fixedNav () {
  let scroll = this.scrollY;
  
  let navBar = document.querySelector('.header-menu')
  if (scroll >= 10) {
  
    navBar.classList.add('bg-dark')
  } else {
    navBar.classList.remove('bg-dark')
  }
}