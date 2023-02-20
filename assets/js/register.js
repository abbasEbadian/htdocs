
document.onreadystatechange = function () {

    const email = document.querySelector("#email");
    const phone = document.querySelector("#phone");
    const pwd = document.querySelector("#pwd");
    const pwd2 = document.querySelector("#pwd2");
    const done = document.querySelector("#done");
    const check = document.querySelector("#flexCheckDefault");
    const error = document.querySelector(".error");
    

    phone&&phone.addEventListener('blur', function (e) {
        if(this.value.length != 11){
            showErr(error, "تعداد ارقام باید 11 باشد")
        }
    })

    phone&&phone.addEventListener('input',()=> validate(email, phone, pwd, pwd2, done, check))
    email&&email.addEventListener('input', ()=>validate(email, phone, pwd, pwd2, done, check))
    pwd&&pwd.addEventListener('input', ()=>validate(email, phone, pwd, pwd2, done, check))
    pwd2&&pwd2.addEventListener('input', ()=>validate(email, phone, pwd, pwd2, done, check))
    check&&check.addEventListener('change', ()=>validate(email, phone, pwd, pwd2, done, check))

    validate(email, phone, pwd, pwd2, done, check)
}

const showErr = (element, text="لطفا همه موارد لازم را بدرستی کامل کنید") => {
    element.innerHTML = text
    element.classList.add("active")
    setTimeout(() => {
        element.classList.remove("active")
    }, 3000)
}

const validate = (email, phone, pwd, pwd2, done, check) => {
    done.setAttribute('disabled', 'disabled')
 
    if(phone.value.length !== 11) return
    if(email.value.length  === 0 ) return
    if(!pwd.value || !pwd2.value) return
    if(!check.checked) return
    done.removeAttribute('disabled');

}