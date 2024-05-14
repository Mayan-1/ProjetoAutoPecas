<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];


$sql = "INSERT INTO events (title, color, start, end) VALUES ('$title','#13678A', '$start', '$end')";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Evento Cadastrado com Sucesso.",
                    icon: "success"
                    }).then(okay => {
                        if(okay){
                            window.location.href = "../templates/tela_cadastro_eventos.php";
                        }
                    });
            </script>
                
<?php }else{
    echo "<script>alert('Evento não cadastrado. Tente novamente!');</script>";
}

?>
    </body>
</html>