package servico;



import dao.UsuarioDAO;

import modelo.Usuario;

public class UsuarioService {
	UsuarioDAO usuario = new UsuarioDAO();
	
	public boolean alterar(Usuario usr) {
		return usuario.alterar(usr);
	}


	public Usuario buscarPorId(int id) {
		return usuario.buscarPorId(id);
	}
	
	public boolean  excluirUsuario(String id) {
         int idUsuario;
		
		idUsuario = Integer.parseInt(id);
		
		return usuario.excluirUsuario(idUsuario);
  }
	public boolean incluir(Usuario usuario) {
		UsuarioDAO dao = new UsuarioDAO();
		
		return dao.incluir(usuario);
	}
	
}