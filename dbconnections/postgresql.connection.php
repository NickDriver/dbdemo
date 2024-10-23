<?php

require("Database.php");
$config = require("config.php");


$database = new Database($config["db"], "nickmaster", "loveunix");
$family = $database->query("SELECT * FROM family")->fetchAll();

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