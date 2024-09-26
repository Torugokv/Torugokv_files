import java.util.Scanner;

public class CalculadoraIMC {
    public static void main(String[] args) {

        Scanner leitorTeclado = new Scanner(System.in);
        //Acima^ -> Método;
        System.out.println("Digite seu peso (em Kilos): ");
        float peso = leitorTeclado.nextFloat();

        System.out.println("Agora, digite sua altura (em centímetros): ");
        float altura = leitorTeclado.nextFloat();

        altura = altura / 100;

        float resultado = peso /(altura  * altura);

        System.out.println(
            "O IMC para o peso " + peso + " , e altura "
                 + altura + " e " + resultado);
        
        leitorTeclado.close();
    }
}