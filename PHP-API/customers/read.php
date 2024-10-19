<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');

include('function.php');
$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == "GET"){
    
    if(isset($_GET['username'])){

        $customer = getCustomer($_GET);
        echo $customer;
  
    }else if(isset($_GET['token'])){

        $customer1 = getCustomer1($_GET);
        echo $customer1;


    }else if(isset($_GET['email'])){

        $customer4 = getCustomer4($_GET);
        echo $customer4;
    }else if(isset($_GET['branch'])){

        $customer5 = getCustomer5($_GET);
        echo $customer5;
    }else if(isset($_GET['password'])){

        $customer2 = getCustomer2($_GET);
        echo $customer2;
    }else if(isset($_GET['customerid']) && isset($_GET['product'])){

        $customer3 = getCustomer3($_GET);
        echo $customer3;
    }else if(isset($_GET['fieldofficer']) && isset($_GET['date'])){

        $customer11 = getCustomer11($_GET);
        echo $customer11;
    }else if(isset($_GET['phoneno'])){

        $customer6 = getCustomer6($_GET);
        echo $customer6;
    }else if(isset($_GET['fullname'])){

        $customer7 = getCustomer7($_GET);
        echo $customer7;
    }else if(isset($_GET['accountno'])){

        $customer8 = getCustomer8($_GET);
        echo $customer8;
    }else if(isset($_GET['product'])){

        $customer9 = getCustomer9($_GET);
        echo $customer9;
    }else if(isset($_GET['status'])){

        $customer10 = getCustomer10($_GET);
        echo $customer10;
    }else if(isset($_GET['accountno1'])){

        $customer12 = getCustomer12($_GET);
        echo $customer12;
    }else if(isset($_GET['fullname1'])){

        $customer14 = getCustomer14($_GET);
        echo $customer14;
    }else if(isset($_GET['pageno'])){

        $customer13 = getCustomer13($_GET);
        echo $customer13;
    }else if(isset($_GET['id'])){

        $customer15 = getCustomer15($_GET);
        echo $customer15;
    }else if(isset($_GET['pagenumber']) && isset($_GET['date'])){

        $customer16 = getCustomer16($_GET);
        echo $customer16;
    }else if(isset($_GET['fullnameA']) && isset($_GET['dates'])){

        $customer117 = getCustomer117($_GET);
        echo $customer117;
    }else if(isset($_GET['token1'])){

        $customer18 = getCustomer18($_GET);
        echo $customer18;
    }else if(isset($_GET['accountno01'])){

        $customer19 = getCustomer19($_GET);
        echo $customer19;
    }else if(isset($_GET['accountnoY'])){

        $customer20 = getCustomer20($_GET);
        echo $customer20;
    }else if(isset($_GET['token2'])){

        $customer21 = getCustomer21($_GET);
        echo $customer21;
    }else if(isset($_GET['maturitydate'])){

        $customer22 = getCustomer22($_GET);
        echo $customer22;
    }else if(isset($_GET['passwword'])){

        $customer25 = getCustomer25($_GET);
        echo $customer25;
    }else if(isset($_GET['maturitydate1'])){

        $customer23 = getCustomer23($_GET);
        echo $customer23;
    }
    else{
        $requestMethod = getCustomerList();
        echo $requestMethod;
    }
    
    
}else{
      $data = [
          'status'   => 405,
          'message'  =>$requestMethod. 'Method Not Allowed',
      ];
      header("HTTP/1.0 405 Method Not Allowed");
      echo json_encode($data);
}

?>