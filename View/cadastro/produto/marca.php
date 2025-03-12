<link href="<?= ASSETS ?>css/pessoa.css" rel='stylesheet'>
 <h1 Class="Cad">Cadastre o sua Empresa:</h1>
 <div class="form">
   <form id="Cadastro" action="<?= URL . 'index.php?pg=cad' ?>" method="POST">
     <div><input type="email" name="email" id="email" placeholder="E-mail*" required></div>
     <div><input type="text" name="nome" id="nome" placeholder="Nome*" required></div>
     <div><input type="number" name="cpf" id="cpf" placeholder="CNPJ*" maxlength="11" required></div>
     <div><input type="text" id="pais_origem" name="pais_origem" placeholder="País de Origem"></div>
     <div><input type="date" id="ano_fundacao" name="ano_fundacao" placeholder="Ano de Fundação"></div>
     <div><input type="tel" name="telefone" id="telefone" placeholder="Telefone*" maxlength="14" required></div>
     <div><input type="password" name="senha" id="senha" placeholder="Senha" required></div>
     <button class="btn btn-success">Cadastrar</button>
     <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
   </form>
 </div>