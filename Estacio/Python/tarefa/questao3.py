def contar_linhas(arquivo):
    try:
        with open(arquivo, 'r') as file:
            linhas = file.readlines()
            return len(linhas)
    except FileNotFoundError:
        print(f"O arquivo '{arquivo}' não foi encontrado.")
        return 0

def main():
    nome_arquivo = input("Digite o nome do arquivo: ")
    numero_linhas = contar_linhas(nome_arquivo)
    print(f"O arquivo '{nome_arquivo}' possui {numero_linhas} linhas.")

if __name__ == "__main__":
    main()
