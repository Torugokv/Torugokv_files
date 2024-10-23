package src.carros;

public class Carro {

        int cavalos;
        String cor;
        String montadora;
        String transmissao;
        int capacidadeTanque;
        int combustivel;
        int kmPorLitros;

        int abastecer(int litros) {
            int soma = combustivel + litros;
            if(soma > capacidadeTanque){
                combustivel = capacidadeTanque;
                int sobra = soma - capacidadeTanque;
                return sobra;
            } else {
                combustivel = soma;
                return 0;
            }
        }

        int autonomiaCombustivel(){
            int autonomia = kmPorLitros * combustivel;
            return autonomia;
        }
}
