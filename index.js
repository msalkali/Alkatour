let searchBar= document.querySelector('.search-container');
let searchBtn= document.querySelector('#search-btn');
let formBtn= document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-container');
let formClose= document.querySelector('#form-close');
let videoBtn = document.querySelectorAll('.v-btn');
let navBar= document.querySelector('.nav_bar');
let menu = document.querySelector('#menu-btn');


window.onscroll =()=>
{
    searchBar.classList.remove('active');
    searchBtn.classList.remove('fa-times');
    loginForm.classList.remove('active');
    navBar.classList.remove('active');
    menu.classList.remove('fa-times');
}


searchBtn.addEventListener('click', ()=>
{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', ()=>
{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', ()=>
{
    loginForm.classList.remove('active');
});

menu.addEventListener('click',()=>
{
    menu.classList.toggle('fa-times');
    navBar.classList.toggle('active');
});

function post(){
    alert("booking successful");
}

function viewpage(){
    let s = document.getElementById("search-bar").value;
    if(s === "camping","amusement park","castle","casino","hiking","historical sites","horse riding","scuba diving"){
        window.open("/packages.html");
    }
    if(s ==="services"){
        window.open("/services.html")
    }
    if(s ==="girne","famagusta","lefke","nicosia","beach","boat","boat cruise","food"){
        window.open("/gallary.html")
    }

}



videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.cntr .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

