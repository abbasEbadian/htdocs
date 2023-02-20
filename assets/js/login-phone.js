
document.onreadystatechange = function () {

    const phone = document.querySelector("#phone-number");
    const code = document.querySelector("#code");
    const error = document.querySelector(".error");
    

    phone&&phone.addEventListener('blur', function (e) {
        if(this.value.length != 11){
            showErr(error, "تعداد ارقام باید 11 باشد")
        }
    })
    phone&&phone.addEventListener('input', validate)
    code&&code.addEventListener('input', validate)

    validate()
}
const startTimer = (element) => {
    element.setAttribute("disabled", "disabled")
    let time = 60
    const timer = document.querySelector(".timer")
    const timerSpan = document.querySelector('.timer .timer-time')
    timer.classList.remove('d-none')
    timerSpan.innerHTML = time;
    setInterval(() => {
        if(time === 0){
            timer.classList.add('d-none')
        }else{
            timerSpan.innerHTML = --time;
            element.setAttribute("disabled", "disabled")

        }
    }, 1000)
}
const showErr = (element, text) => {
    element.innerHTML = text
    element.classList.add("active")
    setTimeout(() => {
        element.classList.remove("active")
    }, 3000)
}

const validate = () => {
    const phone = document.querySelector("#phone-number");
    const code = document.querySelector("#code");
    const cap = document.querySelector('.recaptcha-checkbox-checkmark')
    const done = document.querySelector('.send-code')
    console.log(phone.value.length === 11 && code.value.length > 0)
    if(phone.value.length === 11 && code.value.length > 0 ){
        done.removeAttribute('disabled');
    }else{
        done.setAttribute('disabled', 'disabled')
    }

}