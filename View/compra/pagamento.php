<?php
// Sessão já é iniciada no index.php, não é necessário iniciar novamente
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';
use TechSuplementos\DAO\Conexao;

if (!isset($_SESSION['usuario_id'])) {
    header("Location: " . URL . "index.php?pg=login");
    exit;
}

// Verificar se é uma compra direta
$compra_direta = false;
$produto_direto = null;

if (isset($_GET['nome'])) {
    $conexao = new Conexao();
    $produto = $conexao->buscar("SELECT * FROM produtos WHERE nome = :nome", [':nome' => $_GET['nome']]);
    
    if (!empty($produto)) {
        $compra_direta = true;
        $produto_direto = $produto[0];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagamento</title>
  <link href="<?= ASSETS ?>css/card.css" rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
  <style>
    #pix-codigo {
      display: none !important;
      margin: 0 !important;
      padding: 0 !important;
      height: 0 !important;
      min-height: 0 !important;
      max-height: 0 !important;
      border: none !important;
    }
  </style>
</head>

<body class="card-body">
  <div class="container-card">
    <!-- Mensagem de Pagamento Confirmado -->
    <div id="msg-pagamento" style="display:none; color: green; font-weight: bold;">
      Pagamento confirmado!
    </div>

    <!-- Exibição de mensagens de erro -->
    <div id="msg-erro" style="display:none; color: red; font-weight: bold;"></div>

    <div class="payment-options">
      <h3>Escolha a forma de pagamento</h3>
      <label>
        <input type="radio" name="pagamento" value="cartao"> Cartão de Crédito
      </label>
      <label>
        <input type="radio" name="pagamento" value="pix"> Pix
      </label>
    </div>

    <!-- Visualização do Cartão -->
    <div id="card-visual" class="card-display" style="display: none;">
      <div class="card">
        <div class="card-label">CARTÃO DE CRÉDITO</div>
        <div id="display-number" class="card-number">0000 0000 0000 0000</div>
        <div id="display-name" class="card-name">MARIA DA SILVA</div>
        <div class="card-footer">
          <div id="display-exp" class="card-exp">00/00</div>
          <div id="display-cvv" class="card-cvv">123</div>
        </div>
      </div>
    </div>

    <!-- Formulário Cartão -->
    <div id="form-cartao" class="form-section" style="display: none;">
      <form id="formPagamento">
        <label for="name">Nome no cartão:</label>
        <input type="text" id="name" name="nome" placeholder="ex. Maria da Silva" maxlength="24">

        <label for="number">Número do cartão:</label>
        <input type="text" id="number" name="numero" placeholder="ex. 1234 5678 9123 0000" maxlength="19">

        <label>Data de validade:</label>
        <input type="text" id="month" name="mes" placeholder="MM" maxlength="2">
        <input type="text" id="year" name="ano" placeholder="YY" maxlength="2">

        <label for="cvc">CVV:</label>
        <input type="text" id="cvc" name="cvv" placeholder="123" maxlength="3">

        <label for="parcelas">Número de parcelas:</label>
        <select id="parcelas" name="parcelas">
          <option value="1">1x sem juros</option>
          <option value="2">2x sem juros</option>
          <option value="3">3x sem juros</option>
          <option value="4">4x sem juros</option>
          <option value="5">5x sem juros</option>
          <option value="6">6x sem juros</option>
          <option value="7">7x sem juros</option>
          <option value="8">8x sem juros</option>
          <option value="9">9x sem juros</option>
          <option value="10">10x sem juros</option>
        </select>
        <button type="submit">Confirmar</button>
      </form>
    </div>

    <!-- Formulário Pix com QRCode -->
    <div id="form-pix" class="form-section" style="display: none;">
      <h4>Pagamento via Pix</h4>
      <p>Escaneie o QR Code abaixo para pagar:</p>
      <div id="qrcode" style="margin: 20px 0; text-align: center;"></div>
      <p id="pix-codigo" style="word-break: break-all; font-size: 12px; margin: 10px 0; padding: 10px; background: #f5f5f5; border-radius: 5px;"></p>
      <div style="text-align: center; margin-top: 20px;">
        <button type="button" id="confirmar-pix" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
          Confirmar Pagamento
        </button>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const formCartao = document.getElementById("form-cartao");
      const formPix = document.getElementById("form-pix");
      const cardVisual = document.getElementById("card-visual");
      const qrcodeContainer = document.getElementById("qrcode");
      const pixCodigo = document.getElementById("pix-codigo");
      const msgErro = document.getElementById("msg-erro");
      const msgPagamento = document.getElementById("msg-pagamento");
      const confirmarPix = document.getElementById("confirmar-pix");

      // Função para obter o carrinho do localStorage ou produto direto
      function getCarrinho() {
        <?php if ($compra_direta): ?>
        return [{
          id: <?= $produto_direto['id'] ?>,
          name: "<?= $produto_direto['nome'] ?>",
          price: <?= $produto_direto['preco'] ?>,
          quantity: 1,
          sabor: null
        }];
        <?php else: ?>
        const carrinho = JSON.parse(localStorage.getItem('cartItems')) || [];
        console.log('Carrinho obtido:', carrinho);
        return carrinho;
        <?php endif; ?>
      }

      // Função para calcular o total do carrinho
      function calcularTotal(carrinho) {
        return carrinho.reduce((total, item) => total + (item.price * item.quantity), 0);
      }

      // Função para gerar o código PIX
      function gerarCodigoPix(valor) {
        // Aqui você pode implementar a lógica para gerar um código PIX real
        // Por enquanto, vamos usar um código de exemplo
        return `00020126580014BR.GOV.BCB.PIX0136123e4567-e89b-12d3-a456-426614174000520400005303986540599.905802BR5913TechSuplementos6008BRASILIA62070503***6304E2CA`;
      }

      // Função para validar e corrigir o carrinho
      function validarCarrinho() {
        <?php if ($compra_direta): ?>
        return [{
          id: <?= $produto_direto['id'] ?>,
          name: "<?= $produto_direto['nome'] ?>",
          price: <?= $produto_direto['preco'] ?>,
          quantity: 1,
          sabor: null
        }];
        <?php else: ?>
        const carrinho = JSON.parse(localStorage.getItem('cartItems') || '[]');
        console.log('Carrinho original:', carrinho);

        if (!Array.isArray(carrinho) || carrinho.length === 0) {
          console.error('Carrinho inválido ou vazio');
          return null;
        }

        const carrinhoValidado = carrinho.map(item => {
          // Validar e converter tipos
          const id = parseInt(item.id);
          const quantity = parseInt(item.quantity);
          const price = parseFloat(item.price);

          // Verificar se os valores são válidos
          if (isNaN(id) || id <= 0) {
            console.error('ID inválido:', item.id);
            return null;
          }
          if (isNaN(quantity) || quantity <= 0) {
            console.error('Quantidade inválida:', item.quantity);
            return null;
          }
          if (isNaN(price) || price <= 0) {
            console.error('Preço inválido:', item.price);
            return null;
          }

          return {
            id: id,
            quantity: quantity,
            price: price,
            name: item.name || '',
            sabor: item.sabor || null
          };
        }).filter(item => item !== null);

        console.log('Carrinho validado:', carrinhoValidado);

        if (carrinhoValidado.length === 0) {
          console.error('Nenhum item válido no carrinho');
          return null;
        }

        return carrinhoValidado;
        <?php endif; ?>
      }

      // Função para salvar a compra
      async function salvarCompra(dadosPagamento) {
        try {
          const carrinho = validarCarrinho();
          if (!carrinho) {
            throw new Error('Carrinho inválido');
          }

          const dadosEnvio = {
            carrinho: carrinho,
            tipo_pagamento: dadosPagamento.tipo
          };

          // Se for pagamento com cartão, incluir número de parcelas
          if (dadosPagamento.tipo === 'cartao') {
            const parcelas = document.getElementById('parcelas').value;
            dadosEnvio.parcelas = parcelas;
          }

          console.log('Enviando dados:', dadosEnvio);

          const response = await fetch('<?= URL ?>View/compra/processa_pagamento.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(dadosEnvio)
          });

          console.log('Resposta recebida:', response);

          if (!response.ok) {
            throw new Error('Erro na resposta do servidor: ' + response.status);
          }

          const data = await response.json();
          console.log('Dados recebidos:', data);
          
          if (data.sucesso) {
            // Limpar carrinho após compra bem-sucedida
            localStorage.removeItem('cartItems');
            msgPagamento.style.display = 'block';
            setTimeout(() => {
              window.location.href = '<?= URL ?>index.php?pg=historico';
            }, 2000);
          } else {
            throw new Error(data.mensagem || 'Erro ao salvar compra');
          }
        } catch (error) {
          console.error('Erro:', error);
          msgErro.textContent = error.message;
          msgErro.style.display = 'block';
        }
      }

      // Adicionar eventos para os radio buttons
      document.querySelectorAll('input[name="pagamento"]').forEach(radio => {
        radio.addEventListener('change', function() {
          // Esconder todos os formulários primeiro
          formCartao.style.display = 'none';
          formPix.style.display = 'none';
          cardVisual.style.display = 'none';
          qrcodeContainer.innerHTML = '';
          pixCodigo.textContent = '';

          // Mostrar o formulário selecionado
          if (this.value === 'cartao') {
            formCartao.style.display = 'block';
            cardVisual.style.display = 'block';
          } else if (this.value === 'pix') {
            formPix.style.display = 'block';
            
            // Calcular o total do carrinho
            const carrinho = getCarrinho();
            const total = calcularTotal(carrinho);
            
            // Gerar código PIX
            const codigoPix = gerarCodigoPix(total);
            
            // Limpar container do QR Code
            qrcodeContainer.innerHTML = '';
            
            // Gerar QR Code
            new QRCode(qrcodeContainer, {
              text: codigoPix,
              width: 300,
              height: 300,
              colorDark: "#000000",
              colorLight: "#ffffff",
              correctLevel: QRCode.CorrectLevel.H
            });
            
            // Exibir código PIX
            pixCodigo.textContent = codigoPix;
            pixCodigo.style.display = 'block';
          } else {
            pixCodigo.textContent = '';
            pixCodigo.style.display = 'none';
          }
        });
      });

      // Atualização do cartão visual
      document.getElementById("name").addEventListener("input", e => {
        document.getElementById("display-name").textContent = e.target.value || "MARIA DA SILVA";
      });

      document.getElementById("number").addEventListener("input", e => {
        let raw = e.target.value.replace(/\D/g, "").substring(0, 16);
        let formatted = raw.replace(/(.{4})/g, "$1 ").trim();
        e.target.value = formatted;
        document.getElementById("display-number").textContent = formatted || "0000 0000 0000 0000";
      });

      const updateExp = () => {
        const mm = document.getElementById("month").value.padStart(2, '0');
        const yy = document.getElementById("year").value.padStart(2, '0');
        document.getElementById("display-exp").textContent = `${mm}/${yy}`;
      };

      document.getElementById("month").addEventListener("input", updateExp);
      document.getElementById("year").addEventListener("input", updateExp);

      document.getElementById("cvc").addEventListener("input", e => {
        document.getElementById("display-cvv").textContent = e.target.value || "123";
      });

      // Adicionar evento de submit ao formulário
      document.getElementById('formPagamento').addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const tipoPagamento = document.querySelector('input[name="pagamento"]:checked')?.value;
        if (!tipoPagamento) {
          msgErro.textContent = 'Selecione uma forma de pagamento';
          msgErro.style.display = 'block';
          return;
        }

        await salvarCompra({ tipo: tipoPagamento });
      });

      // Evento para confirmar pagamento PIX
      confirmarPix.addEventListener('click', async () => {
        try {
          const carrinho = validarCarrinho();
          if (!carrinho) return;

          await salvarCompra({ tipo: 'pix' });
        } catch (error) {
          console.error("Erro ao processar pagamento:", error);
          msgErro.textContent = "Erro ao processar pagamento: " + error.message;
          msgErro.style.display = "block";
        }
      });
    });

    function validarFormulario() {
      const nome = document.getElementById("name").value;
      const numero = document.getElementById("number").value.replace(/\s/g, '');
      const mes = document.getElementById("month").value;
      const ano = document.getElementById("year").value;
      const cvc = document.getElementById("cvc").value;

      if (!validarNome(nome)) {
        window.alert("Nome no cartão inválido. Deve conter apenas letras e espaços.");
        return false;
      }

      if (!numero || !mes || !ano || !cvc) {
        window.alert("Por favor, preencha todos os campos.");
        return false;
      }

      if (!validarNumeroCartao(numero)) {
        window.alert("Número do cartão inválido.");
        return false;
      }

      if (mes < 1 || mes > 12) {
        window.alert("Mês inválido.");
        return false;
      }

      const dataAtual = new Date();
      const anoAtual = dataAtual.getFullYear() % 100;
      const mesAtual = dataAtual.getMonth() + 1;

      if (ano < anoAtual || (ano == anoAtual && mes < mesAtual)) {
        window.alert("Data de validade inválida.");
        return false;
      }

      if (cvc.length !== 3 || isNaN(cvc)) {
        window.alert("CVV inválido.");
        return false;
      }

      return true;
    }

    function validarNome(nome) {
      const regex = /^[A-Za-zÀ-ÿ\s]+$/;
      return regex.test(nome) && nome.trim().length > 0;
    }

    function validarNumeroCartao(numero) {
      let soma = 0;
      let deveDobrar = false;

      for (let i = numero.length - 1; i >= 0; i--) {
        let digito = parseInt(numero.charAt(i), 10);

        if (deveDobrar) {
          digito *= 2;
          if (digito > 9) digito -= 9;
        }

        soma += digito;
        deveDobrar = !deveDobrar;
      }

      return soma % 10 === 0;
    }
  </script>
</body>

</html>