const showPassword = document.querySelector(".show"),
pass = document.querySelector("#pass");


showPassword.addEventListener("click", ()=>{
    if(pass.type === "password"){
        pass.type="text";
        showPassword.classList.replace("fa-eye-slash", "fa-eye");
    }else{
        pass.type="password";
        showPassword.classList.replace("fa-eye", "fa-eye-slash");
    }
});