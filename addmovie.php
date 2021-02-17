
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Add movie</title>
</head>
<body>
    <form action="addmovie.php" method="post">
        <label for="fname">Movie title:</label><br>
        <input type="text" id="movie_title" name="movie_title"><br>
        <label for="lname">Time</label><br>
        <input type="time" id="time" name="time"><br>
        <label for="lname">Movieposter :</label><br>
        <input type="file" id="poster" name="poster">
        <input type="submit" value="Send Request">
    </form>
    <?php
    require_once 'addmovie.class.php' ;
    $movie_title = $_REQUEST['movie_title'];
    $movie_time = $_REQUEST['time'];
    $movie_poster = $_REQUEST['poster'];
    $movie =$movie_poster;
    $movie = new Addmovie($movie_title,$movie_time,$movie_poster);
    $movie->movieinsert();
    ?>
</body>
</html>