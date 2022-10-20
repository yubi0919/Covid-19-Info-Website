<?php 
    $name="";
    $date="";
    $reason="";
    $phoneNo="";
    $email="";   
    $start="";
    $end="";
    $con = mysqli_connect('localhost', 'root', '', 'cmt322');

    
    if(isset($_POST['apply'])){     // click apply 
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $date = date('Y-m-d', strtotime($_POST['date']));
        $reason = mysqli_real_escape_string($con, $_POST['reason']);
        $phoneNo = mysqli_real_escape_string($con, $_POST['phone']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $start = mysqli_real_escape_string($con, $_POST['start']);
        $end = mysqli_real_escape_string($con, $_POST['end']);
        
        if(file_exists('applylist.json')){
            $current_data = file_get_contents('applylist.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'name' => $name,
                'date' => $date,
                'reason' => $reason,
                'phoneNo' => $phoneNo,
                'email' => $email,
                'fromstate' => $start,
                'tostate' => $end,
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            file_put_contents('applylist.json', $final_data);
        }


        $sql = "INSERT INTO crossborder (name, travel_date, reason, phone ,email, tostate, fromstate) 
                    VALUES ('$name','$date', '$reason', '$phoneNo','$email',  '$end', '$start')";
            
        $result = mysqli_query($con, $sql);
    }

?>