def combinar_arquivos(arquivo1, arquivo2, arquivo_saida):
    try:
        # Abrindo o primeiro arquivo e lendo o conteúdo
        with open(arquivo1, 'r', encoding='utf-8') as file1:
            conteudo1 = file1.read()
        
        # Abrindo o segundo arquivo e lendo o conteúdo
        with open(arquivo2, 'r', encoding='utf-8') as file2:
            conteudo2 = file2.read()

        # Escrevendo o conteúdo combinado em um novo arquivo
        with open(arquivo_saida, 'w', encoding='utf-8') as file_out:
            file_out.write(conteudo1)  # Escreve o conteúdo do primeiro arquivo
            file_out.write('\n')  # Adiciona uma nova linha entre os conteúdos
            file_out.write(conteudo2)  # Escreve o conteúdo do segundo arquivo
        
        print(f"Conteúdo dos arquivos {arquivo1} e {arquivo2} foi combinado em {arquivo_saida}")
    except FileNotFoundError as e:
        print(f"Erro: {e}")
    except Exception as e:
        print(f"Ocorreu um erro inesperado: {e}")

# Exemplo de uso
arquivo1 = 'nome.txt'
arquivo2 = 'lista.txt'
arquivo_saida = 'resultado.txt'
combinar_arquivos(arquivo1, arquivo2, arquivo_saida)
