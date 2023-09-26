let estado = false
const btn = document.getElementById('open-close')

const sidebar = document.getElementById('sidebar')
const span = document.querySelectorAll('.span-none')
const logout = document.getElementById('logout')

btn.addEventListener('click', () => {
    estado = !estado
    if (estado) {
        sidebar.classList.remove('sidebar-open')
        sidebar.classList.add('sidebar-close')

        sidebar.style.width = '80px'
        span.forEach((element) => {
            element.classList.add('hidden')
        })
        logout.style.width = '50px'
        logout.innerHTML = '<i class="fa-solid fa-right-from-bracket"></i>'
        btn.classList.remove('close')
    } else {
        sidebar.classList.remove('sidebar-close')
        sidebar.classList.add('sidebar-open')

        setTimeout(() => {
            sidebar.style.width = '200px'
            span.forEach((element) => {
                element.classList.remove('hidden')
            })
            logout.style.width = '150px'
            logout.innerText = 'logout'
            btn.classList.add('close')
        }, 350)
    }
})