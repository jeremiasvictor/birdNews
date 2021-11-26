<?php

class Noticias{

    /* atributos */
    private $db;
    private $not_id;
    private $not_imagem;
    private $not_subtitulo;
    private $not_data;
    private $not_contador;
    private $not_hora;
    private $not_autor;
    private $not_assunto;
    private $not_titulo;
    
    /* método construtor */

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    /* métodos GET e SET */

    //$db
    public function getDb(){
        return $this->db;
    }

    public function setDb($db){
        $this->db = $db;       
    }

    //$not_id
    public function getNot_id(){
        return $this->not_id;
    }

    public function setNot_id($not_id){
        $this->not_id = $not_id;
    }

    //$not_imagem
    public function getNot_imagem(){
        return $this->not_imagem;
    }

    public function setNot_imagem($not_imagem){
        $this->not_imagem = $not_imagem;
    }
    
    //$not_subtitulo
    public function getNot_subtitulo(){
        return $this->not_subtitulo;
    }

    public function setNot_subtitulo($not_subtitulo){
        $this->not_subtitulo = $not_subtitulo;
    }

    //$not_data
    public function getNot_data(){
        return $this->not_data;
    }

    public function setNot_data($not_data){
        $this->not_data = $not_data;
    }

    //$not_contador
    public function getNot_contador(){
        return $this->not_contador;
    }

    public function setNot_contador($not_contador){
        $this->not_contador = $not_contador;
    }

    //$not_hora
    public function getNot_hora(){
        return $this->not_hora;
    }

    public function setNot_hora($not_hora){
        $this->not_hora = $not_hora;
    }
    
    //$not_autor
    public function getNot_autor(){
        return $this->not_autor;
    }

    public function setNot_autor($not_autor){
        $this->not_autor = $not_autor;
    }

    //$not_assunto
    public function getNot_assunto(){
        return $this->not_assunto;
    }

    public function setNot_assunto($not_assunto){
        $this->not_assunto = $not_assunto;
    }

    //$not_titulo
    public function getNot_titulo(){
        return $this->not_titulo;
    }


    public function setNot_titulo($not_titulo){
        $this->not_titulo = $not_titulo;
    }




    /* métodos */
    public function cadastrar(){
        $sql = "insert into noticias(not_imagem, not_subtitulo, not_data, not_contador, not_hora, not_autor, not_assunto, not_titulo) values(:not_imagem, :not_subtitulo, :not_data, :not_contador, :not_hora, :not_autor, :not_assunto, :not_titulo)";

        $stmt = $this->db->prepare($sql);

        //imagem
        $stmt->bindValue(':not_imagem',$this->getNot_imagem());

        //subtitulo
        $stmt->bindValue(':not_subtitulo',$this->getNot_subtitulo());

        //data
        $stmt->bindValue(':not_data',$this->getNot_data());

        //contador
        $stmt->bindValue(':not_contador',$this->getNot_contador());

        //hora
        $stmt->bindValue(':not_hora',$this->getNot_hora());

        //autor
        $stmt->bindValue(':not_autor',$this->getNot_autor());

        //assunto
        $stmt->bindValue(':not_assunto',$this->getNot_assunto());

        //titulo
        $stmt->bindValue(':not_titulo',$this->getNot_titulo());

        if($stmt->execute()){
            return true;
        }

    }

public function listar(){
    $query = "Select * from noticias";

    $stmt = $this->db->query($query);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);

}

public function alterar(){
    $query = "Update noticias set not_imagem=:not_imagem, not_subtitulo=:not_subtitulo,not_data=:not_data, not_contador=:not_contador, not_hora=:not_hora,
    not_autor=:not_autor, not_assunto=:not_assunto, not_titulo=:not_titulo 
    Where not_id=:not_id";

    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':not_imagem', $this->getNot_imagem());
    $stmt->bindValue(':not_subtitulo', $this->getNot_subtitulo());
    $stmt->bindValue(':not_data', $this->getNot_data());
    $stmt->bindValue(':not_contador', $this->getNot_contador());
    $stmt->bindValue(':not_hora', $this->getNot_hora());
    $stmt->bindValue(':not_autor', $this->getNot_autor());
    $stmt->bindValue(':not_assunto', $this->getNot_assunto());
    $stmt->bindValue(':not_titulo', $this->getNot_titulo());

    if($stmt->execute()){
        return true;
    } 

}

public function deletar($not_id){
    $query = "Delete from noticias where not_id=:not_id";

    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':not_id', $not_id);

    if($stmt->execute()){
        return true;
    }
}

    }


?>