<html>
    <head>
        <meta charset="UTF-8">
        <title>Planets</title>
        <style>body {font-size: 30px; background-color: #000000; color: #00FF00;font-variant: small-caps;}</style>
    </head>
    <body>
        <?php
        class Planet {
            public $radius;
            public function __construct($radius) {
                $this -> radius = $radius;
                        }
            public function comparePlanets($planet) {
                if($this -> radius < $planet -> radius) {
                    return $planet;
                } else {
                    return $this;
                }
            }
        }
        $earthPlanet = new Planet(6371);
        $marsPlanet = new Planet(3390);
        $planet = $earthPlanet -> comparePlanets($marsPlanet);
        echo("<p>"."How many kilometres in radius does have the bigger planet called Earth?"." ".$planet -> radius . ' km.'."</p>");
        echo("Thank You for watching!")
        ?>
    </body>
</html>