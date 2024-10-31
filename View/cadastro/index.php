 <link href="<?= ASSETS ?>css/pessoa.css" rel='stylesheet'>
 <div class="form">
   <form id="Cadastro">
     <div id="email"><input type="email" id="email" placeholder="E-mail*"></div>
     <div><input type="text" id="nome" placeholder="Nome*"></div>
     <div><input type="number" id="cpf" placeholder="CPF*" maxlength="11" oninput="if(this.value.length > 11) this.value = this.value.slice(0, 11)"></div>
     <div><input type="tel" id="telefone" placeholder="Telefone*" maxlength="14" pattern="\d{10,11}" title="Insira um telefone válido"></div>
     <div><input type="password" id="senha" placeholder="Senha"></div>
     <a class="btn btn-success" href="<?= URL . 'index.php?pg=login' ?>">Login</a>
     <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
   </form>
 </div>

 <script>
  //código para inserir usuário
  
  document.getElementById('Cadastro').addEventListener('submit', function(event){

    const email = document.getElementById('email').value
    const nome = document.getElementById('nome').value
    const cpf = document.getElementById('cpf').value
    const telefone = document.getElementById('telefone').value
    const senha = document.getElementById('senha').value

    fetch('cadastrar.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ email, nome, cpf, telefone, senha })
    })
    .then(response => response.json())
    .then(data => {
      alert('Cadastro realizado com sucesso!')
    })
    .catch(error => {
      console.error('Erro ao cadastrar', error)
    })
  })
 </script>