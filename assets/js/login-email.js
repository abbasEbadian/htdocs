
document.onreadystatechange = function () {

    const inputs = document.querySelectorAll(".inputs");
    const phone = document.querySelector("#phone-number");
    const error = document.querySelector(".error");
    const loginEmailForm = document.querySelector(".submit")
    const formCheckInput = document.querySelector(".form-check-input")

    phone&&phone.addEventListener('blur', function (e) {
        if(this.value.length != 11){

        }
    })
    loginEmailForm.addEventListener("click", function () {
        if (formCheckInput.checked == false) {
            error.classList.add("active")

        } else {
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

    hanldeEmail()

}
const showErr = (element, text) => {

}
const hanldeEmail = () => {
    
    const email = document.querySelector("#emailInput");
    console.log(email)
    email && email.addEventListener('input', function (e) {
        let value = e.target.value
        value = value.replace(/[^a-zA-Z@\.0-9_-]/g, "")
        e.target.value = value
    });
}
