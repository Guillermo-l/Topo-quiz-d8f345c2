<?php
// Array List
$topo = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China"=> "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina"=>  "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London",
);
// Points
$points = 0;
$totalPoints = count($topo);

// Foreach, Item in Array
foreach($topo as $answer) {
    $land = array_search($answer, $topo);
    echo "Welke hoofdstad heeft " . $land . "?" . PHP_EOL;
    $inputAnswer = readline("> ");
    if($inputAnswer === $answer) {
        // If answer = true
        echo "Correct!" . PHP_EOL;
        $points++;
    } elseif($topo !== $answer) {
        // If answer = false
        echo "Helaas, " . $inputAnswer . " is niet de hoofdstad van  " . $land . "." . PHP_EOL;
        echo "Het correcte antwoord is: " . $answer . PHP_EOL;
    } else {
        // Fallback
        exit("Er is een probleem opgetreden.");
    }
};
// End Result
echo "Je hebt " . $points . " van de " . $totalPoints . " goed geraden!" . PHP_EOL;