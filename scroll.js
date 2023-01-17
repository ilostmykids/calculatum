let scrollpos = window.scrollY;

const header = document.querySelector(".header");
const signup = document.querySelector(".signup");
const scrollChange = window.screen.height * 0.7;

const add_class_on_scroll = () => header.classList.add("actived");
const remove_class_on_scroll = () => header.classList.remove("actived");

const add_signup = () => signup.classList.add('inv');
const remove_signup = () => signup.classList.remove('inv');

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;
console.log(signup);
  if (scrollpos >= scrollChange) { add_class_on_scroll(), add_signup() }
  else { remove_class_on_scroll(), remove_signup() }

})

