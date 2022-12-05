package binance;

import java.util.Scanner;

public class javaCoinMain extends ContaBancaria{

	public static void main(String[] args) {
		
		Scanner ler = new Scanner(System.in);
		
		ContaBancaria x = new ContaBancaria();
		
		carteira y = new carteira();
		
		Pessoa user = new Pessoa();
		
		System.out.println("seja  bem vindo!");
		System.out.println("deseja cadastrar?");
		System.out.println("sim = 1 \nnão = 2 ");
		Integer sn = ler.nextInt();
		if(sn == 1) {
			user.setNome(ler.nextLine());
			user.setCpf(ler.nextInt());
			user.setEmail(ler.nextLine());
			user.setNcont(ler.nextInt());
			
			}
		
		System.out.println("MENU DE FUNÇÕES");
		System.out.println("depositar patrimonio = 1");
		System.out.println("sacar patrimonio = 2");
		
		Integer esc = ler.nextInt();
		System.out.println("insira o valor desejado");
		Integer dinhero = ler.nextInt();
		
		if(esc == 1) {
		x.Depositar(dinhero);
		}
	
		if(esc == 2 ) {
		x.Sacar(dinhero);
		}
	
		
		acao petrobras = new acao();
		petrobras.setNome("petrobras - PTbr");
		petrobras.setPreço(13);
		petrobras.setDividendo(3);
		
		acao tesla = new acao();
		tesla.setNome("US-Tesla");
		tesla.setPreço(10);
		tesla.setDividendo(2);
		
		acao cocacola = new acao();
		cocacola.setNome("Coca-cola");
		cocacola.setPreço(15);
		cocacola.setDividendo(4);
		
		
		System.out.println("Deseja comprar? \nSim=1 \nNão=2");
		Integer cpm = ler.nextInt();
		
		if(cpm == 1) {

			System.out.println("Ações disponiveis:");
			System.out.println("1-Petrobras \n2-Tesla \n3-Coca-Cola");
			
			System.out.println("escolha a ação desejada");
			Integer ac = ler.nextInt();
			
			
			
			if(ac == 1) {
				Integer ativ = petrobras.getPreço();
				y.Comprar(ativ);
			}

			else if(ac == 2) {
				Integer ativ = tesla.getPreço();
				y.Comprar(ativ);
			}

			else if(ac == 3) {
				Integer ativ = cocacola.getPreço();
				y.Comprar(ativ);
			}
			
		}
		
		System.out.println("Deseja vender? \nSim=1 \nNão=2");
		Integer vnd = ler.nextInt();
		
		if(vnd == 1) {
		
		System.out.println("Ações disponiveis:");
		System.out.println("1-Petrobras \n2-Tesla \n3-Coca-Cola");
		
		System.out.println("escolha a ação desejada");
		Integer av = ler.nextInt();
		
		
		if(av == 1) {
			Integer pas = petrobras.getPreço();
			y.Vender(pas);
		}

		else if(av == 2) {
			Integer pas = tesla.getPreço();
			y.Vender(pas);
		}

		else if(av == 3) {
			Integer pas = cocacola.getPreço();
			y.Vender(pas);
		}
		
	}
		
	

	}

}
