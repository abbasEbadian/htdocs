
const inputs = document.querySelectorAll(".inputs");
const error = document.querySelector(".error");
const loginEmailForm = document.querySelector(".submit")
const formCheckInput = document.querySelector(".form-check-input")

loginEmailForm.addEventListener("click", function () {
    console.log(formCheckInput.checked)
    if (formCheckInput.checked == false) {
        error.classList.add("active")
        
    }else{
        error.classList.remove("active")

    }
    inputs.forEach(item => {
        if (item.value === "") {
            error.classList.add("active")
            item.style.borderColor = "red";
        } else {
            error.classList.remove("active")
            item.style.borderColor = "";


        }
    })


    setTimeout(() => {
        error.classList.remove("active")
    }, 3000)

})