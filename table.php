<?php
// Require array $teams
require_once __DIR__."/resources/data.php";

// Create array with table headings
//$headings = ['team'=>'Team', 'nickname'=>'Nickname', 'city'=>'City', 'league'=>'League', 'last-time-champions'=>'Last time champion', 'URL'];
$headings = ['Team','Nickname','City','League','Last time champions','URL'];
?>
    <table>
    <thead>
    <tr>
<?php
// Create first row of table with column headings from $headings array
foreach($headings as $heading):
?>
    <th><?= $heading; ?></th>
<?php
endforeach; 
?>
    </tr>
    </thead>
    <tbody>

<?php
// Loop through secondary array, create one table row for each team
foreach($teams as $teamname=>$team):
?>
    <tr>
    <!-- Use current key value to get team names -->
    <td><?= $teamname;?></td>
    <td>
<?php
// Check if current team has key 'nickname', if so print nickname, else <td> will be empty
if(array_key_exists('nickname', $team)){
echo $team['nickname'];
}
?>
    </td>
    <td><?= $team['city'];?></td>
    <td><?= $team['league'];?></td>
    <td><?= $team['last-time-champions'];?></td>
    <td><?= $team['url'];?></td>
    </tr>
<?php
endforeach;
?>
    </tbody>
    </table>