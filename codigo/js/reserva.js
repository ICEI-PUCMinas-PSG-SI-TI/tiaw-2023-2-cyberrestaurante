function entrar() {
    let nome = document.getElementById('full-name').value;
    let telefone = document.getElementById('phone-number').value;
    let numPessoas = document.getElementById('num-persons').value;
    let dia = document.querySelector('select[name="days"]').value;
    let hora = document.querySelector('select[name="hours"]').value;

    if (nome && telefone && numPessoas && dia !== 'day-select' && hora !== 'hour-select') {
        // Dados válidos, salve no localStorage
        let reserva = {
            nome: nome,
            telefone: telefone,
            numPessoas: numPessoas,
            dia: dia,
            hora: hora
        };
        localStorage.setItem('reserva', JSON.stringify(reserva));

        // Redirecione para a página de sucesso
        window.location.href = '../html/pagina-sucesso.html';
        return false; // Evite que o formulário seja enviado
    } else {
        // Exiba uma mensagem de erro se algum campo estiver faltando
        alert('Por favor, preencha todos os campos corretamente.');
        return false; // Evite que o formulário seja enviado
    }
}