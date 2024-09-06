def contar_vogais(arquivo_texto):
    vogais = "aeiouAEIOU"  # Definindo as vogais
    contagem_vogais = 0

    # Abrindo o arquivo em modo de leitura
    with open(arquivo_texto, 'r', encoding='utf-8') as arquivo:
        conteudo = arquivo.read()  # Lendo o conteúdo do arquivo
        
        # Iterando sobre cada caractere no conteúdo
        for char in conteudo:
            if char in vogais:
                contagem_vogais += 1

    return contagem_vogais

# Exemplo de uso
arquivo = 'list.txt'  # Nome do arquivo
total_vogais = contar_vogais(arquivo)
print(f"A quantidade de vogais no arquivo é: {total_vogais}")

