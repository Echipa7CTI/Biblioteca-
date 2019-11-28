<?php $thisPage="Adauga carte"; ?>
<?php
include "connection.php";
include "header.php";
include "navigation.php"
?>
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Adauga carte</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Adauga carte</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<form class="book" action="" method="post">

    <input type="text" name="isbn" class="form-control" placeholder="ISBN" required=""><br>
    <input type="text" name="titlu" class="form-control" placeholder="Titlu" required=""><br>
    <input type="text" name="autor" class="form-control" placeholder="Autor" required=""><br>
    <input type="text" name="an" class="form-control" placeholder="An de publicare" required=""><br>
    <input type="text" name="cat" class="form-control" placeholder="Categorie" required=""><br>
    <input type="text" name="editura" class="form-control" placeholder="Editura" required=""><br>
    <input type="text" name="pag" class="form-control" placeholder="Pagini" required=""><br>
    <input type="text" name="shortDesc" class="form-control" placeholder="Descriere scurta" required=""><br>
    <input type="text" name="longDesc" class="form-control" placeholder="Descriere lunga" required=""><br>
    <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
</form>

<?php
if(isset($_POST['submit']))
{
    if(isset($_SESSION['login_user']))
    {
        mysqli_query($db,"INSERT INTO `Carte` (`ISBN`, `Titlu`, `Autor`, `An de publicare`, `Categorie`, `Editura`, `Pagini`, `Descriere scurta`, `Descriere lunga`) VALUES ('$_POST[isbn]', '$_POST[titlu]', '$_POST[autor]',
        '$_POST[an]', '$_POST[cat]', '$_POST[editura]', '$_POST[pag]', '$_POST[shortDesc]', '$_POST[longDesc]') ;");
        ?>
        <script type="text/javascript">
            alert("Book Added Successfully.");
        </script>

        <?php

    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("You need to login first.");
        </script>
        <?php
    }
}
?>
