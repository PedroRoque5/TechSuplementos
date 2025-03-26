const inputStockButton = document.getElementById("inputStock");
const outputStockButton = document.getElementById("outputStock");
const productSelect = document.getElementById("product");
const quantityInput = document.getElementById("quantity");
const selectedProductDisplay = document.getElementById("selectedProduct");
const currentStockDisplay = document.getElementById("currentStock");

let stock = {
    1: 10, // Produto 1
    2: 15, // Produto 2
    3: 5,  // Produto 3
};

function updateStockInfo() {
    const selectedProduct = productSelect.value;
    selectedProductDisplay.textContent = `Produto ${selectedProduct}`;
    currentStockDisplay.textContent = stock[selectedProduct] || 0;
}

inputStockButton.addEventListener("click", () => {
    const quantity = parseInt(quantityInput.value);
    if (isNaN(quantity) || quantity <= 0) {
        alert("Por favor, insira uma quantidade válida.");
        return;
    }

    const productId = productSelect.value;
    stock[productId] += quantity;
    updateStockInfo();
    alert(`Entrada de ${quantity} unidades do produto ${productId} registrada.`);
});

outputStockButton.addEventListener("click", () => {
    const quantity = parseInt(quantityInput.value);
    if (isNaN(quantity) || quantity <= 0) {
        alert("Por favor, insira uma quantidade válida.");
        return;
    }

    const productId = productSelect.value;
    if (stock[productId] < quantity) {
        alert("Estoque insuficiente para a saída.");
        return;
    }

    stock[productId] -= quantity;
    updateStockInfo();
    alert(`Saída de ${quantity} unidades do produto ${productId} registrada.`);
});

// Atualiza as informações ao carregar a página
updateStockInfo();
