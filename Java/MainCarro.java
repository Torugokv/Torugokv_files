public class MainCarro {
    public static void main(String[] args) {

        Carro punto new Carro();
        punto.cavalos = 100;
        punto.cor = "Preta";
        punto.montadora = "Fiat";
        punto.transmissao = "Manual";

        Carro civic = new Carro();
        civic.cavalos = 150;
        civic.cor = "Prata";
        civic.montadora = "Honda";
        civic.transmissao = "Automatica";

        System.out.println("Cav do Punto");
        System.out.println("Cavalos:" + punto.cavalos);
        
    }
}
