<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="design and drafting service.">
        <meta name="keywords" content="architecture drawing, 3D drawing, bim">
        <meta name="author" content="fv">
        <title>STUDIO NAÏVE DESIGN</title>
        <link 
        href ="style/style-about.css"
        type="text/css"
        rel="stylesheet"
        href="fonts/ANTTEM-REGULAR.ttf"
        href="fonts/ANTTEM-TIGHT.ttf"/>
    </head>

    <body>
        <div class="main-visual">

            <form class="search-box" method="GET" action="search.php">
                <input type="text" class="search-text-box" name="search" placeholder="search" required>
            </form>

            <a href="index.html" class="main-page">
                <div>S</div> <div>N</div> <div>D</div> <div>/</div>
            </a>

            <?php
            include('db.php');  

            if (isset($_GET['search'])) {
                $query = $_GET['search'];

                $query = $conn->real_escape_string($query);

                $sql = "SELECT * FROM about WHERE title LIKE '%$query%' ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        echo "<div class='result-title'>" . $row["title"] . "</div>";
                        echo "<div class='result-info'>" . $row["subtitle"] . "</div>";
                        echo "<div class='result-description'>" . $row["description"] . "</div>";
                    }

                } else {
                    echo "<div class='no-result'>" . "The search returns no result." . "</div>";
                }
            }

            $conn->close(); 
            ?>
            
            <div class="line"></div>
            <div class ="end-text"> STUDIO NAÏVE DESIGN 2024 </div>
            
        </div>

    </body>

</html>