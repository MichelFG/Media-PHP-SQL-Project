<?php


    /*function inputGen ($type="type", $class="class", $name="nom", $plholder="placeholder", $options='') {
         if(isset($_GET[$name])){
        $setValue = "value='".htmlspecialchars($_GET[$name])."'";
    }else {$setValue='';}
    echo "<div><input type=$type class=$class name=$name placeholder='$plholder' $setValue $options></div>";
    }*/


class Input_generator {
 
    function __construct($type="type",$class="class",$name="nom",$plholder="placeholder") {
    echo "<input type=$this->type class=$this->class name=$this->name placeholder=$this->plholder>";
    }
}