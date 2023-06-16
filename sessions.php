    <?php
    session_start();
    $_SESSION['product_codes'] = array();
    include_once('database.php');

    // $naam = "Gurpreet";
    // $email = "2166142@talnet.nl";

    // $_SESSION['naam'] = $naam;
    // $_SESSION['email'] = $email;

    // echo "Naam: " . $naam . "<br>";
    // echo "Email: " . $email . "<br>";


    $query = "SELECT * FROM producten";
    $stmt = $conn->query($query);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    </head>
    <body>
    <form action="" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Omschrijving</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($row !== false) {
                    echo "<tr>";
                    echo "<td>".$row['product_code']."</td>";
                    echo "<td>".$row['product_naam']."</td>";
                    echo "<td>".$row['prijs_per_stuk']."</td>";
                    echo "<td>".$row['omschrijving']."</td>";
                    echo "</tr>";

                    $_SESSION['product_codes'][] = $row['product_code'];
                }
            }
            ?>
            </tbody>
        </table>
        <input style="width: 150px;" type="submit" value="id" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        header('Location: lorem.php');
    }
    ?>
    </body>
    </html>
