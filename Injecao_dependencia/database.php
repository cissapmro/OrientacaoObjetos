<?php
interface DataBaseInterface {
    public function incluir();
    public function alterar();
    public function excluir();
}

class DataBase {
    private $engine;
    public function __construct(DataBaseInterface $engine){
        $this->engine = $engine;
    }
        public function incluir(){
           return $this->engine->incluir();
        }
        public function alterar(){
            return $this->engine->alterar();
        }
        public function excluir(){
           return $this->engine->excluir();
        }
}
class MySql implements DataBaseInterface {

    public function incluir() {
        //incluir
    }
    public function alterar()
    {
        // alterar
    }
    public function excluir()
    {
        // excluir
    }
}
class Post implements DataBaseInterface {

    public function incluir() {
        return "Incluir".'<br />';
    }
    public function alterar()
    {
        return "Alterar".'<br />';
    }
    public function excluir()
    {
        return "Excluir".'<br />';
    }
}
$db = new DataBase(new Post);
echo $db->incluir();
echo $db->alterar();
echo $db->excluir();