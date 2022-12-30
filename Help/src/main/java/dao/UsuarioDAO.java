package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;


import modelo.Usuario;

public class UsuarioDAO {

	
	public boolean alterar (Usuario  usuario) {
		boolean resultado = true;
		int retornoQuery;
		
		Connection conexao = DAO.getConexao();
		
		String sql = "UPDATE tb_usuario SET  pcd=? ,deficiencia=? , numeroSeguranca=? , cpf=? , cep=? , alergia=? , sangue=? , dataNascimento=?, nome=?, telefone=?, id=? WHERE id=?";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
			ResultSet rs = ps.executeQuery();
			
			usuario.setId(rs.getInt("id"));
			usuario.setTelefone(rs.getString("telefone"));
			usuario.setNome(rs.getString("nome"));
			usuario.setDataNascimento(rs.getString("dataNascimento"));
			usuario.setSangue(rs.getString("sangue"));
			usuario.setAlergia(rs.getString("alergia"));
			usuario.setCep(rs.getString("cep"));
			usuario.setCpf(rs.getString("cpf"));
			usuario.setNumeroSeguranca("numeroSeguranca");
			usuario.setDeficiencia(rs.getString("deficiencia"));
			usuario.setPcd(rs.getBoolean("pcd"));
			
			
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
		
		String sql = "DELETE * FROM tb_usuario WHERE id=?";
		
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
	public Usuario buscarPorId(int id) {
		
		Usuario usuario = null;		
		
		Connection conexao = DAO.getConexao();
		ResultSet rs = null;
		String sql = "SELECT * FROM tb_usuario WHERE id=?";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
				
			ps.setInt(1, id);

			rs = ps.executeQuery();
			
			while(rs.next()) {
				 usuario = new Usuario();
			
				 usuario.setId(rs.getInt("id"));
					usuario.setTelefone(rs.getString("telefone"));
					usuario.setNome(rs.getString("nome"));
					usuario.setDataNascimento(rs.getString("dataNascimento"));
					usuario.setSangue(rs.getString("sangue"));
					usuario.setAlergia(rs.getString("alergia"));
					usuario.setCep(rs.getString("cep"));
					usuario.setCpf(rs.getString("cpf"));
					usuario.setNumeroSeguranca("numeroSeguranca");
					usuario.setDeficiencia(rs.getString("deficiencia"));
					usuario.setPcd(rs.getBoolean("pcd"));
					
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return usuario;
	}
	public boolean incluir(Usuario usuario) {
		boolean retorno = true;
		int retornoQuery;
		
		Connection conexao = DAO.getConexao();
		
		String sql = "INSERT INTO tb_usuario(telefone, nome , dataNascimento , sangue , alergia , cep , cpf , numeroSeguranca , Deficiencia , Pcd) VALUES(?, ? ,?)";
		
		try {
			PreparedStatement ps = conexao.prepareStatement(sql);
			
			ps.setString(1, usuario.getTelefone());
			ps.setString(2, usuario.getNome());
			ps.setString(3, usuario.getDataNascimento());
			ps.setString(4, usuario.getSangue());
			ps.setString(5, usuario.getAlergia());
			ps.setString(6, usuario.getCep());
			ps.setString(7, usuario.getCpf());
			ps.setString(8, usuario.getNumeroSeguranca());
			ps.setString(9, usuario.getDeficiencia());
			ps.setBoolean(10,usuario.isPcd());
			
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