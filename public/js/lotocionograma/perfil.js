const btnPerfil = document.getElementById('btn-perfil')
const divPerfil = document.getElementById('perfil')
let es = false

btnPerfil.addEventListener('click', () => {
    es = !es
    if (es) {
        divPerfil.style.display = "block"
    } else {
        divPerfil.style.display = "none"
    }
})