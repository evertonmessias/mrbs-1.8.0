#!/bin/bash

# Define o nome do arquivo de saída
ARQUIVO_SAIDA="0_php_tudo_junto.txt"

# Limpa o arquivo de saída caso ele já exista
> "$ARQUIVO_SAIDA"

# Escreve o diretório atual no topo do arquivo
echo "Diretório atual: $(pwd)" >> "$ARQUIVO_SAIDA"
echo -e "\n========================================\n" >> "$ARQUIVO_SAIDA"

# Loop que passa por todos os arquivos .php
for f in *.php; do
    # Evita que o script tente ler o próprio arquivo de saída se ele terminar em .php
    if [ "$f" != "$ARQUIVO_SAIDA" ]; then
        echo "Processando: $f"
        
        # 1. Escreve o nome do arquivo
        echo "$f" >> "$ARQUIVO_SAIDA"
        
        # 2. Pula 2 linhas
        echo -e "\n\n" >> "$ARQUIVO_SAIDA"
        
        # 3. Mostra o conteúdo do arquivo
        cat "$f" >> "$ARQUIVO_SAIDA"
        
        # 4. Pula 3 linhas, coloca os asteriscos e pula mais 3 linhas
        echo -e "\n\n\n****************************************\n\n\n" >> "$ARQUIVO_SAIDA"
    fi
done

echo "Pronto! Tudo foi salvo em $ARQUIVO_SAIDA"
