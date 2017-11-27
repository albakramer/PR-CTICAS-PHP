<html>

<head>
    <title>Calcular letra DNI</title>
    <meta charset="UTF-8">
    <style>
    input {
        margin-top: 10px;
    }
    
    .button {
        width: 100px;
        height: 60px;
    }
    
    .error {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h1>Cálculo de la letra DNI</h1>

    <?php
    $dni = "";
    $error = "";
    $letra = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $dni = $_POST["dni"];
        if ($dni == "") {
            $error = "Oye, DNI está vacio";
        } else if ( is_numeric ($dni) == false) {
        
                $error = "OYE, ESO NO ES UN NÚMERO";
        }

        else { 

            $arrayLetras[0] = "T";
            $arrayLetras[1] = "R";
            $arrayLetras[2] = "W";
            $arrayLetras[3] = "A";
            $arrayLetras[4] = "G";
            $arrayLetras[5] = "M";
            $arrayLetras[6] = "Y";
            $arrayLetras[7] = "F";
            $arrayLetras[8] = "P";
            $arrayLetras[9] = "D";
            $arrayLetras[10] = "X";
            $arrayLetras[11] = "B";
            $arrayLetras[12] = "N";
            $arrayLetras[13] = "J";
            $arrayLetras[14] = "Z";
            $arrayLetras[15] = "S";
            $arrayLetras[16] = "Q";
            $arrayLetras[17] = "V";
            $arrayLetras[18] = "H";
            $arrayLetras[19] = "L";
            $arrayLetras[20] = "C";
            $arrayLetras[21] = "K";
            $arrayLetras[22] = "E";

        $resto = $dni % 23;
        $letra = $arrayLetras [$resto];
    
       }
     }

    ?>
    <form action="#" method="POST">
       <p class="error">
          <?= $error; ?>
      </p>
      <div>
          <label for="">DNI:</label>
          <input type="number" name="dni" value="<?= $dni ?>">
      </div>
      <div>
            <label for="">NIF:</label>  
        <input type="text" value="<?php echo $dni.$letra; ?>" readonly>
        </div>
        <div>
            <input class="button" type="submit">
        </div>
    </form>
</body>

</html>
