<?php

class Cliente {

  private $id;
  private $nome;
  private $cpf;
  private $sexo;
  private $telefone;
  private $email;
  private $senha;

  public function __construct($id, $nome, $cpf, $sexo, $telefone, $email, $senha)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->sexo = $sexo;
    $this->telefone = $telefone;
    $this->email = $email;
    $this->senha = $senha;
  }

  
  public function getId() {
    return $this->id;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getCpf() {
    return $this->cpf;
  }

  public function getSexo() {
    return $this->sexo;
  }

  public function getTelefone() {
    return $this->telefone;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function equals($cliente) {
    if ($this->cpf == $usuario->cpf)) {
      return true;
    } else {
      return false;
    }
  } 
}

?>