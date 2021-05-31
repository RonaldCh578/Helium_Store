let selected = document.getElementsByClassName("selected")[0];
let optionContainer = document.body.getElementsByClassName("options_container")[0];

function changeSelected(id){
    selected.innerHTML = document.getElementById(id).innerHTML;
    optionContainer.classList.remove("active");
}

document.addEventListener("DOMContentLoaded", (event)=>{
    console.log("DOM Loaded");

    selected.addEventListener("click", () => {
        optionContainer.classList.toggle("active");
    });
})