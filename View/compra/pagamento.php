

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagamento</title>
  <link href="<?= ASSETS ?>css/card.css" rel='stylesheet'>
</head>
<script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.0/build/qrcode.min.js"></script>

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
        <input type="radio" name="pagamento" value="credito"> Cartão de Crédito
      </label>
      <label>
        <input type="radio" name="pagamento" value="pix"> Pix
      </label>
    </div>

    <!-- Visualização do Cartão -->
    <div id="card-visual" class="card-display">
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
    <div id="form-cartao" class="form-section">

      <form id="formPagamento" action="<?= URL . "index.php?pg=ValidarPagamento" ?>" method="post">


        <label for="name">Nome no cartão:</label>
        <input type="text" id="name" placeholder="ex. Maria da Silva" maxlength="24">

        <label for="number">Número do cartão:</label>
        <input type="text" id="number" placeholder="ex. 1234 5678 9123 0000" maxlength="19">

        <label>Data de validade:</label>
        <input type="text" id="month" placeholder="MM" maxlength="2">
        <input type="text" id="year" placeholder="YY" maxlength="2">

        <label for="cvc">CVV:</label>
        <input type="text" id="cvc" placeholder="123" maxlength="3">

        <label for="parcelas">Número de parcelas:</label>
        <select id="parcelas">
          <option value="1">1x</option>
          <option value="2">2x</option>
          <option value="3">3x</option>
          <option value="4">4x</option>
          <option value="5">5x</option>
          <option value="6">6x</option>
          <option value="7">7x</option>
          <option value="8">8x</option>
          <option value="9">9x</option>
          <option value="10">10x</option>
        </select>
        <button type="button" onclick="validarFormulario()">Confirmar</button>
      </form>
    </div>

    <!-- Formulário Pix com QRCode -->
    <div id="form-pix" class="form-section">
      <h4>Pagamento via Pix</h4>
      <p>Escaneie o QR Code abaixo para pagar:</p>
      <div id="qrcode"></div>
      <p id="pix-codigo" style="word-break: break-all; font-size: 12px; margin-top: 10px;"></p>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const formCartao = document.getElementById("form-cartao");
      const parcelasSelect = document.getElementById("parcelas");

      document.querySelectorAll('input[name="pagamento"]').forEach((radio) => {
        radio.addEventListener("change", () => {
          if (radio.value === "credito") {
            formCartao.classList.add("active");
            parcelasSelect.style.display = "block"; // Mostra o campo de parcelas
          } else if (radio.value === "pix") {
            formCartao.classList.remove("active");
            parcelasSelect.style.display = "none"; // Oculta o campo de parcelas
          }
        });
      });
    });

    document.addEventListener("DOMContentLoaded", () => {
      const formCartao = document.getElementById("form-cartao");
      const formPix = document.getElementById("form-pix");
      const cardVisual = document.getElementById("card-visual");
      const qrcodeContainer = document.getElementById("qrcode");
      const pixCodigo = document.getElementById("pix-codigo");

      document.querySelectorAll('input[name="pagamento"]').forEach((radio) => {
        radio.addEventListener("change", () => {
          if (radio.value === "credito") {
            formCartao.classList.add("active");
            formPix.classList.remove("active");
            cardVisual.style.display = "block";
          } else if (radio.value === "pix") {
            formPix.classList.add("active");
            formCartao.classList.remove("active");
            cardVisual.style.display = "none";

            // Gerar o código Pix simulado
            const chave = "exemplo@email.com";
            const valor = "R$ 100,00";
            const codigoPix = `00020126360014BR.GOV.BCB.PIX0114${chave}5204000053039865406100.005802BR5913NOME COMERCIAL6009SAO PAULO62100506ABC1236304B14F`; // exemplo
            pixCodigo.textContent = codigoPix;

            // Limpa o QR anterior e gera novo
            qrcodeContainer.innerHTML = "";
            QRCode.toCanvas(codigoPix, {
              width: 200
            }, function(err, canvas) {
              if (!err) {
                qrcodeContainer.appendChild(canvas);
              }
            });
          }
        });
      });

      // Atualização de dados do cartão
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
    });

    function validarFormulario() {
      const nome = document.getElementById("name").value;
      const numero = document.getElementById("number").value.replace(/\s/g, '');
      const mes = document.getElementById("month").value;
      const ano = document.getElementById("year").value;
      const cvc = document.getElementById("cvc").value;

      // Validação do nome
      if (!validarNome(nome)) {
        window.alert("Nome no cartão inválido. Deve conter apenas letras e espaços.");
        return;
      }

      // Validação simples
      if (!numero || !mes || !ano || !cvc) {
        window.alert("Por favor, preencha todos os campos.");
        return;
      }

      if (!validarNumeroCartao(numero)) {
        window.alert("Número do cartão inválido.");
        return;
      }

      if (mes < 1 || mes > 12) {
        window.alert("Mês inválido.");
        return;
      }

      const dataAtual = new Date();
      const anoAtual = dataAtual.getFullYear() % 100; // Últimos 2 dígitos do ano
      const mesAtual = dataAtual.getMonth() + 1; // Meses começam em 0

      if (ano < anoAtual || (ano == anoAtual && mes < mesAtual)) {
        window.alert("Data de validade inválida.");
        return;
      }

      if (cvc.length !== 3 || isNaN(cvc)) {
        window.alert("CVV inválido.");
        return;
      }

      const numParcelas = document.getElementById("parcelas").value;
      const msg = `Pagamento realizado em ${numParcelas}x sem juros!`;
      window.alert(msg);
      window.location.href = "<?= URL . "index.php?pg=home" ?>";
    }

    function validarNome(nome) {
      // Verifica se o nome contém apenas letras e espaços
      const regex = /^[A-Za-zÀ-ÿ\s]+$/;
      return regex.test(nome) && nome.trim().length > 0; // Verifica se não está vazio
    }

    function validarNumeroCartao(numero) {
      let soma = 0;
      let deveDobrar = false;

      // Percorre o número do cartão da direita para a esquerda
      for (let i = numero.length - 1; i >= 0; i--) {
        let digito = parseInt(numero.charAt(i), 10);

        if (deveDobrar) {
          digito *= 2;
          if (digito > 9) {
            digito -= 9; // Subtrai 9 se o resultado for maior que 9
          }
        }

        soma += digito;
        deveDobrar = !deveDobrar; // Alterna entre dobrar e não dobrar
      }

      return soma % 10 === 0; // O número é válido se a soma for múltiplo de 10
    }
  </script>
</body>

</html>