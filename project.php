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
        href ="style/style-project.css"
        type="text/css"
        rel="stylesheet"
        href="fonts/ANTTEM-REGULAR.ttf"/>
    </head>

    <body>
        <div class="main-visual">

            <form class="search-box" method="GET" action="project.php">
                <input type="text" class="search-text-box" name="search" placeholder="search" required>
            </form>

            <div class='page-title'> WORK </div>

            <a href="index.html" class="main-page">
                <div>S</div> <div>N</div> <div>D</div> <div>/</div>
            </a>

            <?php
            
            include('db.php');  

            if (isset($_GET['search'])) {
                $query = $_GET['search'];

                $query = $conn->real_escape_string($query);

                $sql = "SELECT * FROM projects WHERE title LIKE '%$query%' ORDER BY year DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    echo "<table class='table-style'>";
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='result-title'><a href='search.php?search=" . $row["title"] . "' class='result-title'>" . $row["title"] . "</a></td>";
                        echo "<td class='result-info' >" . $row["type"] . " : " . $row["year"] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                } else {
                    echo "<div class='no-result'>" . "The search returns no result." . "</div>";
                }
            }

            $conn->close(); 
            ?>
           
        </div>

    </body>

</html>