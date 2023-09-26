import { generator } from "./display.js";

document.addEventListener("DOMContentLoaded", function () {
    const math = generator()
    document.getElementById("display").textContent = math

    const myForm = document.getElementById('myForm')

    myForm.addEventListener("submit", function (event) {
        event.preventDefault()

        const captchaInput = document.getElementById('captchaInput')
        const captchaValue = captchaInput.value
        const response = eval(math)

        if (captchaValue == response) {
            const formData = new FormData(myForm)

            fetch('http://localhost:8000/login', {
                method: "POST",
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.Negado === 'Credenciais erradas') {
                    const email = document.getElementById('email')
                    const emailValue = document.getElementById('email').value
                    const password = document.getElementById('password')


                    email.disabled = true
                    password.disabled = true
                    
                    email.classList.add('is-invalid')
                    password.classList.add('is-invalid')
                    
                    email.value = 'Email/Senha Inválido'
                    
                    setTimeout(() => {
                        email.value = emailValue
                        email.disabled = false
                        password.disabled = false
                    }, 2000);
                    password.value = ''
                } else {
                    window.location.href = '/lotacionograma/index'
                }
            })
            .catch(error => {
                console.error(error)
            })
        } else {
            const display = document.getElementById('display')
            display.textContent = 'VALOR INVÁLIDO!!!'
            display.classList.remove('text-white')
            display.classList.add('text-danger')
            setTimeout(() => {
                display.textContent = math
                display.classList.remove('text-danger')
                display.classList.add('text-white')
            }, 2000)
        }
    })
})