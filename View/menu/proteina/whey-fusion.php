<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">

<main>

  <h1 class="produto">Whey-Pro Fusion</h1>

  <div class="produto-container">
    <img class="descricaoimg" src="<?= ASSETS ?>image/protein.jpg" alt="Imagem do produto Whey-Pro Fusion">

    <div class="descreve">
      <p class="descrição">
        Proteína de soro de leite de alta qualidade com excelente sabor sem aspartame.<br>
        É composto por 75% de proteína, composto por concentrado instantâneo de soro de leite (WPC) processado em baixa temperatura e isolado de soro de leite CFM, o que garante alto valor biológico.
      </p>
      <div class="sabor">
        <h3>Escolha o sabor:</h3>
        <select name="sabores" id="sabores">
          <option value="chocolate">Chocolate</option>
          <option value="baunilha">Baunilha</option>
          <option value="morango">Morango</option>
          <option value="cookies">Cookies & Cream</option>
        </select>
      </div>
    </div>
  </div>

  <h2 class="preco">R$ 200,50</h2>

  <div class="actions">
  <a href="<?= URL . 'index.php?pg=pagamento' ?>">
        <button class="payment-button">Outras formas de pagamento</button>
        </a>
    <button class="buy-button">Comprar Agora</button>
    <button class="cart-button">
    <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
  </button>
</div>
</div>

  <section class="curiosidades">
    <h3>Curiosidades sobre o produto</h3>
    <p>O Whey-Pro Fusion é ideal para quem busca aumentar a massa muscular e melhorar a recuperação pós-treino. Este suplemento é produzido com ingredientes premium para garantir máxima eficiência.</p>
  </section>


  <section class="reviews">
    <h3>Avaliações dos Clientes</h3>
    <ul>
      <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade, percebi os resultados em poucas semanas!"</li>
      <li>⭐ ⭐ ⭐ ⭐ - "Ótimo custo-benefício, recomendo!"</li>
      <li>⭐ ⭐ ⭐ ⭐ - "Sabor muito bom, dissolve fácil!"</li>
    </ul>
  </section>
  <section class="comentarios">
    <h3>Adicione seu comentário</h3>
    <form class="form-comentario">
      <div class="avaliacao">
        <label for="estrela-5">
          <input type="radio" name="estrela" id="estrela-5" value="5">
          ⭐ ⭐ ⭐ ⭐ ⭐
        </label>
        <label for="estrela-4">
          <input type="radio" name="estrela" id="estrela-4" value="4">
          ⭐ ⭐ ⭐ ⭐
        </label>
        <label for="estrela-3">
          <input type="radio" name="estrela" id="estrela-3" value="3">
          ⭐ ⭐ ⭐
        </label>
        <label for="estrela-2">
          <input type="radio" name="estrela" id="estrela-2" value="2">
          ⭐ ⭐
        </label>
        <label for="estrela-1">
          <input type="radio" name="estrela" id="estrela-1" value="1">
          ⭐
        </label>
      </div>
      <textarea name="comentario" id="comentario" placeholder="Escreva seu comentário aqui..." rows="5" required></textarea>
      <button type="submit" class="submit-button">Enviar Comentário</button>
    </form>
  </section>
</main>