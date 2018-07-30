<?php			
include "../include/config.php"; 





class Usuarios {
	
	
    private $id;
	private $email;
	private $senha;
	private $tel;
	private $cpf;
	private $cnpj;
	private $nome;
	private $sobrenome;
	private $endereco;
	private $cep;
	private $pdo;
	private $estado;
	private $cidade;
	private $numero;
	private $bairro;
	private $complemento;
	private $nivel;
    private $foto;
	private $categoria;
    private $empresa;
	private $data_cadastro;
	private $status;
	private $historico;
	private $site;
	
	


public function __construct($i=""){

		
	try {
				$this->pdo = new PDO("mysql:dbname=inteligem;host=localhost","root", "");

			
		} catch(PDOException $e){
	echo "Falha ao conectar com PDO".$e->getMessage();
		}
			

		if(empty($i) == false){
			
		$sql = "SELECT * FROM usuarios WHERE id =?";
        $sql = $this->pdo->prepare($sql);
		$sql->execute(array($i));
		
		if($sql->rowCount() >0){
			$data = $sql->fetch();
			$this->id = $data['id'];
			$this->email = $data['email'];
			$this->senha = $data['senha'];
			$this->nome = $data['nome'];
			$this->sobrenome = $data['sobrenome'];
			$this->cep = $data['cep'];
			$this->cpf = $data['cpf'];
			$this->cnpj = $data['cnpj'];
			$this->endereco = $data['endereco'];
			$this->tel = $data['tel'];
			$this->cidade = $data['cidade'];
			$this->bairro = $data['bairro'];
			$this->estado = $data['estado'];
			$this->numero = $data['numero'];
			$this->complemento = $data['complemento'];
			$this->foto = $data['foto'];
			$this->nivel =$data['nivel'];
			$this->data_cadastro =$data['data_cadastro'];
			$this->categoria =$data['categoria'];
			$this->empresa =$data['empresa'];
			$this->status =$data['status'];
			$this->historico =$data['historico'];
			$this->site =$data['site'];
		}
	} 
	}

	 public function getCategoria(){
		return $this->categoria;
	}
	
	public function setCategoria($cats){
	  $this->categoria =$cats;
	}
	
	public function getStatus(){
		return $this->status;
	}
	
	public function setStatus($statS){
	  $this->status =$statS; 
	}
	
	
	 public function getEmpresa(){
		return $this->empresa;
	}
	
	public function setEmpresa($emps){
	  $this->empresa =$emps;
	}
	
	 public function getComplemento(){
		return $this->complemento;
	}
	
	public function setSite($sit){
	  $this->site =$sit;
	}
	
	 public function getSite(){
		return $this->site;
	}
	
	public function setHistorico($hist){
	  $this->historico =$hist;
	}
	
	 public function getHistorico(){
		return $this->historico;
	}
	
	
	
	
	public function setComplemento($comp){
	  $this->complemento =$comp;
	}
	
	 public function getDataCadastro(){
		return $this->data_cadastro;
	}
	
	public function setDataCadastro($dat){
	  $this->data_cadastro =$dat;
	}
	
	
	
	

	
	 public function getNivel(){
		return $this->nivel;
	}
	
	public function setNivel($niv){
	  $this->nivel = $niv;
	}
	
	
	public function getId(){
		return $this->id;
	}
	
	public function setEmail($ema){
	  $this->email =$ema;
	}
	
	public function getEmail(){
		return $this->email;
	}

	
		public function setSenha($s){
	    $this->senha =md5($s);
		//$this->senha =$s;
	}
	
		public function setNome($n){
	  $this->nome =$n;
	}
	
	public function getNome(){
		return $this->nome;
	}

	
	public function setSobrenome($sn){
	  $this->sobrenome =$sn;
	}
	
	public function getSobrenome(){
		return $this->sobrenome;
	}
	
	public function setTel($tel){
	  $this->tel =$tel;
	}
	
	public function getTel(){
		return $this->tel;
	}
	
	public function setCep($cep){
	  $this->cep =$cep;
	}
	
	public function getCep(){
		return $this->cep;
	}
	
	public function setCnpj($cnpj){ 
	  $this->cnpj =$cnpj;
	}
	
	public function getCnpj(){
		return $this->cnpj;
	}
	
	public function setCpf($cpf){
	  $this->cpf =$cpf;
	}

	
	public function getCpf(){
		return $this->cpf;
	}
	
	public function setEndereco($endereco){
	  $this->endereco =$endereco;
	}
	
	public function getEndereco(){
		return $this->endereco;
	}
	
	public function setEstado($est){
	  $this->estado =$est;
	}
	
	public function getEstado(){
		return $this->estado;
	}
	
	public function setNumero($numb){
	  $this->numero =$numb;
	}
	
	public function getNumero(){
		return $this->numero;
	}
	
	public function setCidade($city){
	  $this->cidade =$city;
	}
	
	public function getCidade(){
		return $this->cidade;
	}
	public function setBairro($bairr){
	  $this->bairro =$bairr;
	}
	
	public function getBairro(){
		return $this->bairro;
	}
	
		public function setFoto($f){
		 $this->foto =$f;
	} 
		public function getFoto(){
		return $this->foto;
	}



public function salvar(){
		if(!empty($this->id)){

$sql = "UPDATE usuarios SET email=?, nome=?,
			sobrenome=?, senha=?, cep=?, cpf=?, cnpj=?, endereco=?, 
			tel=?, cidade=?, bairro=?, estado=?, numero=?, complemento=?, nivel=?, foto=?, data_cadastro=?, categoria=?, empresa=?, status=?, site=?, historico=? 
			WHERE id=?";
			$sql = $this->pdo->prepare($sql);
			$sql -> execute(array(
			$this->email, 
			$this->nome, 
			$this->sobrenome, 
			$this->senha, 
			$this->cep,
			$this->cpf,
			$this->cnpj,
			$this->endereco, 
			$this->tel,
			$this->cidade,
			$this->bairro,
			$this->estado,
			$this->numero,
			$this->complemento,
			$this->nivel,
			$this->foto,
			$this->data_cadastro,
			$this->categoria,
			$this->empresa,
			$this->status,
			$this->site,
			$this->historico,
			$this->id)); 
			
			//print_r($sql->errorInfo());
			
			//var_dump($sql);
		
			
		}
		else {
			
			$sql = "SELECT * FROM usuarios WHERE email= '".$this->email."'";
			//echo $sql;
            $sql = $this->pdo->prepare($sql);
			$sql -> execute();
			
			if($sql->rowCount() == 0){
			$sql = "INSERT INTO usuarios SET email=?, nome=?,
			sobrenome=?, 
			senha=?, 
			cep=?, 
			cpf=?,
			cnpj=?,
			endereco=?, 
			tel=?,
			cidade=?, 
			bairro=?, 
			estado=?, 
			numero=?,
			complemento=?,
			nivel=?,
			foto=?,
			data_cadastro=?,
			categoria=?,
			empresa=?,
			status=?,
			site=?, 
			historico=? 
			";
			$sql = $this->pdo->prepare($sql);
			$sql -> execute(array(
			$this->email, 
			$this->nome, 
			$this->sobrenome, 
			$this->senha, 
			$this->cep,
			$this->cpf,
			$this->cnpj,
			$this->endereco, 
			$this->tel, 
			$this->cidade,
			$this->bairro,
			$this->estado,
			$this->numero,
			$this->complemento,
			$this->nivel,
			$this->foto,
			$this->data_cadastro,
			$this->categoria,
			$this->empresa,
			$this->status,
			$this->site,
			$this->historico
			
			)); 
			
			
           //print_r($sql->errorInfo());


	
			
			}else { 
			
			echo"<script>alert('CADASTRO NÃO EFETUADO::Email já cadastrado em nosso sistema')</script>";
			
			echo '<meta http-equiv=refresh content=0;URL="../painel">';
			
			      }
				  
				  $lastId = $this -> pdo-> lastInsertId();


                  return $lastId;		
				  
		}
		
		
		unset($this ->pdo);
      }

	  public function consulta_filtro($table, $data){
		if(!empty($table) && ( is_array($data) && count($data)> 0)){
		$sql ="SELECT * FROM ".$table." WHERE ";
		$dados = array();
		
		foreach ( $data as $chave => $valor){
			 $dados[] = $chave." = '".addslashes($valor)."'";
		}
		$sql = $sql.implode(", ", $dados);
		//echo $sql;
		$this->pdo->query($sql);
		}
	}
	  
	  
	 public function delete_usuario(){
             // execução  $usuario->delete_usuario();
			 $sql = "DELETE FROM usuarios WHERE id = ?";
             $sql= $this->pdo->prepare($sql);
			 $sql->execute(array($this->id));
			 
			 	echo "<script>alert('Usuário excluido com sucesso!')</script>";

	 }	 
	  
	  



  public function getUsuarioTipo1() {
	
		global $pdo;
		
		$array =array();
		
		$sql=$pdo->prepare("SELECT * FROM usuarios WHERE nivel = :nivel");
		
		$sql->bindValue(':nivel', 'sindico');
		$sql->execute();
		$count = $sql->rowCount();
		
		if($sql->rowCount() >0) {
			$array = $sql->fetchAll();
			
		}
		
		//echo $array;
	
		return $array;
		
	}
	
	public function getMeusDados($cli) {
	
		global $pdo;
		
		$array =array();
		$sql=$pdo->prepare("SELECT * FROM usuarios WHERE nivel = :nivel and id=:id");
		
		$sql->bindValue(':nivel', 'sindico');
		$sql->bindValue(':id', $cli);
		$sql->execute();
		$count = $sql->rowCount();
		if($sql->rowCount() >0) {
			$array = $sql->fetchAll();
			
		}
		
		//echo $array;
	
		return $array;
		
	}
	
  public function getSindicosOK() {
	
		global $pdo;
		
		$array =array();
		//$sql=$pdo->prepare("SELECT *, count(id_cond) as total, usuarios.cidade as cid FROM condominio INNER JOIN usuarios ON  condominio.id_sindico = usuarios.id WHERE usuarios.nivel=:nivel");
		$sql=$pdo->prepare("SELECT * FROM usuarios WHERE nivel=:nivel");
		$sql->bindValue(':nivel', 'sindico');
		$sql->execute();
		$count = $sql->rowCount();
		if($sql->rowCount() >0) {
			$array = $sql->fetchAll();
			
		}
		
		//echo $array;
	
		return $array;
		
	}
	

	
	  public function getFornecedorOK() {
	
		global $pdo;
		
		$array =array();
		//$sql=$pdo->prepare("SELECT *, count(id_cond) as total, usuarios.cidade as cid FROM condominio INNER JOIN usuarios ON  condominio.id_sindico = usuarios.id WHERE usuarios.nivel=:nivel");
		$sql=$pdo->prepare("SELECT * FROM usuarios WHERE nivel=:nivel");
		$sql->bindValue(':nivel', 'fornecedor');
		$sql->execute();
		$count = $sql->rowCount();
		if($sql->rowCount() >0) {
			$array = $sql->fetchAll();
			
		}
		
		//echo $array;
	
		return $array;
		
	}
	
	
	

}


function Upload_jpg($image,$fname,$idlog){
	
 $dir = "../users/$idlog";
 

 
 if (!file_exists($dir)) {
$pasta = @mkdir("$dir", 0777);
$pasta = @chmod("$dir", 0777);
}
	
	$arquivo =	$image;
		
if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){
			$nomedoarquivo = $fname;
			move_uploaded_file($arquivo['tmp_name'], $dir."/".$nomedoarquivo);
		}
		
		
		
//$nomedoarquivo = $usuario->getFoto(); 
$largura = 147;
$altura = 147;

list ($largura_orig,$altura_orig) = getimagesize($dir."/".$nomedoarquivo);

$ratio = $largura_orig / $altura_orig;

if($largura_orig / $altura_orig > $ratio){
	$largura = $altura * $ratio;
}else{
	$altura = $largura /$ratio;
	
}

$imagem_final = imagecreatetruecolor($largura,$altura);
$imagem_orig = imagecreatefromjpeg($dir."/".$nomedoarquivo);
/* o numero zero e posicao x e y da imagem original e da final
depois passar o novo tamnaho e o tam original
*/
imagecopyresampled($imagem_final, $imagem_orig, 0,  0,  0, 0, $largura, $altura, $largura_orig, $altura_orig);




imagejpeg($imagem_final,$dir."/".$nomedoarquivo,80);


}


function Upload_png($image,$fname,$idlog){
	
	
	 $dir = "../users/$idlog";
 

 
 if (!file_exists($dir)) {
$pasta = @mkdir("$dir", 0777);
$pasta = @chmod("$dir", 0777);
}
	
	
	$arquivo =	$image;
		
if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){
			$nomedoarquivo  = $fname;
			move_uploaded_file($arquivo['tmp_name'], $dir."/".$nomedoarquivo);
		
		}
		 
$largura = 147;
$altura = 147;

list ($largura_orig,$altura_orig) = getimagesize($dir."/".$nomedoarquivo);

$ratio = $largura_orig / $altura_orig;

if($largura_orig / $altura_orig > $ratio){
	$largura = $altura * $ratio;
}else{
	$altura = $largura /$ratio;
	
}

$imagem_final = imagecreatetruecolor($largura,$altura);
$imagem_orig = imagecreatefrompng($dir."/".$nomedoarquivo);
/* o numero zero e posicao x e y da imagem original e da final
depois passar o novo tamnaho e o tam original
*/
imagecopyresampled($imagem_final, $imagem_orig, 0,  0,  0, 0, $largura, $altura, $largura_orig, $altura_orig);

//header("Content-Type: image/jpeg");


imagepng($imagem_final,$dir."/".$nomedoarquivo);



}



//limita texto
function limitarTexto($texto, $limite){
  $contador = strlen($texto);
  if ( $contador >= $limite ) {      
      $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '';
      return $texto;
  }
  else{
    return $texto;
  }
  
  

}



function tratarData($x){
	$data_certa=explode("/",$x);
	$data_c=$data_certa[2]."-".$data_certa[1]."-".$data_certa[0];
	return($data_c);
	}		

	function tratarDatabd($x){
	$data_certa=explode("-",$x);
	$data_c=$data_certa[2]."-".$data_certa[1]."-".$data_certa[0];
	return($data_c);
	}


	
?>



			



			