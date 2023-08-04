

let slides = document.querySelectorAll('.slide-container');
let index =0;

function next(){
    let array=Array.from(slides);
   
    array[index].classList.remove('active');
    index = (index + 1) % slides.length;
    array[index].classList.add('active');
}


function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}