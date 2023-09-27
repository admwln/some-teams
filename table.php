<?php
// Require array $teams
require_once __DIR__."/resources/data.php";

// First column heading will be 'team'
$uniqueColumns = ['team'];

// Get all unique keys from secondary array, will be used as column headings
foreach($teams as $team){
    foreach($team as $columnName=>$cellData){
        $uniqueColumns[] = $columnName;
    }  
}
$uniqueColumns = array_unique($uniqueColumns);
?>

<table>
<tr>
    <?php
    // Create first row of table with column headings from $uniqueColumns array
    foreach($uniqueColumns as $column):?>
        <th><?= $column; ?></th>
    <?php endforeach; 
    //Remove 'team' from $uniqueColumns array
    array_splice($uniqueColumns, 0, 1);
    ?>
</tr>

<?php 
foreach($teams as $teamName=>$teamData):?>
        
<tr>
    <td><?= $teamName; ?></td>
        
        <?php 
        foreach($uniqueColumns as $uniqueColumn):?>
            <?php
            if(array_key_exists($uniqueColumn, $teamData)):?>
                <td><?= $teamData[$uniqueColumn]; ?></td>
            <?php
            elseif(!array_key_exists($uniqueColumn, $teamData)):?>
                <td></td>
            <?php
            endif; ?>      
        <?php endforeach; ?>
</tr>

<?php endforeach; ?>

</table>
