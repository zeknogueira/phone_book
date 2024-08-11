 
function edit_on(cod) {
    console.log('Código recebido:', cod);

    // Selecionar o botão
    let button_edit = document.querySelector('#button_edit' + cod);
    let button_confirm = document.querySelector('#button_edit_confirm'+ cod);
    console.log('Botão editar encontrado:', button_edit);
    console.log('botão confirmar encontrado:', button_confirm);


    if (button_edit) {
        button_edit.style.display = "none";
        console.log('Botão escondido.');
    } else {
        console.log('Botão não encontrado com o seletor:', '#button_edit_confirm' + cod);
    }
    if(button_confirm){
        button_confirm.style.display = "flex";
        console.log("Botão Confirmar Aparecendo");
    } else{
        console.log("Erro ao encontrar o botão confirmar");
    }
    let elements = document.querySelectorAll('.dados_amigo' + cod);

    elements.forEach(element => {
        element.removeAttribute('readonly')
        element.classList.replace('button_input_standart', 'button_input_editing');
    });
    console.log("test");







}

function show_edit_comfirm_button(cod) {
    console.log(teste);


}