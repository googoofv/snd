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
        href ="style/style-search.css"
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

            <a href="project.php?search=%25" class="work-page">
                <div>W</div> <div>O</div> <div>R</div> <div>K</div> <div>/</div>
            </a>

            <a href="index.html" class="main-page">
                <div>S</div> <div>N</div> <div>D</div> <div>/</div>
            </a>

            <?php
            include('db.php');  

            if (isset($_GET['search'])) {
                $query = $_GET['search'];

                $query = $conn->real_escape_string($query);

                $sql = "SELECT * FROM projects WHERE title LIKE '%$query%' ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        echo "<div class='result-title'>" . $row["title"] . "</div>";
                        echo "<div class='result-info'>" . $row["type"] . ", " . $row["status"] . ", " . $row["year"] . "</div>";
                        echo "<div class='result-description'>" . $row["description"] . "</div>";
                        echo "<img src='" . $row['image_path0'] . "' alt='" . $row['title'] . "' class='key-image'>";
                        echo "<img src='" . $row['image_path1'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-1'>";
                        echo "<img src='" . $row['image_path2'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-2'>";
                        echo "<img src='" . $row['image_path3'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-3'>";
                        echo "<img src='" . $row['image_path4'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-4'>";
                        echo "<img src='" . $row['image_path5'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-5'>";
                        echo "<img src='" . $row['image_path6'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-6'>";
                        echo "<img src='" . $row['image_path7'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-7'>";
                        echo "<img src='" . $row['image_path8'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-8'>";
                        echo "<img src='" . $row['image_path9'] . "' onerror=\"this.style.display='none'\" alt='" . $row['title'] . "' class='image-9'>";
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