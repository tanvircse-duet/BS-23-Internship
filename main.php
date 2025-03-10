<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       class fruits {
        public $name;
        public $color;

        function __construct($Name="",$Color=""){
            $this->name=$Name;
            $this->color=$Color;

        }
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
        function getName(){
            return $this->name;
        }
        function setColor($color){
            $this->color=$color;
        }
        function getColor(){
            return $this->color;
        }
       }
       class Strawberry extends fruits{
            function message(){
                echo"Hi this is message";
                $this->intro();
            }
            

       }
       $str=new Strawberry("STRAWBERRY","RED");
       echo $str->name."<br>".$str->color;
       echo $str->message();


    ?>
</body>
</html>