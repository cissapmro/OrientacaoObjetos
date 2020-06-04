<?php
interface Database{
    public function Adicionar();
    public function Excluir();
    public function Alterar();
}
class Mysql implements Database {
    public function Adicionar(){
        echo "Classe MySql";
    }
    public function Excluir(){

    }
    public function Alterar(){

    }
}
class Oracle implements Database {
    public function Adicionar(){
        echo "Classe MySql";
    }
    public function Excluir(){

    }
    public function Alterar(){

    }
}
$db = new Oracle();
$db->Adicionar();