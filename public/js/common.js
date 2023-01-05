const getId=(id)=>document.getElementById(id);
const getSl=(selector)=>document.getElementById(selector);

const password=getId("password");
const show_hide_pasword=getId("show_hide_password");

if(password){
    show_hide_pasword.addEventListener("click",function(){
        if(password.type==="password"){
            password.type="text";
            show_hide_pasword.innerText="Hide";
        }else{
            password.type="password";
            show_hide_pasword.innerText="Show"
        }
    })
}