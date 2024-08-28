

<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=profilepage','root', 'Pl0ns!976');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch (PDOException $e) {
    echo "ceonnection failed: " . $e->getMessage();
}

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();

$users = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$users = $stmt->fetchAll();
//die(var_dump($users));
foreach ($users as $user) {
    echo $user['username'] . "<br>";
}

// Inlezen van het JSON-bestand
$jsonData = file_get_contents('profiles.json');

// Omzetten van JSON naar een PHP-array
$data = json_decode($jsonData, true);

// Gebruik maken van de gegevens
echo "Naam: " . $data['name'] . "<br>";
echo "Leeftijd: " . $data['age'] . "<br>";
echo "Email: " . $data['email'] . "<br>";
echo "Modules: <br>";
foreach ($data['modules'] as $module) {
    echo "&nbsp; " . $module . "<br>";
}

















//$author = 'Stephan Hoeksema';
//$email = 's.hoeksema@windesheim.nl';
//$users = [
//    'Stephan',
//    'Stefanie'
//];
//
//
//$routes = [
//    '/' => 'views/index.view.php',
//    '/users' => 'views/user.view.php',
//];
//
//
//
//$uri = $_SERVER['REQUEST_URI'];
//if(array_key_exists($uri, $routes)){
//    require $routes[$uri];
//};
//

//require __DIR__ . '\conrtrollers\UserController.php';
//
//$request = $_SERVER['REQUEST_URI'];
//$method = $_SERVER['REQUEST_METHOD'];
//
//$author = 'Stephan Hoeksema';
//$email = 's.hoeksema@windesheim.nl';
//
//
//new \conrtrollers\UserController();

//if($method === 'GET') {
//    // afhandelen get request
//    if ($request == '/') {
//        require __DIR__ . '/views/index.view.php';
//    }
//} elseif ($method === 'POST') {
//    // afhandelen post request
//    die(var_dump('post'));
//} else {
//    // request method niet ondersteund - 404
//    die(var_dump('404'));
//}


