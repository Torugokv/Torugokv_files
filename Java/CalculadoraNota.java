import java.util.Scanner;
public class CalculadoraNota {
    public static void main(String[] args) {

        Scanner calcNota = new Scanner(System.in);

        System.out.println("Digite a primeira nota");
        float nota1 = calcNota.nextFloat();

        System.out.println("Digite a segunda nota");
        float nota2 = calcNota.nextFloat();

        System.out.println("Digite a terceira nota");
        float nota3 = calcNota.nextFloat();

        double resultado = (nota1 + nota2 + nota3) / 3;

        System.out.println("O resultado da Média é: " + resultado);

        if(resultado >= 6){
           System.out.println("Aprovado");
        } else {
            System.out.println("Reprovado");
        }

        calcNota.close();
    }
    
}
