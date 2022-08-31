console.log("nazim")
let url = window.location.href;
let url_array = url.split('/');
console.log(url_array);

function checkUsername(username, user_array){
    for(let i=0; i<user_array.length; i++){
        if(username.toLowerCase() === user_array[i]) return true;
    }
    return false;
};

if(url_array[url_array.length-1] == "registration.php"){
    let xml = new XMLHttpRequest();
    let user_array = [];
    xml.onload = ()=>{
        user_array = JSON.parse(xml.responseText);
    }
    xml.open('GET', 'http://localhost/sd2/db.php');
    xml.send();
    
    const userName = document.getElementById('username');
    const checkuser = document.getElementById('checkuser')
    userName.addEventListener('keyup', ()=>{
        if(checkUsername(userName.value, user_array)){
            console.log('Not Availabe');
            checkuser.classList.add("checkname");
        }else checkuser.classList.remove("checkname");
    });
    userName.addEventListener('keydown', ()=>{
        if(checkUsername(userName.value, user_array)){
            console.log('Not Availabe');
            checkuser.classList.add("checkname");
        }else checkuser.classList.remove("checkname");
    });

    
}
if(url_array[4]=="registration.php"|| url_array[4]=="signin.php")
{
    document.body.classList.add("background_signup");
    document.getElementById("signup").classList.add("active");
}

if(url_array[4]=="")
{
    document.getElementById("home").classList.add("active");
    
}
if(url_array[4]=="about.php")
{
    document.getElementById("about").classList.add("active");
}
if(url_array[4]=="showroom.php")
{
    document.getElementById("showroom").classList.add("active");
    document.body.classList.add("background_show");
}
if(url_array[4]=="contact.php")
{
    document.getElementById("contact").classList.add("active");
    document.body.classList.add("contact_style");
}
if(url_array[4]=="admin.php"){
    console.log("Working");
    document.getElementById("admin").classList.add("active");
    document.body.classList.add("admin_container");
}
if(url_array[4]=="about.php")
{
    document.getElementById("about").classList.add("active");
    document.body.classList.add("about_container");
}
if(url_array[4]=="gallery.php")
{
    document.getElementById("gallery").classList.add("active");
    document.body.classList.add("gallery_container");
}
if(url_array[4]=="registration-success.php")
{
    document.body.classList.add("registration-success-container");
}