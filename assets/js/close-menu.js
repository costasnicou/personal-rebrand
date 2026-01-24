// document.body.style.backgroundColor = "red";
const contactItem = document.querySelector('.menu-contact');
const checkbox = document.querySelector('#toggle');

contactItem.addEventListener('click',function(){
    checkbox.checked = false;
});