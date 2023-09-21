export function generator() {
    const operadores = ['+', '-', '*']
    const num1 = Math.floor(Math.random() * 10) + 1
    const num2 = Math.floor(Math.random() * 10) + 1
    const operador = operadores[Math.floor(Math.random() * operadores.length)]
    
    return `${num1} ${operador} ${num2}`
}