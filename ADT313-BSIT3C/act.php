<h1>Hands on Activity</h1>
<?php
$table = array(
    "header"=>array(
        "StudentID",
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course"
        
    ),
    "body"=>array(
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
            
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),
                
                
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                ),

                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    
                )
    )

)

?>

<table border="4">
    <thead>
        <?php
            for($i = 0; $i <= count($table["header"]) -1; $i++){
                echo "<th>".$table["header"][$i]."</th>";
            }
        ?>
    </thead>
    <tbody>
        <?php
            for($i = 0; $i <= count($table["body"]) - 1; $i++) {
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$table["body"][$i]["firstname"]."</td>";
                echo "<td>".$table["body"][$i]["middlename"]."</td>";
                echo "<td>".$table["body"][$i]["lastname"]."</td>";
                echo "<td>".$table["body"][$i]["section"]."</td>";
                echo "<td>".$table["body"][$i]["course"]."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
        </table>            