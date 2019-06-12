<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, user-scalable=no">

	<title></title>
</head>
<body>
	<form action="admin.php" method="POST">
  <div class="form-example">

    <label for="month">Enter month: </label>
    <input type="text" name="month" id="month">

    <label for="year">Enter year: </label>
    <input type="number" name="year" id="year">

    <label for="lienNews">Enter link newsletter: </label>
    <input type="text" name="lienNews" id="lien_news">

    <label for="imageNews">Enter link image: </label>
    <input type="text" name="imageNews" id="image_news">

    <label for="item1">Enter item 1: </label>
    <input type="text" name="item1" id="item1">

    <label for="item2">Enter item 2: </label>
    <input type="text" name="item2" id="item2">

    <label for="item3">Enter item 3: </label>
    <input type="text" name="item3" id="item3">

    <label for="item4">Enter item 4: </label>
    <input type="text" name="item4" id="item4">

  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>
</form>


  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

  $month = isset($_POST['month']) ? $_POST['month'] : NULL;
  $year = isset($_POST['year']) ? $_POST['year'] : NULL;
  $lienNews = isset($_POST['lienNews']) ? $_POST['lienNews'] : NULL;
  $imageNews = isset($_POST['imageNews']) ? $_POST['imageNews'] : NULL;
  $item1 = isset($_POST['item1']) ? $_POST['item1'] : NULL;
  $item2 = isset($_POST['item2']) ? $_POST['item2'] : NULL;
  $item3 = isset($_POST['item3']) ? $_POST['item3'] : NULL;
  $item4 = isset($_POST['item4']) ? $_POST['item4'] : NULL;

  $bdd->exec("INSERT INTO Imattec(month, year, lienNews, imageNews, item1, item2, item3, item4) VALUES('$month', $year, '$lienNews', '$imageNews', '$item1', '$item2', '$item3', '$item4')");

  echo "Infos bien envoyées !";


?>

  <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="scripts-news.js"></script>

</body>
</html>