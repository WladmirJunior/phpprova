<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    //including the database connection file
    include_once("config.php");

    if(isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $price = mysqli_real_escape_string($mysqli, $_POST['price']);
        $desc = mysqli_real_escape_string($mysqli, $_POST['desc']);

        // checking empty fields
        if(empty($name) || empty($price) || empty($desc)) {

            if(empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }

            if(empty($price)) {
                echo "<font color='red'>Age field is empty.</font><br/>";
            }

            if(empty($desc)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }

            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            // if all the fields are filled (not empty)

            //insert data to database
            $result = mysqli_query($mysqli, "INSERT INTO Peca(nome,descricao,preco) VALUES('$name','$desc','$price')");

            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
        }
    }
    ?>
    </body>
</html>

insert into Peca(Nome, Descricao, Imagem, Preco, Quantidade) values('peca1', 'desc1', 10, 5)