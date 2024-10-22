<?php

$config = require("config.php");
$db = $config["db"];


class Database
{

    public function query($db)
    {
        $dsn = "pgsql:host={$db["servername"]};port={$db["port"]};dbname={$db["dbname"]}";
        $pdo = new PDO($dsn, $db["username"], $db["password"]);
        
        // Query
        $statement = $pdo->prepare("SELECT * FROM family");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
$database = new Database();

$family = $database->query($db);

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