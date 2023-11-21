<?php
class User {

    public $matricula = "";
    public $senha = "";
    public $email = "";
    public $nome = "";

    public function __construct() {
        
    }
    public function createUser($matricula, $senha, $email, $nome) {
        $this->matricula = $matricula;
        $this->senha = $senha;
        $this->email = $email;
        $this->nome = $nome;
    }

}

class Login {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "usuarios";
    private $conn;
    public $user;

    //propriedades
    private $registros = array(
        array('matricula'=>'12345', 'email'=>'a@a', 'senha' => '1234'),
        array('matricula'=>'12345e', 'email'=>'a@a', 'senha' => '1234'),
        array('matricula'=>'12345r', 'email'=>'a@a', 'senha' => '1234'),
        array('matricula'=>'12345f', 'email'=>'a@a', 'senha' => '1234'),
    );
    
    public $matriculaPassou = "";
    public $senhaPassou = "";
    public $emailPassou = "";
    //métodos
    public function getRegistros() {
        return $this->registros;
    }

    public function getMatriculaPassou() {
        return $this->matriculaPassou;
    }

    public function getSenhaPassou() {
        return $this->senhaPassou;
    }

    public function getEmailPassou() {
        return $this->emailPassou;
    }
    public function getUser() {
        return $this->user;
    }

    public function setRegistros($registros): void {
        $this->registros = $registros;
    }

    public function setMatriculaPassou($matriculaPassou): void {
        $this->matriculaPassou = $matriculaPassou;
    }

    public function setSenhaPassou($senhaPassou): void {
        $this->senhaPassou = $senhaPassou;
    }

    public function setEmailPassou($emailPassou): void {
        $this->emailPassou = $emailPassou;
    }

        
    public function __construct() {
        
    }

     public   function novoUsuario($matricula, $email, $senha) {
        $novoRegistro = array('matricula'=> $matricula, 'email'=> $email, 'senha'=>$senha);
        array_push($this->registros, $novoRegistro);
        return true;
    }

    public function loginBanco($name, $senha){
        $passou = false;
        // Create connection
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM usuarios 
        WHERE nome='".$name."' or email='".$name."'";

        $result = mysqli_query($this->conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if($row["senha"]==$senha){
                    $passou = true;
                    $this->user = new User();
                    $this->user->createUser($row["matricula"], $row["senha"], $row["email"], $row["nome"]);
                }
            }
        }
        mysqli_close($this->conn);

        return $passou;
    }

    public function login($matricula, $senha) {
        $passou = 'false';

        
       foreach ($this->registros as $registro) {
            if ($matricula == $registro['matricula'] && $senha == $registro['senha']) {
                $passou = 'true';
                
                $this->matriculaPassou = $matricula;
                $this->senhaPassou = $senha;
                $this->emailPassou = $registro['email'];
                break;
            }
        }
        return $passou;
    }
        

    function logout($user) {
        $user->matricula = "";
        $user->senha = "";
        $user->email = "";
    }

}



?>