var gender = document.querySelectorAll('input[name="radio"]');
var physical = document.querySelectorAll('input[name="radio2"]');
var resultkey = document.querySelector('.result');

var age = document.querySelector('.age');
var height = document.querySelector('.height');
var weight = document.querySelector('.weight');

var gendernumber;
var physicalnumber;

var coef;

var answer = document.querySelector('.answerpole');

resultkey.addEventListener("click", function(){
    for (let i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
          gendernumber = gender[i].value;
              }}
              

    for (let i = 0; i < physical.length; i++) {
        if (physical[i].checked) {
          physicalnumber = physical[i].value;
              }}

    if(physicalnumber == 1){
        coef = 1.2;
    } else if(physicalnumber == 2){
        coef = 1.55;
    } else if(physicalnumber == 3){
        coef = 1.725;
    } else if(physicalnumber == 4){
        coef = 1.9;
    }

    console.log(coef);
    if(gendernumber == 1){
        answer.value = (10 * weight.value) + (6.25 * height.value) - (5 * age.value) + 5;
        // answer.value = parseInt(age) * 10.3;
        // console.log(parseInt(age) * 10.3);
        // console.log(age);
    } else if(gendernumber == 2){
        answer.value = (10 * weight.value) + (6.25 * height.value) - (5 * age.value) - 161;
        // answer.value = parseInt(age) * 10.3;
        // console.log(parseInt(age) * 10.3);
        // console.log(age);
    }
});