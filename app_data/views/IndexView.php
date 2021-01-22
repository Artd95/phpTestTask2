<?php 
    class IndexView{

        public $data;
        
        public function __construct($data) {
            $this->data = $data;
        }

        public function view(){
            $table = '';
            for($count=0; $count<count($this->data); $count++){
                if (($count+1)%4==1){$table .= "<div class='row'>";}
                $table .= "<div class='product'><input class='checkbox' type='checkbox' name='delete' value='".$this->data[$count]["sku"]."'><div class='describe'><p class='sku'>".$this->data[$count]["sku"]."</p><p class='product_name'>".$this->data[$count]["product_name"]."</p><p class='price'>".$this->data[$count]["price"]."$</p>";
                if ($this->data[$count]["size"] != null){
                    $table .= "<p class='size'>Size: ".$this->data[$count]["size"]."MB</p>";
                }
                else if ($this->data[$count]["weight"] != null){
                    $table .= "<p class='weight'>Weight: ".$this->data[$count]["weight"]."KG</p>";
                }
                else {
                    $table .= "<p class='dimension'>Dimension: ".$this->data[$count]["height"]."x".$this->data[$count]["width"]."x".$this->data[$count]["lenght"]."</p>";
                }
                $table .= "</div></div>";
                if (($count+1)%4==0 || ($count+1)==count($this->data)){
                    $table .= "</div>";
                }
            }
            echo $table;
        }   
    }                                    
?>