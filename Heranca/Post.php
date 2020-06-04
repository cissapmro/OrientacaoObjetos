<?php
/*
 * public - Pode ser acessada de fora
private - Só pode ser acessada dentro da classe mãe
protected - Pode ser usada em classe extendida
 */
class Post{
    protected $id;
    private $likes = 0;

    protected function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    protected function setLike($n){
        $this->likes = $n;
    }
    public function getLike(){
        return $this->likes;
    }
}
class Fotos extends Post {
    private $url;
    public function __construct($id){
        $this->setId($id);
        $this->setLike(77);
    }
    protected function setUrl($url){
        $this->url = $url;
    }
    public function getUrl(){
        return $this->url;
    }
}
$foto = new Fotos(2);
//$foto->setLike();
//$foto->setUrl('abc');

echo $foto->getId().'<br />';
echo $foto->getLike().'<br />';
echo $foto->getUrl().'<br />';