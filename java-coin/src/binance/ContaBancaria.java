package binance;

public class ContaBancaria {

	
	public double saldo=0;
	
	
	public Double Sacar(Integer valor) {
		if(valor > saldo) {
			System.out.println("saldo insuficiente");
		}else {
		saldo = saldo - valor;
		}
		return saldo;
	}
	
			
	public Double Depositar(Integer vale) {
		saldo = saldo + vale;
		return saldo;
	}
	
			
	
	
	
}
