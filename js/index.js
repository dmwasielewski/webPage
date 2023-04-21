'use strict';
const header = document.querySelector('header');

window.addEventListener('scroll', function () {
    header.classList.toggle('sticky', this.window.scrollY > 0);
});

const ar = [1,2,3];
ar.forEach((element,i)=>{
    console.log(element)
})