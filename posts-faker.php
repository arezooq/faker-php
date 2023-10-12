<?php 
require 'vendor/autoload.php';
require 'dbConfig.php';


// Create a Faker instance
$faker = Faker\Factory::create();

echo "Saving Data in Database...";


for ($i = 0; $i < 1000000; $i++) {
    
    $title = $faker->title;
    $content = $faker->realText($maxNbChars = 200, $indexSize = 2);

    $sql = "INSERT INTO Posts (Title, Content) VALUES (:title, :content)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);

    $stmt->execute();

    echo "Saved Data in Database...";

}

?>

