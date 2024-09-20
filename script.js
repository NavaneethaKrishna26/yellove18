const menuIcon=document.querySelector('#menuicon');
const navLinks =document.querySelector('.navlinks');

menuIcon.onclick=()=>{
    navLinks.classList.toggle('active');


}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "20px";
  } else {
    document.getElementById("navbar").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}