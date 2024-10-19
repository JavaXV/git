<?php
require '../inc/dbcon.php';

 $host      = "127.0.0.1";
 $username  = "root";
 $password  = "";
 $dbname    = "bestwing_db";
 $conn = mysqli_connect($host, $username, $password, $dbname);

function error422($message){

    $data = [
        'status'   => 422,
        'message'  =>$message,
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    echo json_encode($data);
    exit();
}

function getCustomerList(){

    global $conn;
}

function getCustomer($customerParams){

    global $conn;
    if($customerParams['username'] == null){
        return error422('Enter Staff Username');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['username']);
    $query ="SELECT * FROM Staff WHERE Username='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer1($customerParams){

    global $conn;
    if($customerParams['token'] == null){
        return error422('Enter Staff Token');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['token']);
    $query ="SELECT * FROM staff WHERE Token='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}



function getCustomer2($customerParams){

    global $conn;
    if($customerParams['password'] == null){
        return error422('Enter Admin Password');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['password']);
    $query ="SELECT * FROM staff WHERE Passwword='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer3($customerParams){

    global $conn;
    if($customerParams['customerid'] == null && $customerParams['product'] == null){
        return error422('Enter customerid and product');
    }
    $customerId  = mysqli_real_escape_string($conn, $customerParams['customerid']);
    $customerIdd = mysqli_real_escape_string($conn, $customerParams['product']);
    $query ="SELECT * FROM Accounts WHERE CustomerId='$customerId' and Product='$customerIdd' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer4($customerParams){

    global $conn;
    if($customerParams['email'] == null){
        return error422('Enter Email');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['email']);
    $query ="SELECT * FROM Person WHERE Email='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}




function getCustomer5($customerParams){

    global $conn;
    if($customerParams['branch'] == null){
        return error422('Enter Branch');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['branch']);
    $query ="SELECT * FROM totals WHERE branch='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer6($customerParams){

    global $conn;
    if($customerParams['phoneno'] == null){
        return error422('Enter phoneno');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['phoneno']);
    $query ="SELECT * FROM Person WHERE SMSAlert='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer7($customerParams){

    global $conn;
    if($customerParams['fullname'] == null){
        return error422('Enter fullnameX');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['fullname']);
    $query ="SELECT * FROM Person WHERE Fullname='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer8($customerParams){

    global $conn;
    if($customerParams['accountno'] == null){
        return error422('Enter accountno');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['accountno']);
    $query ="SELECT * FROM Accounts WHERE AccountNo='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer9($customerParams){

    global $conn;
    if($customerParams['product'] == null){
        return error422('Enter product');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['product']);
    $query ="SELECT * FROM Accounts WHERE Product='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer product Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}

function getCustomer10($customerParams){

    global $conn;
    if($customerParams['status'] == null){
        return error422('Enter Status');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['status']);
    $query ="SELECT * FROM FieldOfficer WHERE Status='$customerId' ";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) > 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'FieldOfficer product Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}

function getCustomer11($customerParams){

    global $conn;
    if($customerParams['fieldofficer'] == null && $customerParams['date'] == null){
        return error422('Enter fieldofficer and date');
    }
    $customerId  = mysqli_real_escape_string($conn, $customerParams['fieldofficer']);
    $customerIdd = mysqli_real_escape_string($conn, $customerParams['date']);
    $query ="SELECT * FROM DailyChat WHERE FieldOfficer='$customerId' and Date='$customerIdd' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer12($customerParams){

    global $conn;
    if($customerParams['accountno1'] == null){
        return error422('Enter accountno1');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['accountno1']);
    $query ="SELECT * FROM Person WHERE AccountNo='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}

function getCustomer13($customerParams){

    global $conn;
    if($customerParams['pageno'] == null){
        return error422('Enter pageno');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['pageno']);
    $query ="SELECT * FROM Accounts WHERE PageNo='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer pageno Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No pageno Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer14($customerParams){

    global $conn;
    if($customerParams['fullname1'] == null){
        return error422('Enter fullname1X');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['fullname1']);
    $query ="SELECT * FROM Accounts WHERE FullName='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}

function getCustomer15($customerParams){

    global $conn;
    if($customerParams['id'] == null){
        return error422('Enter id');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['id']);
    $query ="SELECT * FROM Accounts WHERE id='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}



function getCustomer16($customerParams){

    global $conn;
    if($customerParams['pagenumber'] == null && $customerParams['date'] == null){
        return error422('Enter pageno and date');
    }
    $customerId  = mysqli_real_escape_string($conn, $customerParams['pagenumber']);
    $customerIdd = mysqli_real_escape_string($conn, $customerParams['date']);
    $query ="SELECT * FROM Transactions WHERE PageNumber='$customerId' and ApprovedDate='$customerIdd' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}

function getCustomer117($customerParams){

    global $conn;
    if($customerParams['fullnameA'] == null && $customerParams['dates'] == null){
        return error422('Enter fullnameA and dates');
    }
    $customerId  = mysqli_real_escape_string($conn, $customerParams['fullnameA']);
    $customerIdd = mysqli_real_escape_string($conn, $customerParams['dates']);
    $query ="SELECT * FROM Person WHERE Fullname='$customerId' and Date='$customerIdd'";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer18($customerParams){

    global $conn;
    if($customerParams['token1'] == null){
        return error422('Enter token1');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['token1']);
    $query ="SELECT * FROM Person WHERE Token='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Customer AccounTnO Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No AccounTnO Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


function getCustomer19($customerParams){

    global $conn;
    if($customerParams['accountno01'] == null){
        return error422('Enter accountno01');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['accountno01']);
    $query ="SELECT * FROM PageNos WHERE AccountNo='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}



function getCustomer20($customerParams){

    global $conn;
    if($customerParams['accountnoY'] == null){
        return error422('Enter accountnoY');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['accountnoY']);
    $query ="SELECT * FROM AllBranch WHERE AccountNo='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}



function getCustomer21($customerParams){

    global $conn;
    if($customerParams['token2'] == null){
        return error422('Enter token2');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['token2']);
    $query ="SELECT * FROM Accounts WHERE Token='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}



function getCustomer22($customerParams){

    global $conn;
    if($customerParams['maturitydate'] == null){
        return error422('Enter maturitydate');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['maturitydate']);
    $query ="SELECT * FROM Accounts WHERE alert5='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}




function getCustomer23($customerParams){

    global $conn; 
    if($customerParams['maturitydate1'] == null){
        return error422('Enter maturitydate1');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['maturitydate1']);
    $query ="SELECT * FROM Accounts WHERE alert2='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}



function getCustomer25($customerParams){

    global $conn; 
    if($customerParams['passwword'] == null){
        return error422('Enter passwword');
    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['passwword']);
    $query ="SELECT * FROM Staff WHERE passwword='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);

        }else{

            $data = [
                'status'   => 404,
                'message'  => 'No Staff Found',
            ];
            header("HTTP/1.0 404 Not Found");
            echo json_encode($data);
        }

    }else{
        $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
    }
}


?>