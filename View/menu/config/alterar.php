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