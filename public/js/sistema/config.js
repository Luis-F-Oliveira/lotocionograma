const configBtn = document.getElementById('config-button')
const configDiv = document.getElementById('config-div')
const configContent = document.getElementById('config-content')
let est = false

const sacBtn = document.getElementById('sac-button')
const sacDiv = document.getElementById('sac-div')
const sacContent = document.getElementById('sac-content')
let ett = false

const perfilBtn = document.getElementById('perfil-button')
const perfilDiv = document.getElementById('perfil-div')
const perfilContent = document.getElementById('perfil-content')
let ess = false

configBtn.addEventListener('click', () => {
    est = !est
    if (est) {
        configDiv.style.height = "105px"
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
        fecharOutrasSecoes()
    }
})

function sacOpen() {
    sacDiv.style.height = "400px"
    sacDiv.classList.remove('sac-modal-close')
    sacDiv.classList.add('sac-modal-open')
    sacDiv.style.display = "block"

    setTimeout(() => {
        sacContent.style.display = "block"
    }, 500)
}
function sacClose() {
    sacDiv.style.height = "0px"
    sacDiv.classList.remove('sac-modal-open')
    sacDiv.classList.add('sac-modal-close')
    sacContent.style.display = "none"

    setTimeout(() => {
        sacDiv.style.display = "none"
    }, 500)
}

function perfilOpen() {
    perfilDiv.style.height = "300px"
    perfilDiv.classList.remove('perfil-modal-close')
    perfilDiv.classList.add('perfil-modal-open')
    perfilDiv.style.display = "block"

    setTimeout(() => {
        perfilContent.style.display = "block"
    }, 500)
}
function perfilClose() {
    perfilDiv.style.height = "0px"
    perfilDiv.classList.remove('perfil-modal-open')
    perfilDiv.classList.add('perfil-modal-close')
    perfilContent.style.display = "none"

    setTimeout(() => {
        perfilDiv.style.display = "none"
    }, 500)
}

function fecharOutrasSecoes() {
    if (ess == true) {
        ess = false
        perfilClose()
    }
    if (ett == true) {
        ett = false
        sacClose()
    }
}

perfilBtn.addEventListener('click', () => {
    ess = !ess
    if (ess) {
        if (ett == true) {
            ett = false
            sacClose()
        }
        perfilOpen()
    } else {
        perfilClose()
    }
})


sacBtn.addEventListener('click', () => {
    ett = !ett
    if (ett) {
        if (ess == true) {
            ess = false
            perfilClose()
        }
        sacOpen()
    } else {
        sacClose()
    }
})
