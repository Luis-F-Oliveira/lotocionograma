function Form() {
    const display = document.getElementById("display").textContent;
    const response = document.getElementById("response").value

    try {
        const resultadoEsperado = eval(display)
        const respostaUsuario = parseFloat(resposta)

        if (resultadoEsperado === respostaUsuario) {
            alert("Resposta correta!")
        } else {
            alert("Resposta incorreta. Tente novamente.")
        }
    } catch (error) {
        alert("Ocorreu um erro ao verificar a resposta.")
    }

    document.getElementById("display").textContent = gerarConta()
    document.getElementById("resposta").value = ""
}