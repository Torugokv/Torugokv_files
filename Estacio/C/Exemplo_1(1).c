//Alunos: Vitor Ugo Sousa Vieira
//	  Fernando dos Santos de Menezes

#include <stdio.h>

int main() {
    
    
	int num1, num2, num3; 
	int soma;

	//Entrada de dados;

	printf("Preencha com as seguinte informações sobre o número de jogos de cada empresa:\n");
    
	printf("Número de jogos da Sony: \n");
	scanf("%d", &num1);
    
	printf("Número de jogos da Nintendo: \n");
	scanf("%d", &num2);

	printf("Número de jogos da Microsoft: \n");
	scanf("%d", &num3);

	//Saída de dados
	printf("Informações sobre o número de jogos de cada empresa: \n");
	printf("Número de jogos da Sony: %d\n", num1);
	printf("Número de jogos da Nintendo: %d\n", num2);
	printf("Número de jogos da Microsoft: %d\n", num3);
    
	//Processamento;
    
	soma = num1 + num2 + num3;
	printf("Número total de jogos de todas as empresas: %d\n", soma);
    
	return 0;

}