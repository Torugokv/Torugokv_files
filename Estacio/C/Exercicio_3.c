#include <stdio.h>

int main(){
    int tdl;

    printf("Digite o tamanho do lado do quadrado: \n");
    scanf("%d", &tdl);
    
    //Exibe o valor da área do quadrado:
    printf("Área do quadrado = %d\n", tdl * tdl);

    //Exibe o valor do perímetro do quadrado:
    printf("Perímetro do quadrado = %d\n", tdl * 4);

    
    return 0;
}