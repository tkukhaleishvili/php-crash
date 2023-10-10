<?php
// Magic constants
//echo __FILE__ . '<br>';
//echo __DIR__ . '<br>';

// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
//$files = scandir('./');
//echo '<pre>';
//var_dump($files);
//echo '</pre>';

// file_get_contents, file_put_contents
//$lorem = file_get_contents('lorem.txt');
//echo $lorem;
//echo '<br>';
//ile_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);

// file_get_contents from URL
//$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
//file_put_contents('user.json', $jsonContent);
//var_dump($jsonContent);
//$users = json_decode($jsonContent);

//var_dump($users);


// $json = file_get_contents('https://jsonplaceholder.typicode.com/photos');
// file_put_contents('photos.json', $json);
// //var_dump($json);
// $photos = json_decode($json);
// //var_dump($photos);

// //start lorem//
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
$json = file_get_contents('https://jsonplaceholder.typicode.com/photos');
file_put_contents('photos.json', $json);
$photos = json_decode($json, true); // Decode as an associative array


$jsonContent = file_get_contents('https://run.mocky.io/v3/aa08f047-4441-49c8-a9e9-c05fcda86259');
file_put_contents('toko.json', $jsonContent);

$users = json_decode($jsonContent,true);


foreach ($photos as $key => $photo):
	    if (!empty($users) && is_array($users) && count($users) > 0) {
        $user = $users[0];
    }

?>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $photo['thumbnailUrl']; ?>" alt="Card image cap">
      <div class="card-body">
      		<h5 class="card-title"><?php echo $user['name']; ?></h5>
        <p class="card-text"><?php echo $photo['title']; ?></p>
        <a href="<?php echo $photo['url']; ?>" class="btn btn-primary">GO</a>
      </div>
    </div>
<?php endforeach ?>
</body>
</html>



