<?php

$servername = "localhost";
$username = "postgres";
$password = "loveunix";
$dbname = "demo_postg";
$port = 5432;

$conn = new PDO("pgsql:host=$servername;port=$port;dbname=$dbname", $username, $password);
$statement = $conn->prepare("SELECT * FROM family");
$statement->execute();
$family = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Table -->
<div class="flex flex-col m-6">
    <h1 class="m-4 text-xl font-bold underline italic text-slate-800 text-center">PostgreSQL</h1>
    <table>
        <tr>
            <?php foreach($family[0] as $key => $value): ?>
                <th class="border px-8 py-2 "><?=$key?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach($family as $member): ?>
            <tr>
                <?php foreach($member as $key => $value): ?>
                    <td class="border px-8 py-2 "><?=$value?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>