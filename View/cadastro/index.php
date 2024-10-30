 <link href="<?= ASSETS ?>css/pessoa.css" rel='stylesheet'>
 <div class="form">
   <form>
     <div id="email"><input type="email" placeholder="E-mail*"></div>
     <div><input type="text" placeholder="Nome*"></div>
     <div><input type="number" placeholder="CPF*" maxlength="11" oninput="if(this.value.length > 11) this.value = this.value.slice(0, 11)"></div>
     <div><input type="tel" placeholder="Telefone*" maxlength="14" pattern="\d{10,11}" title="Insira um telefone válido"></div>
     <div><input type="password" placeholder="Senha"></div>
     <a class="btn btn-success" href="<?= URL . 'index.php?pg=login' ?>">Login</a>
     <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
   </form>
 </div>