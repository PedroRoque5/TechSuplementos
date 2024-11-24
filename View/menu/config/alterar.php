<link rel="stylesheet" href="<?= ASSETS ?>css/alterar.css" rel="stylesheet">
    <div class="form-container">
        <h2>Alterar Senha</h2>
        <form id="passwordForm">
            <div class="form-group">
                <label for="currentPassword">Senha Atual</label>
                <input type="password" id="currentPassword" name="currentPassword" required>
            </div>
            <div class="form-group">
                <label for="newPassword">Nova Senha</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar Nova Senha</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="error-message" id="errorMessage"></div>
            <button type="button" class="btn" onclick="validatePassword()">Alterar Senha</button>
        </form>
    </div>
    <script>
        function validatePassword() {
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const errorMessage = document.getElementById('errorMessage');

            if (newPassword !== confirmPassword) {
                errorMessage.textContent = "As senhas não coincidem!";
            } else if (newPassword.length < 6) {
                errorMessage.textContent = "A nova senha deve ter pelo menos 6 caracteres.";
            } else {
                errorMessage.textContent = "";
                alert("Senha alterada com sucesso!"); // Simulação
                document.getElementById('passwordForm').reset();
            }
        }
    </script>