<?php   
$nu = $_POST["nombreDpto"];

    $connect = mysqli_connect("localhost", "root", "conamype", "conamype_reg");
    $query = "SELECT * FROM atc_departamento where nombre like '$nu'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        $output = '<div>';
        $departamento_id = $row['departamento_id'];
        $nombre = $row['nombre'];
        $output .= "Id: ".$departamento_id."<br/>";
        $output .= "Departamento: ".$nombre."<br/>";
    }
    $output .= '</div>';
echo "Departamento seleccionado es: "."<br/>"."<br/>".$output."<br/>";
?>