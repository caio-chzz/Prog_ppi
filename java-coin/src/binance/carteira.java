package binance;

import java.util.ArrayList;

public class carteira extends ContaBancaria{

	ArrayList<String> posses =  new ArrayList<>();
	
	public Double Comprar(Integer ativo) {
	   saldo = saldo - ativo;
		//posses.add(1,get.nome );
		return saldo;
	}
	
	public Double Vender(Integer venda) {
			saldo = saldo + venda;
			posses.remove(1);
			return saldo;
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
