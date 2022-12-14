package modelo;

public class ContaUsuario {
	 private int id;
	  private String email;
	  private String senha;
	  private String nome;
	  private Usuario id_Usuario;
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getSenha() {
		return senha;
	}
	public void setSenha(String senha) {
		this.senha = senha;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public Usuario getId_Usuario() {
		return id_Usuario;
	}
	public void setId_Usuario(Usuario id_Usuario) {
		this.id_Usuario = id_Usuario;
	}
	@Override
	public String toString() {
		return "ContaUsuario [id=" + id + ", email=" + email + ", senha=" + senha + ", nome=" + nome + ", id_Usuario="
				+ id_Usuario + "]";
	}
	
}
