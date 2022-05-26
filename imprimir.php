
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <ul>
    <?php
    //Codi PHP
  
    $dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
    sort($dias);
			echo "ORDEN ALFABÉTICO<br>";
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4';
        public $color = 'negre';
        //Metodes
        public function imprimeix($tinta,$paper,$tamany){
            if ($tinta && $paper){
                echo 'Es pot imprimir en ' . $tamany;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
    }

?>
</ul>
    <!-- Codi PHP-->
</body>
</html>
