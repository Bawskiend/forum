let btn = document.querySelector('.submit');
let parent = document.querySelector('.form-app');
let form = document.querySelector('.form');
btn.addEventListener('click',function(){
    setTimeout(function(){
        parent.removeChild(form);
    console.log('deleted');
    },200)
})