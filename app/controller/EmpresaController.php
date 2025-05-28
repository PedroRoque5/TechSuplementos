<?php
require_once './TechSuplementos/DAO/EmpresaDAO.php';

class EmpresaController
{
    public function cadastrar($dados)
    {
        // Limpeza e validação
        $dados['cnpj'] = preg_replace('/\D/', '', $dados['cnpj']);
        if (!$this->validarCNPJ($dados['cnpj'])) {
            echo "<script>alert('CNPJ inválido. Verifique e tente novamente.'); window.history.back();</script>";
            exit;
        }

        if (empty($dados['nome']) || empty($dados['email']) || empty($dados['cnpj']) || empty($dados['telefone']) || empty($dados['senha'])) {
            echo "<script>alert('Por favor, preencha todos os campos obrigatórios.'); window.history.back();</script>";
            exit;
        }

        // Hash da senha
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        // Verificação de CNPJ duplicado
        $dao = new EmpresaDAO();
        if ($dao->cnpjExiste($dados['cnpj'])) {
            echo "<script>alert('CNPJ já cadastrado!'); window.history.back();</script>";
            exit;
        }

        // Cadastro
        if ($dao->cadastrarEmpresa($dados)) {
            echo "<script>alert('Empresa cadastrada com sucesso!'); window.location.href='" . URL . "index.php?pg=empresa';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar empresa.'); window.history.back();</script>";
        }
    }

    private function validarCNPJ($cnpj)
    {
        if (strlen($cnpj) != 14 || preg_match("/^{$cnpj[0]}{14}$/", $cnpj)) {
            return false;
        }

        $peso1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        $peso2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

        $soma1 = 0;
        for ($i = 0; $i < 12; $i++) $soma1 += $cnpj[$i] * $peso1[$i];
        $dig1 = ($soma1 % 11) < 2 ? 0 : 11 - ($soma1 % 11);

        $soma2 = 0;
        for ($i = 0; $i < 13; $i++) $soma2 += $cnpj[$i] * $peso2[$i];
        $dig2 = ($soma2 % 11) < 2 ? 0 : 11 - ($soma2 % 11);

        return ($cnpj[12] == $dig1 && $cnpj[13] == $dig2);
    }
}
