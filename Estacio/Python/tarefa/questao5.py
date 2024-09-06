def combinar_arquivos(arquivo1, arquivo2, arquivo_resultado):
    try:
        # Abre o primeiro arquivo e lê o conteúdo
        with open(arquivo1, 'r') as file1:
            conteudo1 = file1.read()

        # Abre o segundo arquivo e lê o conteúdo
        with open(arquivo2, 'r') as file2:
            conteudo2 = file2.read()

        # Abre o terceiro arquivo para escrita e escreve os conteúdos combinados
        with open(arquivo_resultado, 'w') as resultado:
            resultado.write(conteudo1)
            resultado.write(conteudo2)

        print(f"Conteúdo combinado escrito em {arquivo_resultado} com sucesso.")

    except FileNotFoundError as e:
        print(f"Erro: {e}")

# Chamando a função com os nomes dos arquivos
combinar_arquivos('lista.txt', 'nomes.txt', 'resultado.txt')
