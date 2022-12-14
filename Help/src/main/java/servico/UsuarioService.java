package servico;

import dao.UsuarioDAO;
import modelo.ContaUsuario;

public class UsuarioService {
	UsuarioDAO contausuario = new UsuarioDAO();

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
	public boolean incluirCategoria(ContaUsuario contausuario) {
		UsuarioDAO dao = new UsuarioDAO();
		
		return dao.incluir(contausuario);
	}
}
