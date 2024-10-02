import java.util.Scanner;

public class CalculadoraIdade {
    public static void main(String[] args) {
        //1-> pegar o ano atual;
        //2-> pegar o ano de nascimento;
        //3-> subtrair o ano atual - ano de nascimento;
        Scanner leitorTeclado = new Scanner(System.in);

        System.out.println("Digite o ano atual: ");
        int anoAtual = leitorTeclado.nextInt();

        System.out.println("Digite seu ano de nascimento: ");
        int anoNascimento = leitorTeclado.nextInt();

        int resultado = anoAtual - anoNascimento;

        System.out.println("A idade é: " + resultado);

        if(resultado < 18){
            System.out.println("Você é menor de idade.");
        } else if (resultado < 60){
            System.out.println("Você é de Maior.");
        } else{
            System.out.println("Você é um idoso.");
        }

        leitorTeclado.close();
    }
}
