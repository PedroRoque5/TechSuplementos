function adicionarAoCarrinho(nome, preco) {
            // Obtém os itens do carrinho do localStorage
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            // Verifica se o item já está no carrinho
            let existingItem = cartItems.find(item => item.name === nome);

            if (existingItem) {
                existingItem.quantity += 1; // Se já existe, apenas aumenta a quantidade
            } else {
                cartItems.push({ name: nome, price: preco, quantity: 1 }); // Adiciona o item
            }

            // Atualiza o carrinho no localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            alert(`${nome} foi adicionado ao carrinho!`);
        }