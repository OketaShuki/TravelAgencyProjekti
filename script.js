
let slideIndex = 1; //Fillon me faqen e pare
showSlides(slideIndex); // Shfaq faqen e pare

// Next/previous
function plusSlides(n) {
    showSlides(slideIndex += n);
}


function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Function per me tregu slidet
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) { slideIndex = 1 } // kthehet ne te paren
    if (n < 1) { slideIndex = slides.length } // kthen te fundit

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", ""); 
    }

    slides[slideIndex - 1].style.display = "block"; 
    dots[slideIndex - 1].className += " active"; 
}

//Nderron fotot  ne menyre automatike
setInterval(() => {
    plusSlides(1);
}, 5000); //Ndrron foton qdo 5 sekonds

