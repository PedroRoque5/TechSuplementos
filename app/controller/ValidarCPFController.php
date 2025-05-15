<?php

class ValidarCPFController {
    public static function validarCPF($cpf) {
        // Remove caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);
        // Verifica se o CPF tem 11 dígitos ou se é uma sequência de números iguais
        if (strlen($cpf) != 11 || preg_match('/^(.)\1{10}$/', $cpf)) {
            return false;
        }
        // Validação do primeiro dígito verificador
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}