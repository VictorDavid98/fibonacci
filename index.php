<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .serie-fibonacci {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }

        .f-item {
            width: calc(10% - 30px);
            margin: 15px;
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h1 class="my-5">Test Fibonacci - Víctor Zamora</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="num_fibo" class="form-label">Número Fibonacci</label>
                <input type="number" class="form-control" id="num_fibo" name="num_fibo" placeholder="Ingrese un Número">
                <?php
                if (empty($numFibonacci)) {
                    echo "<p class='error'> *Debe ingresar un número </p>";
                }
                ?>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary"> Imprimir</button>
            </div>

        </form>
    </div>

    <?php
    $fibonacci = array(0, 1);
    $numFibonacci = 1;

    if (isset($_POST['num_fibo'])) {
        $numFibonacci = $_POST['num_fibo'];

        if ($numFibonacci > 1) {
            for ($i = 2; $i < $numFibonacci; $i++) {
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
        }
    }
    ?>


    <h2 class="my-3 text-center"> Sucesión Fibonacci: <?php echo $numFibonacci ?> </h2>

    <div class="serie-fibonacci">
        <?php
        foreach ($fibonacci as $item) {
        ?>
            <div class="f-item"><?php echo $item ?></div>
        <?php
        }
        ?>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>