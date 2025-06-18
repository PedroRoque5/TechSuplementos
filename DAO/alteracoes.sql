-- Adicionar campo de parcelas na tabela compra
ALTER TABLE compra ADD COLUMN parcelas INT DEFAULT 1;
 
-- Atualizar registros existentes
UPDATE compra SET parcelas = 1 WHERE forma_pagamento = 'pix'; 