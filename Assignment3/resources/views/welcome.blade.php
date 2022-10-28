<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
</head>
<body>
    <?php 
        use Illuminate\Support\Facades\DB;
        $videos = DB::select("select * FROM videos");
        echo '<pre>';
        print_r($videos);
        echo '</pre>';
    ?>
</body>
</html>