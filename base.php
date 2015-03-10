<table>
<?php
$students = [
    ['name'=>'George Takei', 'Class'=>'Warp Physics', 'Grade'=>75],
    ['name'=>'Leonard Nimoy', 'Class'=>'Anger Management', 'Grade'=>98],
    ['name'=>'William Shatner', 'Class'=>'Ethics & the Chain of Command', 'Grade'=>69],
    ['name'=>'James Doohan', 'Class'=>'Warp Physics', 'Grade'=>92],
    ['name'=>'George Takei', 'Class'=>'Piloting', 'Grade'=>95],
    ['name'=>'Leonard Nimoy', 'Class'=>'Warp Physics', 'Grade'=>95],
    ['name'=>'Deforest Kelley', 'Class'=>'Botony', 'Grade'=>85],
    ['name'=>'Nichelle Nichols', 'Class'=>'Communications', 'Grade'=>95],
    ['name'=>'Zoe Saldana', 'Class'=>'Communications', 'Grade'=>35],
    ['name'=>'William Shatner', 'Class'=>'Trible Care', 'Grade'=>100],
];
    
for($i = 0; $i < count($students); $i++){
        
    echo "<tr>";
    echo "<td>".$students[$i]["name"]."</td>";
    echo "<td>".$students[$i]["Class"]."</td>";
    echo "<td>".$students[$i]["Grade"]."</td>";
    echo "</tr>";
};
?>

</table>
