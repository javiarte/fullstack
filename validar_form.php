<?php
// define variables and set to empty values
$name = $email = $website = $comment = $gender = null;

    /*function valEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
    }*/

    if (isset($_POST['enviar'])) {
        if (empty($_POST["name"]) or empty($_POST["email"]) or empty($_POST["gen"])) {
            $nameErr = "Campo requerido";
            echo "<script>
alert('There are no fields to generate a report');
window.location.href='formvalidacion.php';
</script>";
        } else {
            $name = $_POST["name"];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $comment = $_POST['com'];
            $gender = $_POST['gen'];

        }
        //header("Location: formvalidacion.php");

    }
    include('formvalidacion.php');
?>