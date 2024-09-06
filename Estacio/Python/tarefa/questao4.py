def contar_vogais(arquivo):
    vogais = "aeiouAEIOU"
    contador_vogais = 0

    try:
        with open(arquivo, 'r') as file:
            for linha in file:
                for caractere in linha:
                    if caractere in vogais:
                        contador_vogais += 1
        return contador_vogais
    except FileNotFoundError:
        print(f"O arquivo '{arquivo}' não foi encontrado.")
        return 0

def main():
    nome_arquivo = input("Digite o nome do arquivo: ")
    numero_vogais = contar_vogais(nome_arquivo)
    print(f"O arquivo '{nome_arquivo}' possui {numero_vogais} letras que são vogais.")

if __name__ == "__main__":
    main()
