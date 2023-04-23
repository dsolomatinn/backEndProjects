<?php
$search = "";
$apiKey = "AIzaSyCzaWaqV0KlY1YcdwTzN2eh3VdfMzNEJhE";
$cx = "3165124a51a8c4866";
if(isset($_GET["search"])){
    $search = $_GET["search"];
}
if(!empty($search)){
    $url = "https://www.googleapis.com/customsearch/v1?key=$apiKey&cx=$cx&q=" . urlencode($search);
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    if(!empty($data) && isset($data["items"])){
        $items = $data["items"];
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <h2>My Browser</h2>
    <form method="GET" action="/search.php">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" value=""><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(!empty($items)){
        echo "<div style='font-size:25px; font-weight: bold;margin-top: 10px'>Search result</div>";
        foreach ($items as $item) {
            ?>
            <div class="item">
                <hr>
                <p class="link"><?php echo $item["displayLink"] ?></p>
                <p class="title">
                    <a target="_blank" href="<?php echo $item["link"] ?>">
                        <?php echo $item["title"] ?>
                    </a>
                </p>
                <p class="desc"><?php echo $item["snippet"] ?></p>
            </div>
            <?php
        }
    }
    ?>


    </body>
    </html>
<?php
