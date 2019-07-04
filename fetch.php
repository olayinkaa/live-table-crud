<?php
$conn = mysqli_connect("localhost","root","","live_edit");

$sql = "SELECT * FROM biodata ORDER BY id asc";
$result = mysqli_query($conn,$sql);

$output = "";

$output .= '

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="10%">ID</th>
                        <th width="20%">SURNAME</th>
                        <th width="20%">FIRST NAME</th>
                        <th width="20%">EMAIL</th>
                        <th width="20%">PHONE NUMBER</th>
                        <th width="10%">Action</th>
                    </tr>
            ';
if(mysqli_num_rows($result))
{
            while($row = mysqli_fetch_array($result))
        {
                                
                        $output .= ' 
                                    <tr id="'.$row['id'].'">
                                        <td>'.$row['id'].'</td>
                                        <td class="surname" data-id1="'.$row['id'].'" contenteditable="true" >'.$row['surname'].'</td>
                                        <td class="firstname" data-id2="'.$row['id'].'" contenteditable="true">'.$row['firstname'].'</td>
                                        <td class="email" data-id3="'.$row['id'].'" contenteditable="true">'.$row['email'].'</td>
                                        <td class="phone_number" data-id4="'.$row['id'].'" contenteditable="true">'.$row['phone_number'].'</td>
                                        <td><button class="btn btn-danger" id="del" data-id5="'.$row['id'].'" >X</button></td>
                                    </tr>

                                    ';

        }

        $output.= '
        
                    <tr>
                        <td></td>
                        <td id="surname" contenteditable="true"></td>
                        <td id="firstname" contenteditable="true"></td>
                        <td id="email" contenteditable="true"></td>
                        <td id="phone_number" contenteditable="true"></td>
                        <td><button class="btn btn-success btn-xs" id="add">+</button></td>
                    </tr>
        
        
        ';

}
else
{ 
          
        // $output .= '
            
        //                 <tr >
        //                     <td colspan="6" align="center" class="text-danger">DATA NOT FOUND</td>
        //                 </tr>  
            
        //     ';
        $output.= '
        
        <tr>
            <td></td>
            <td id="surname" contenteditable="true"></td>
            <td id="firstname" contenteditable="true"></td>
            <td id="email" contenteditable="true"></td>
            <td id="phone_number" contenteditable="true"></td>
            <td><button class="btn btn-success btn-xs" id="add">+</button></td>
        </tr>


';


}

    
$output .= '

                </table>
            </div>
            ';




echo $output;





?>