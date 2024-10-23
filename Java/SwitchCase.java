import java.util.Scanner;

public class SwitchCase {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int opcao;
        double ValorTotal = 0;

        do{
        System.out.println("Digite uma opção do menu: ");
        System.out.println("1. Sanduiche (R$ 10,00)");
        System.out.println("2. Pizza (R$ 30,00)");
        System.out.println("3. Sorvete (R$ 5,00)");
        System.out.println("0. Sair");
        
        opcao = scanner.nextInt();

        switch(opcao){
            case 1:
                System.out.println("Sanduiche");
                ValorTotal += 10;
                break;
            case 2:
                System.out.println("Pizza");
                ValorTotal +=30;
                break;
            case 3:
                System.out.println("Sorvete");
                ValorTotal +=5;
                break;
            case 0:
                System.out.println("Finalizando o pedido!");
                break;
            default:
                System.out.println("Escolha uma opção válida.");  
            }

        } while (opcao != 0);
        scanner.close();
    }
}
