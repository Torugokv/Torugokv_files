#include <stdio.h>

int main() {
    int a;

    printf("Digite um valor em Decimal: \n");
    scanf("%d", &a);

    // Exibe o valor em octal
    printf("\n%d em octal: %o\n", a, a);

    // Exibe o valor em hexadecimal
    printf("%d em hexadecimal: %x\n\n", a, a);

    return 0;
}
