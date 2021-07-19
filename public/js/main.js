let selected = document.getElementsByClassName("selected")[0];
let optionContainer = document.body.getElementsByClassName("options_container")[0];
let tickets_disponibles = document.getElementById("tickets_totales");
let continue_btn = document.getElementById("btn_continue_shoping");
let input_adult = document.getElementById("qty_tickets_adults");
let input_children = document.getElementById("qty_tickets_children");

let maximo_tickets = 0;

function changeSelected(id) {
    selected.innerHTML = document.getElementById(id).innerHTML;
    optionContainer.classList.remove("active");
    document.getElementById("registredButton").disabled = false;
}


function decrementBtn(id) {

    let total = document.getElementById("total");

    if (id == "minus_adult") {
        let qty_adults = document.getElementById("qty_adults");
        let precio_adults = document.getElementById("precio_adults");
        let subtotal_adults = document.getElementById("subtotal_adults");

        if (input_adult.value > 0) {
            input_adult.value--;
            qty_adults.textContent = input_adult.value + " Adulto";
            subtotal_adults.textContent = input_adult.value * precio_adults.textContent;
            total.textContent = parseInt(total.textContent) - parseInt(precio_adults.textContent);
            maximo_tickets++;
            console.log(maximo_tickets);

        }

    }

    if (id == "minus_children") {
        let qty_children = document.getElementById("qty_children");
        let precio_children = document.getElementById("precio_children");
        let subtotal_children = document.getElementById("subtotal_children");
        if (input_children.value > 0) {
            input_children.value--;
            qty_children.textContent = input_children.value + " Niño";
            subtotal_children.textContent = input_children.value * precio_children.textContent;
            total.textContent = parseInt(total.textContent) - parseInt(precio_children.textContent);
            maximo_tickets++;
            console.log(maximo_tickets);


        }

    }
    activateContinueBtn();

}

function incrementBtn(id) {

    let total = document.getElementById("total");

    if (id == "plus_adult") {
        let qty_adults = document.getElementById("qty_adults");
        let precio_adults = document.getElementById("precio_adults");
        let subtotal_adults = document.getElementById("subtotal_adults");

        if (maximo_tickets > 0) {
            input_adult.value++;
            qty_adults.textContent = input_adult.value + " Adulto";
            subtotal_adults.textContent = input_adult.value * precio_adults.textContent;
            total.textContent = parseInt(total.textContent) + parseInt(precio_adults.textContent);
            maximo_tickets--;
            console.log(maximo_tickets);

        }

    }

    if (id == "plus_children") {
        let qty_children = document.getElementById("qty_children");
        let precio_children = document.getElementById("precio_children");
        let subtotal_children = document.getElementById("subtotal_children");
        if (maximo_tickets > 0) {
            input_children.value++;
            qty_children.textContent = input_children.value + " Niño";
            subtotal_children.textContent = input_children.value * precio_children.textContent;
            total.textContent = parseInt(total.textContent) + parseInt(precio_children.textContent);
            maximo_tickets--;
            console.log(maximo_tickets);

        }

    }
    activateContinueBtn();


}

function activateContinueBtn() {

    if (input_adult.value != 0 || input_children.value != 0) {
        continue_btn.disabled = false;

    } else {
        continue_btn.disabled = true;

    }
}

function activateConfirmBtn() {
    let confirm_btn = document.getElementById("confirm_btn");

    let name = document.getElementById("name");
    let lastname = document.getElementById("last_name");
    let email = document.getElementById("email");
    console.log(validateEmail(email.value));
    if (name != "" && lastname != "" && email != "" && validateEmail(email.value)) {

        confirm_btn.disabled = false;

    } else {
        confirm_btn.disabled = true;

    }


}

function validateEmail(email) {
    return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)
}



document.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM Loaded");

    if (tickets_disponibles) {
        maximo_tickets = parseInt(tickets_disponibles.textContent);
    }
    
    if (selected) {
        selected.addEventListener("click", () => {
            optionContainer.classList.toggle("active");
    
        });
    }

    


})

