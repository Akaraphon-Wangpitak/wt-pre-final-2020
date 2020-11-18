<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Music</title>
</head>
<style>
    * {
        font-family: 'Prompt', sans-serif;;
}

img {
    width: 100%;
    border-radius: 3px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.size20 {
    font-size: 20px;
}

.size15 {
    font-size: 15px;
}
</style>
<body>
    <?php
        $data = json_decode(file_get_contents("https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json"));
    ?>
    <div class="container">
        <div class="row m-5">
            <?php
                foreach($data->tracks->items as $song){
                    echo "<div class='col-4 p-2'>
                            <div class='card'>
                                <img src='";
                                echo $song->album->images[0]->url;
                                echo "'>
                                <p class='p-3 size20'><b>";
                                    echo $song->album->name."</b><br><span class='size15'>Artist : ";
                                    echo $song->album->artists[0]->name."</span>"."<br><span class='size15'>Release Date : ";
                                    echo $song->album->release_date."</span>"."<br><span class='size15'>Available : ";
                                    $count = 0;
                                    foreach($song->available_markets as $temp){
                                        $count++;
                                    }
                                    echo $count;
                                    echo "</span>";
                                echo "</p>";
                    echo "  </div>
                         </div>";
            
                }
            ?>
        </div>
    </div>
</body>
</html>