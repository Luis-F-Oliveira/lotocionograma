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
                console.log(data)
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