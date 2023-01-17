let menuButton = document.querySelector(".burger");
let menuDrop = document.querySelector('.menudrop');
let burger = document.querySelector('.burger');
menuButton.addEventListener("click", function(){
    if(menuDrop.classList.contains('active')){

        menuDrop.classList.remove('active');
    }else{
        menuDrop.classList.add('active');

    }
    if(burger.classList.contains('active')){
        burger.classList.remove('active');
    }else{
        burger.classList.add("active");

    }


});