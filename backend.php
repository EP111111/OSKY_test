<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    .news {
      display: none; 
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
        $('.news').each(function (index) {
            // searched this fadein functions online
            $(this).delay(1000 * index).fadeIn(1000); 
        });
        });
    </script>
</head>
<body>
<div>
<?php
$file= file_get_contents('data.json');

$json= json_decode($file,true);
$sorted_json=titleSort($json);
$t=count($sorted_json);
// print_r($sorted_json);  
foreach($sorted_json as $item){
    echo '<div class="news">';
    echo '<h2>' . $item['title'] . '</h3>';
    $filter_link = getLink($item['link']);
    // print_r($filter_link);
    $des = addReadMore($filter_link,$item['description']);
    echo '<p>' . $des. '</p>';
    echo '<p><i>' . formatDate($item['pubDate']) . '</i></p>';
    echo '</div>';

}

function titleSort($arr){
    $titles = array_column($arr, 'title');
    sort($titles);
    $new_arr=array();
    $len=count($titles);
    for($i=0;$i<$len;$i++){
        foreach($arr as $item){
            if ($item['title']==$titles[$i]){
                array_push($new_arr,$item);
            }
        }
    }
    return $new_arr;

}

function formatDate($inputDate){
    
    $dateTime = DateTime::createFromFormat('D, d M Y H:i:s T', $inputDate);

    $formattedDate = $dateTime->format('l, jS \of F Y g:i a');

    return $formattedDate ;
}

function getLink($link){
    $url_collection=array();
    if (is_string($link)) {
        if (filter_var($link, FILTER_VALIDATE_URL) == false) {
            return null;
        }else{
            array_push($url_collection,$link);
            return $url_collection;
        }
    }

    if (is_array($link)){
        foreach($link as $item){
            if (filter_var($item, FILTER_VALIDATE_URL) !== false){
                array_push($url_collection,$item);
            }
        }
    }

    return $url_collection;
}

function addReadMore($links,$des){
    foreach($links as $link){
        $s="<a href=\"" .$link."\">Read More</a>";
        if (strpos($des, $link) !== false){
            $des=$des.$s;
        }
    }

    return $des;
}
?>

</div>



</body>
</html>

