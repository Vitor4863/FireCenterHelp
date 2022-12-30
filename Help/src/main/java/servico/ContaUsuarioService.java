package servico;

import dao.ContaUsuarioDAO;
import modelo.ContaUsuario;

public class ContaUsuarioService {
	ContaUsuarioDAO contausuario = new ContaUsuarioDAO();

	public ContaUsuario buscarPorId(int id) {
		return contausuario.buscarPorId(id);
	}
	
	public boolean alterar(ContaUsuario contausario) {
		return contausuario.alterarUsuario(contausario);
	}

	
	public boolean  excluir(String id) {
int idUsuario;
		
		idUsuario = Integer.parseInt(id);
		
		return contausuario.excluirUsuario(idUsuario);
  }
	public boolean incluir(ContaUsuario contausuario) {
		ContaUsuarioDAO dao = new ContaUsuarioDAO();
		
		return dao.incluir(contausuario);
	}
}
