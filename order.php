<?php
$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
$address = (isset($_POST['address'])) ? $_POST['address'] : '';
$click_id = (isset($_POST['click_id']) && trim($_POST['click_id']) != '') ? $_POST['click_id'] : '';
$fb_pixel_id = (isset($_GET['fb_pixel_id'])) ? $_GET['fb_pixel_id'] : '';

$domainDefault = ''; // for Pubs download

if ($name == '' || $phone == '') {
    errors('Bạn vui lòng nhập đầy đủ thông tin!');
    die;
}
$data = [];
$data['name'] = substr($name, 0, 60); //limit name 60
$data['phone'] = substr($phone, 0, 20); //limit phone 20
$data['address'] = $address;
$data['click_id'] = $click_id;
$data['fb_pixel_id'] = $fb_pixel_id;
function call_post($url = '', $data = [])
{
    $servername = "localhost";
    $username = "chung";
    $password = "password";
    $dbname = "tengsu2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $conn -> set_charset("utf8");
    $sql = "INSERT INTO MyGuests(name, phone, address, click_id, fb_pixel_id)
    VALUES (\"".$data['name']."\", \"".$data['phone']."\", \"".$data['address']."\", \"".$data['click_id']."\", \"".$data['fb_pixel_id']."\")";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $to_email = 'vklfall2@gmail.com';
    $subject = 'Testing PHP Mail';
    $message = "Name: ".$data['name']."\nPhone: ".$data['phone']."\nAddress: ".$data['address'];
    $headers = [
        'MIME-Version' => 'MIME-Version: 1.0',
        'Content-type' => 'text/plain; charset=UTF-8',
        'From' => "nvt94.ptit@gmail.com",
        'Reply-To' => "nvt94.ptit@gmail.com",
        'Subject' => "new order",
        'X-Mailer' => 'PHP/' . phpversion(),
    ];
    $success = mail($to_email, $subject, $message, [$headers]);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
        header("Location: thankyou.php?fb_pixel_id=ss".$errorMessage);
    }
    header("Location: thankyou.php?fb_pixel_id=ss");
    die();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: thankyou.php?fb_pixel_id=".$conn->error);
    die();
    }

    $conn->close();
    
    $timeout = 10000;
    $http_header = [
        "content-type: application/json",
    ];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_CONNECTTIMEOUT_MS => $timeout,
        CURLOPT_TIMEOUT_MS => $timeout,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => $http_header,
        CURLOPT_VERBOSE => true,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
if($domainDefault != ''){
    $result = call_post($domainDefault . '/post.php', $data);
}else{
    $result = call_post( url('post.php'), $data);
}
$result = json_decode($result);
if ($result->status == 0) {
    $FBPixelId = htmlspecialchars($fb_pixel_id, ENT_QUOTES, 'utf-8');
    header("Location: thankyou.php?fb_pixel_id=$FBPixelId");
}
errors($result->message);
function errors($mess = '')
{
    echo '<pre>';
    print_r($mess);
    echo '</pre>';
}

function url($file)
{
    if (isset($_SERVER['HTTPS'])) {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    return str_replace('/order.php', '/post.php',  $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}