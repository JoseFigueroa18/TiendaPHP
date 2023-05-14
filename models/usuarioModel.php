<?php

class usuarioModel {
    //Entidad
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    //Conexión de la base de datos
    public function __construct(){
        $this->db =Conect::connect();
    }

    //ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    //Nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }

    //Apellidos
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): self
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);

        return $this;
    }

    //Email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

    //Contraseña
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): self
    {
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT,['cost'=>4]);

        return $this;
    }

    //Rol
    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    //Imagen
    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}','{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function login(){
        $result = false;
        $email = $this->getEmail();
        $password = $this->getPassword();
        //Comprobar si existe el usuario
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);

        if ($login && $login->num_rows==1) {
            $usuario = $login->fetch_object();

            $verify = password_verify($password, $usuario->password);

            if ($verify) {
                $result = $usuario;
            }
        }
        return $result;
    }



}




?>