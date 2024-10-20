<?php

$servername = "localhost";
$username = "root";
$password = "loveunix";
$dbname = "demo";
$port = 3306;

$conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
$statement = $conn->prepare("SELECT * FROM cars");
$statement->execute();
$cars = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Table -->
<div class="flex flex-col m-6">
<h1 class="m-4 text-xl font-bold underline italic text-slate-800 text-center">MySQL</h1>
    <table>
        <tr>
            <?php foreach($cars[0] as $key => $value): ?>
                <th class="border px-8 py-2 "><?=$key?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach($cars as $car): ?>
            <tr>
                <?php foreach($car as $key => $value): ?>
                    <td class="border px-8 py-2 "><?=$value?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>