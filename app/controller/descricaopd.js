function toggleDescricao(button) {
    const descricao = button.nextElementSibling;
    descricao.classList.toggle("descricao-oculta");
    button.textContent = descricao.classList.contains("descricao-oculta") ?
        "Ver Detalhes" :
        "Ocultar Detalhes"; 
}