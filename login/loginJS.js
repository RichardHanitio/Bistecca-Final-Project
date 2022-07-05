console.log("hi");
var hi = "test";

function showPassword(){
    var check = document.getElementById("checkbox");
    var pass = document.getElementById("password");
    if(check.checked){
        pass.type = "text";
    }
    else{
        pass.type = "password";
    }
}