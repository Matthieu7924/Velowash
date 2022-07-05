/********************MENU BURGER 2**********************/

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click',()=>{
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuOpen=true;
        document.querySelector(".menu").style.display = "block";
    }else{
        menuBtn.classList.remove('open');
        menuOpen=false;
        document.querySelector(".menu").style.display = "none";
    }
});
