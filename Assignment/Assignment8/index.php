<?php
$gcesstaffs=
    [
       "academic"=>
       [
       [ 
        "name"=>"keshav Ale",
        "address"=>"pokhara,lamachaur",
        "phone"=>["9856000000"],
        "subject"=>["maths","logic circuit"]
    ],
    [
        "name"=>"Hari kc",
        "address"=>"kathmandu",
        "phone"=>["9856000000"],
        "subject"=>["php","javascript"]
    ]
    ],
     "non-academic"=>
     [ 
       [
        "name"=>"Bikram kc",
        "address"=>"Bhairava",
        "phone"=>["985604440"],
        "subject"=>["programmer","Developer"]
    ],
   [
        "name"=>"ijack kc",
        "address"=>"khaire",
        "phone"=>["985604440"],
        "subject"=>["microprocessor","logic circuit"]
   ]
   ]
   
   ];
   
   echo '<table border="2px" >';
   echo '<tr>
      <th>Category</th>
      <th>Name</th> 
      <th>Address</th> 
      <th colspan=2>Phone number</th> 
      <th colspan=2>Subjects</th>
      </tr>';
   echo '<tr>';
   foreach ($gcesstaffs as $Category => $details){
       echo '<tr>';
       
           foreach($details as $detail => $info){
               echo "<td>$Category</td>";
              foreach($info as $data => $values){
           
              
               
               if(is_array($values)){
                 
               
                   foreach($values as $value => $v){
                       // echo "<td>$category</td>";
                       echo "<td> $v</td>";
                   
   
                   }
               }else {
                   // echo "<td >$category</td>";
   
                   echo "<td> $values </td>";
               
               }
              }
              echo '</tr>';
       
           
           
       } echo '</tr>';
   }
       echo '</table>';
   ?>