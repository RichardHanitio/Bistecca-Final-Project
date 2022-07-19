function showPassword(){
    let check = document.getElementById("checkbox");
    let pass = document.getElementById("password");
    if(check.checked){
        pass.type = "text";
    }
    else{
        pass.type = "password";
    }
}