let estado = false
const btn = document.getElementById('open-close')

const sidebar = document.getElementById('sidebar')
const span = document.querySelectorAll('.span-none')

btn.addEventListener('click', () => {
    estado = !estado
    if (estado) {
        sidebar.classList.remove('sidebar-close')
        sidebar.classList.add('sidebar-open')

        btn.style.transform = 'rotate(180deg)'
        setTimeout(() => {
            sidebar.style.width = '200px'
            span.forEach((element) => {
                element.classList.remove('hidden')
            })
            btn.classList.add('close')
        }, 700)
    } else {
        sidebar.classList.remove('sidebar-open')
        sidebar.classList.add('sidebar-close')

        btn.style.transform = 'rotate(0deg)'
        sidebar.style.width = '65px'
        span.forEach((element) => {
            element.classList.add('hidden')
        })
        btn.classList.remove('close')
    }
})