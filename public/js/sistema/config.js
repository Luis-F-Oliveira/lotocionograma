const configBtn = document.getElementById('config-button')
const configDiv = document.getElementById('config-div')
const configContent = document.getElementById('config-content')
let est = false

configBtn.addEventListener('click', () => {
    est = !est

    if (est) {
        configDiv.style.height = "220px"
        configDiv.classList.remove('config-modal-close')
        configDiv.classList.add('config-modal-open')
        configDiv.style.display = "block"
        
        setTimeout(() => {
            configContent.style.display = "block"
        }, 500)
    } else {
        configDiv.style.height = "0px"
        configDiv.classList.remove('config-modal-open')
        configDiv.classList.add('config-modal-close')
        configContent.style.display = "none"

        setTimeout(() => {
            configDiv.style.display = "none"
        }, 500)
    }
})