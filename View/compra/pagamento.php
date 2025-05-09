<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartão de Crédito</title>
  <link href="<?= ASSETS ?>css/card.css" rel="stylesheet">
</head>
<body class="card-body">
  <div class="container-card">
    <div class="card-display">
      <div class="card">
        <div class="card-label">CARTÃO DE CRÉDITO</div>
        <div class="chip"></div>
        <div id="display-number" class="card-number">0000 0000 0000 0000</div>
        <div id="display-name" class="card-name">MARIA DA SILVA</div>
        <div class="card-footer">
          <div id="display-exp" class="card-exp">00/00</div>
          <div id="display-cvv" class="card-cvv">123</div> <!-- CVV visível na frente -->
        </div>
      </div>
    </div>

```
<div class="form-section">
  <form id="card-form">
    <label for="name">NOME NO CARTÃO</label>
    <input type="text" id="name" placeholder="ex. Maria da Silva" maxlength="24">

    <label for="number">NUMERO DO CARTÃO</label>
    <input type="text" id="number" placeholder="ex. 1234 5678 9123 0000" maxlength="19">

    <div class="row">
      <div class="col">
        <label>DATA DE VALIDADE</label>
        <div class="exp-inputs">
          <input type="text" id="month" placeholder="MM" maxlength="2">
          <input type="text" id="year" placeholder="YY" maxlength="2">
        </div>
      </div>
      <div class="col">
        <label for="cvc">CVV</label>
        <input type="text" id="cvc" placeholder="ex. 123" maxlength="3">
      </div>
    </div>

    <button type="submit">Confirmar</button>
  </form>
</div>
```

  </div>

  <script> document.addEventListener("DOMContentLoaded", () => {
  const nameInput = document.getElementById("name");
  const numberInput = document.getElementById("number");
  const monthInput = document.getElementById("month");
  const yearInput = document.getElementById("year");
  const cvcInput = document.getElementById("cvc");  // Novo campo para capturar o CVV

  const displayName = document.getElementById("display-name");
  const displayNumber = document.getElementById("display-number");
  const displayExp = document.getElementById("display-exp");
  const displayCvv = document.getElementById("display-cvv"); // Onde o CVV será exibido

  nameInput.addEventListener("input", () => {
    displayName.textContent = nameInput.value || "MARIA DA SILVA";
  });

  numberInput.addEventListener("input", () => {
    let raw = numberInput.value.replace(/\D/g, "").substring(0, 16);
    let formatted = raw.replace(/(.{4})/g, "$1 ").trim();
    numberInput.value = formatted;
    displayNumber.textContent = formatted || "0000 0000 0000 0000";
  });

  function updateExp() {
    const mm = monthInput.value.padStart(2, '0');
    const yy = yearInput.value.padStart(2, '0');
    displayExp.textContent = `${mm}/${yy}`;
  }

  monthInput.addEventListener("input", updateExp);
  yearInput.addEventListener("input", updateExp);

  // Adicionando o evento de input para o campo CVC
  cvcInput.addEventListener("input", () => {
    displayCvv.textContent = cvcInput.value || "123"; // Atualiza o CVV no display
  });
});
</script>

</body>
</html>
