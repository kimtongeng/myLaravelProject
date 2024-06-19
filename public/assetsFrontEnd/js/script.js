//login user
const btnUser = document.querySelector(".navbar .header .right");
const btnLogin = document.querySelector('.btnLogin');
const btnRegister = document.querySelector('.btnRegister');
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");
const background = document.querySelector(".background");
btnUser.addEventListener("click",(e)=>{

    element = e.target;
    if(element.classList.contains("user")){
        e.preventDefault();
        background.style.right = "0px";
        registerForm.classList.add("show");
    }
    if(element.classList.contains("fa-user") || element.classList.contains("profile")){
        e.preventDefault();
        document.querySelector(".header .profile").classList.toggle("show");

    }



});


btnLogin.addEventListener("click",(e)=>{
    registerForm.classList.toggle("show");
    loginForm.classList.toggle("show");
})
btnRegister.addEventListener("click",()=>{

    registerForm.classList.toggle("show");
    loginForm.classList.toggle("show");
});
background.addEventListener("click",(e)=>{
    let element = e.target;
    if(element.classList.contains("background") || element.classList.contains("fa-xmark")){
        registerForm.classList.remove("show");
        loginForm.classList.remove("show");
        background.style.right = "-100dvw";

    }
});


const watch = document.querySelectorAll(".top-watch .watch");
let i=1;
watch.forEach((e)=>{
    i+=0.3;
    e.style.transitionDuration = i+"s";
})

let n = 4;
window.addEventListener("resize",()=>{
    if(window.innerWidth>1528){
        n=4;
        addAnimation(n);
    }
    else if(window.innerWidth>1031){
        n=3;
        addAnimation(n);
    }
    else if(window.innerWidth>528){
        n=2;
        addAnimation(n);
    }
    else{
        n=1;
        addAnimation(n);
    }

})




function addAnimation(n){
let i=0.3;
let a = 1
const product = document.querySelectorAll(".product");
product.forEach((e)=>{//n=5 i=2.3

    if(a>n){
        i=0.3;
        a=1;
    }
    //i=0.3
    e.style.transitionDuration = i+"s";
    i+=0.2;
    a++;

})
}


const session = document.querySelectorAll(".session");
animation(session)
window.addEventListener("scroll",()=>{
    animation(session);
});

function animation(e){
    let poin = window.scrollY+400;
    session.forEach((e)=>{
        if(poin > e.offsetTop && poin < e.offsetTop + e.offsetHeight){
            e.classList.add("active");
        }
        else{
            e.classList.remove("active");

        }

    })
}

document.querySelectorAll(".fa-heart").forEach((e)=>{

    e.addEventListener("click",()=>{
        if(e.classList.contains("fa-regular")){
            e.classList.remove("fa-regular");
            e.classList.add("fa-solid");
            e.style.color = "red";
        }
        else{
            e.classList.remove("fa-solid");
            e.classList.add("fa-regular");
            e.style.color = "black";
        }
    })
})


//type of watch

$(document).ready(function () {
    $(".left>p").click(function (e) {


        $(".left").toggleClass("show-sub");


    });
});
