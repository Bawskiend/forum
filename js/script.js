let app_container = document.querySelector('.app-container');
window.onload = () => {
let loginbtn = document.querySelector('.login-submit');
loginbtn.addEventListener('click',() =>{
let promise = fetch('/mainpage').then(
    response =>{
        return response.text;
}).then(
    text =>{
        app_container.innerHTML = text;
    }
);
})}