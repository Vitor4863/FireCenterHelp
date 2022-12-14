package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import modelo.ContaUsuario;

public class UsuarioDAO {

	public class CategoriaDAO {
		
		
		
	}
	public boolean alterarUsuario (ContaUsuario  contaUsuario) {
		boolean resultado = true;
		int retornoQuery;
		
		Connection conexao = DAO.getConexao();
		
		String sql = "UPDATE tb_contaUsuario SET email=?, senha=?, nome=?, id=? WHERE id=?";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
			ResultSet rs = ps.executeQuery();
			
			contaUsuario.setId(rs.getInt("id"));
			contaUsuario.setEmail(rs.getString("email"));
			contaUsuario.setNome(rs.getString("nome"));
			contaUsuario.setSenha(rs.getString("senha"));
			
			retornoQuery = ps.executeUpdate();
			
			if(retornoQuery <= 0) {
				resultado = false;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return resultado;
		
	}
	public boolean excluirUsuario(int  idUsuario) {
		boolean resultado = true;
		int retornoQuery;
		
		Connection conexao = DAO.getConexao();
		
		String sql = "DELETE * FROM tb_contaUsuario WHERE id=?";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
			ps.setInt(1, idUsuario);
			retornoQuery = ps.executeUpdate();
			
			if(retornoQuery <= 0) {
				resultado = false;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return resultado;
		
	}
	public ContaUsuario buscarPorId(int id) {
		ContaUsuario contaUsuario = null;
		
		
		Connection conexao = DAO.getConexao();
		ResultSet rs = null;
		String sql = "SELECT * FROM tb_contaUsuario WHERE id=?";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
				
			ps.setInt(1, id);

			rs = ps.executeQuery();
			
			while(rs.next()) {
				 contaUsuario = new ContaUsuario();
			
				
				contaUsuario.setId(rs.getInt("id"));
				contaUsuario.setNome(rs.getString("nome"));
				contaUsuario.setSenha(rs.getString("senha"));
				contaUsuario.setEmail(rs.getString("email"));
				
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return contaUsuario;
	}
	public boolean incluir(ContaUsuario contaUsuario) {
		boolean retorno = true;
		int retornoQuery;
		
		Connection conexao = DAO.getConexao();
		
		String sql = "INSERT INTO tb_contaUsuario(email, nome , senha) VALUES(?, ? ,?)";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
			
			ps.setString(1, contaUsuario.getEmail());
			ps.setString(2, contaUsuario.getNome());
			ps.setString(3, contaUsuario.getSenha());
			
			retornoQuery = ps.executeUpdate();
			
			if (retornoQuery <= 0) {
				retorno = false;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return retorno;
	}
}
