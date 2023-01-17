var resultkey = document.querySelector('.result');

var height = document.querySelector('.height');
var weight = document.querySelector('.weight');

var answer = document.querySelector('.answerpole');

resultkey.addEventListener("click", function(){
    answer.value = weight.value / Math.pow(height.value, 2);
});