public class EX4 {
    @SuppressWarnings("empty-statement")
    public static void main(String[] args) {
        int numero;
        for (numero = 2; numero <= 50; numero++){
            boolean primo = true;
            for (int j = 2; j < numero; j++) {
                if(numero % j == 0) {
                    primo = false;
                    break;
                }
            }
            if(primo){
                System.out.println(numero + " é primo");
            }
        }
    }
}
