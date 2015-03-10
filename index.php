<!DOCTYPE html>
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
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Table</title>
		<script src="jquery-2.1.3.min.js"></script>
   <style>
       table {
           position: relative;
       }
       
       tr {
           position: relative;
       }
       
       tr:nth-child(even){
           background-color: lightgray;
       }
    
       .grade {
           text-align: center;
       }
       
       .average {
           text-align: right;
       }
       
       .highest {
           background-color: green !important;
       }
       
       .lowest {
           background-color: red !important;
       }
        
   </style>
    </head>
    <body>
       <table>
           <tr>
               <td>Name</td>
               <td>Class</td>
               <td>Grade</td>
           </tr>
              <?php
                    $total = 0;
                    $highest = 0;
                    $lowest = 101;
                    $cssClass = '';
                    for($i=0; $i<count($students); $i++){
                        if($highest < $students[$i]['Grade']){
                            $highest = $students[$i]['Grade'];
                        }
                        if($lowest > $students[$i]['Grade']){
                            $lowest = $students[$i]['Grade'];
                        }
                    }
                    for($i=0; $i<count($students); $i++){
                        if($highest == $students[$i]['Grade']){
                            $cssClass = 'highest';
                        }elseif($lowest == $students[$i]['Grade']){
                            $cssClass = 'lowest';
                        }else{
                            $cssClass = '';
                        }
                        $gradeClass = $students[$i]['Grade'];
                        echo "<tr class='grade$gradeClass $cssClass'>
                            <td>".$students[$i]["name"]."</td>
                            <td>".$students[$i]["Class"]."</td>
                            <td class='grade'>".$students[$i]["Grade"]."</td>
                            <td><button type='button' class='delBtn'>Delete</button></td>
                            </tr>";
                        $total += $students[$i]['Grade'];
                    }
                    echo "<tr><td colspan='3' class='average'> Class Average = ".$total/count($students)."%</td></tr>";
                ?>
               
       </table> 
    </body>
    <script>
        var students = <?php echo json_encode($students); ?>;
        $(document).ready(function(){   
            
            $(".delBtn").on('click', function(){
                $(this).closest('tr').remove();
                updateAvg();
            });
        });
        function updateAvg(){
            var total = 0;
            var count = 0;
            var highest = 0;
            var lowest = 101;
            var average = 0;
            
            $(".highest").removeClass("highest");
            $(".lowest").removeClass("lowest");
            
            $(".grade").each(function(){
                var grade = parseInt($(this).text());
                total += grade;
                count++;
                if(highest < grade){
                    highest = grade;
                }
                if(lowest > grade){
                    lowest = grade;
                }
            });
            
            if(highest !== lowest){
                $(".grade" + highest).addClass("highest");
                $(".grade" + lowest).addClass("lowest");
            }
            
            if(count > 0){
                average = (total/count);
            }
        
            $(".average").text("Class Average = " + average.toFixed(2) + "%");
        }
    </script>
</html>