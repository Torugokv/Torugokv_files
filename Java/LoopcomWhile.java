import java.util.Scanner;
public class LoopcomWhile {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite o valor: ");
        int contador = scanner.nextInt();
        int valor = 2;

        while (valor <= contador){
            
            System.out.println(valor);
            valor = valor + 2;
            
        }
        scanner.close();
    }  
}