<?php
    // $db_url = getenv("DATABASE_URL") ?: "postgres://user:pass@host:port/dbname";
    // echo "$db_url\n";

    // $db = pg_connect($db_url);
    // if($db) {echo "connected";} else {echo "not connected";}

    // $selectSql = "SELECT ingredient FROM ingredients";
    // $result =  pg_query($db, $selectSql);

    // while ($row = pg_fetch_row($result)) {
    //     var_dump($row);
    // }
                // $db = parse_url(getenv("DATABASE_URL"));

                // $pdo = new PDO("pgsql:" . sprintf(
                //     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                //     $db["host"],
                //     $db["port"],
                //     $db["user"],
                //     $db["pass"],
                //     ltrim($db["path"], "/")
                // ));
                // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // $stmt = $pdo->query('SELECT * FROM ingredients');

    // while($row = $stmt->fetch()){
    //    echo $row->ingredient . '<br/>';
    // }    

    // $title = 'POST ONE';
    // $body = 'THIS IS A POST';
    // $author = 'SCROOGE MCDUCK';   

    // $sql = 'INSERT INTO posts(title, body, author) VALUES (:title, :body, :author)';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
    // echo 'Post added!';

    If(isset($_POST['submit'])){
        try {
        $db = parse_url(getenv("DATABASE_URL"));

        $conn = new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            $db["host"],
            $db["port"],
            $db["user"],
            $db["pass"],
            ltrim($db["path"], "/")
        ));
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
       // prepare sql and bind parameters
       $stmt = $conn->prepare("INSERT INTO demo (title, body, author)
        VALUES (:title, :body, :author)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':author', $author);
    
        $title = $_POST['title'];
        $body = $_POST['body'];
        $author = $_POST['author'];
        $stmt->execute();
        echo "New records created successfully";
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
    }    


?>