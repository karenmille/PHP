<?php
//define variables and constants
$title = 'Assignment 1';
define ('USER', 'Karen Miller\'s ' );
$dob = new DateTime('1981-11-13 10:20:00');
$now = new DateTime();
$interval = $dob->diff($now);
$retirementDate = new DateTime('2048-11-13 10:20:00'); 
$difference = $now->diff($retirementDate);

$courses = array(
    //the first dimession is an associative array
    '20161' => array ('EAP0400C'=>'EAP L/S IV', 'EAP0485C'=>'ESL GRM/WRT IV'),
    '20162' => array ('ENC1101'=> 'COMPOSITION I', 'CGS1060C'=> 'COMP LITERACY', 'MAT0028C'=>'DEV MATH II'),
    '20163' => array ('BSC1005'=> 'GEN BIOLOGY'),
    '20171' => array ('CIS1000C'=> 'INTRO TO CS', 'MAT1033'=> 'INTER ALGEBRA'),
    '20172' => array ('MAC1105'=> 'COLL ALGEBRA', 'COP1334C'=> 'INTRO TO C++', 'SPC1024'=> 'INTRO SPE COMM'),
    '20173' => array ('CIS1513C'=> 'PROJECT MGMT', 'CTS1111C'=> 'LINUX +', 'CTS1851C'=>'WEB AUTHORING 1','MUL2010'=>'MUSIC APPREC'),
    '20181' => array ('COP1210C'=> 'PROGRAMMING 1', 'COP2071C'=>'DB PROGRAM SQL', 'SYG2000'=>'GENERAL SOC'),         
    '20182' => array ('COP2337C'=> 'PROGRAMMING II', 'COP2361C'=> 'OO ANALYSIS', 'CTS2852C'=> 'CLIENT SCRIPT', 'CTS2857C'=>'SERV SIDE SCRPT'),
    //second is the array itself
    );

    
?>
<!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Karen Moreno">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title><?php echo $title;?></title>
    </head> 
    <body>
        <div class="shadow1 content">
            <div class="content">
                <h1><?php echo $title;?></h1>
            
                <?php 
                // displays karen morenos bday
                //echo '<pre>';
                //echo '<code>';
                echo USER . 'Birthday ' . $dob->format('n/j/Y H:i:s');
                echo '<br>';

                //displays the diference from karen's dob and currente date and time
                echo 'It is Been ' . $interval->format(' %y years %m months %d days %H: hours %I: minutes %s: seconds ')   .'since ' . USER . ' was born.';
                echo '<br>';
                echo 'The Number of days before ' . USER . ' retairement date on ' . $retirementDate->format('n/j/Y') . ' is ' . $difference->format('%a days ');
                echo '<br>';
                echo '<br>';
                echo '<hr>';
                //displays the name and number of each course for each semester
                echo '<table>
                
                <tr>
                <th>BC TERM</th>
                <th>CLASS</th>
                <th>CLASS</th>
                <th>CLASS</th>
                <th>CLASS</th>
                </tr>';
                
                foreach ($courses as $obj_key =>$class){
                    echo '<tr>';
                    echo '<td>'."$obj_key <b>Semester</b>:<br>" .'</td>';
                    
                    foreach ($class as $key=>$value){
                    
                        echo '<td>'."$key: $value<br>".'</td>';
                    }
                    
                    echo '</tr>';
                    
                }
                
                echo '</table>';
                
                echo '<br>';
                echo '<hr>';
                echo '<p>Copyright &copy; ' . $dob->format('Y'). '-' . $now->format('Y') . '  Karen Millers</p>';
                //echo '</pre>';
                //echo '</code>';
                ?>
            </div> 
       </div>  
    </body>   
    </html>