document.addEventListener('DOMContentLoaded', () => {
    const level = document.getElementById('level').value.trim()
    const div = document.getElementById('category')

    if (level === 'OBSIDIAN') {
        div.style.background = "#2e293a"
    } else if (level === 'GOLD') {
        div.style.background = "#ffd700"
    } else if (level === 'SILVER') {
        div.style.background = "#c0c0c0"
    } else {
        div.style.background = "#A67D3D"
    }
})
