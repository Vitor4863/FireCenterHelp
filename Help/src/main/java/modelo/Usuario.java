package modelo;

public class Usuario {
	private int id;
	  private String telefone;
	  private String nome;
	  private String dataNascimento;
	  private String sangue;
	  private String alergia;
	  private String cep;
	  private String cpf;
	  private String numeroSeguranca;
	  private String deficiencia;
	  private boolean pcd;
	  
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getTelefone() {
		return telefone;
	}
	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getDataNascimento() {
		return dataNascimento;
	}
	public void setDataNascimento(String dataNascimento) {
		this.dataNascimento = dataNascimento;
	}
	public String getSangue() {
		return sangue;
	}
	public void setSangue(String sangue) {
		this.sangue = sangue;
	}
	public String getAlergia() {
		return alergia;
	}
	public void setAlergia(String alergia) {
		this.alergia = alergia;
	}
	public String getCep() {
		return cep;
	}
	public void setCep(String cep) {
		this.cep = cep;
	}
	public String getCpf() {
		return cpf;
	}
	public void setCpf(String cpf) {
		this.cpf = cpf;
	}
	public String getNumeroSeguranca() {
		return numeroSeguranca;
	}
	public void setNumeroSeguranca(String numeroSeguranca) {
		this.numeroSeguranca = numeroSeguranca;
	}
	public String getDeficiencia() {
		return deficiencia;
	}
	public void setDeficiencia(String deficiencia) {
		this.deficiencia = deficiencia;
	}
	public boolean isPcd() {
		return pcd;
	}
	public void setPcd(boolean pcd) {
		this.pcd = pcd;
	}
	@Override
	public String toString() {
		return "Usuario [id=" + id + ", telefone=" + telefone + ", nome=" + nome + ", dataNascimento=" + dataNascimento
				+ ", sangue=" + sangue + ", alergia=" + alergia + ", cep=" + cep + ", cpf=" + cpf + ", numeroSeguranca="
				+ numeroSeguranca + ", deficiencia=" + deficiencia + ", pcd=" + pcd + "]";
	}
	  

}
