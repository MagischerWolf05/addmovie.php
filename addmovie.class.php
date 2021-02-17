<?php
    class Addmovie{
            public $movie_title;
            public $movie_time;
            public $movie_poster;

            function __construct($movie_title,$movie_time,$movie_poster)
            {
                $this->movie_title = $movie_title;
                $this->movie_time = $movie_time;
                $this->movie_poster=$movie_poster;
            }
        public function movieinsert()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cinema";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO movie (id_Movie,Movie_titel,time,Movie_poster)
            VALUES (NULL, '$this->movie_title', '$this->movie_time', '$this->movie_poster')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }

    }