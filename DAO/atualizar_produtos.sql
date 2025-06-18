-- Verificar se as colunas já existem antes de adicionar
SET @dbname = 'techsuplementos';
SET @tablename = 'produtos';
SET @columnname = 'estoque_atual';
SET @columnname2 = 'estoque_minimo';

-- Verificar se a coluna estoque_atual existe
SET @query = IF (
    EXISTS (
        SELECT * FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_SCHEMA = @dbname
        AND TABLE_NAME = @tablename
        AND COLUMN_NAME = @columnname
    ),
    'SELECT "Coluna estoque_atual já existe"',
    'ALTER TABLE produtos ADD COLUMN estoque_atual INT DEFAULT 0'
);
PREPARE stmt FROM @query;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Verificar se a coluna estoque_minimo existe
SET @query = IF (
    EXISTS (
        SELECT * FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_SCHEMA = @dbname
        AND TABLE_NAME = @tablename
        AND COLUMN_NAME = @columnname2
    ),
    'SELECT "Coluna estoque_minimo já existe"',
    'ALTER TABLE produtos ADD COLUMN estoque_minimo INT DEFAULT 5'
);
PREPARE stmt FROM @query;
EXECUTE stmt;
DEALLOCATE PREPARE stmt; 