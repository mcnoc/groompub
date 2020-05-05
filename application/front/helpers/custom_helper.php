<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  

  /*function sendSms start*/
  /*this function used for send sms*/
  function sendSms($mobile, $message){
  
    $authKey = "Manisha26ngp";
    //Multiple mobiles numbers separated by comma
    $mobileNumber = "$mobile";
    //Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "AEMngp";
    //Your message to send, Add URL encoding here.
    
    //Define route 
    $route = "4";
    //Prepare you post parameters
    $postData = array(
      'authkey' => $authKey,
      'mobiles' => $mobileNumber,
      'message' => $message,
      'sender' => $senderId,
      'route' => $route
    );
    
    $url="http://logic.bizsms.in/SMS_API/sendsms.php?username=aem&password=Manisha26ngp&mobile=".$mobileNumber."&sendername=AEMngp&message=".$message."&routetype=1";
    
    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS =>@urldecode($postData)
      //,CURLOPT_FOLLOWLOCATION => true
    ));
    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    //get response
    $output = curl_exec($ch);
    
    //Print error if any
    if(curl_errno($ch))
    {
      echo 'error:' . curl_error($ch);
    }
    
    curl_close($ch);
  

    if($url=true)
    {
      return true;
    }else{
      return false;
    }
  }
  /*function sendSms end*/

  /*function sendMail start*/
  /*this function used for send mail*/
  function sendMail($email, $subject, $message, $file_path=''){

    $config['protocol']     = 'smtp';
    $config['smtp_host']    = 'smtp.sendgrid.net'; 
    $config['smtp_port']    = '587';
    $config['smtp_user']    = 'gggroom';
    $config['smtp_pass']    = 'Un1versa1!';
    $config['charset']        = 'utf-8';
    $config['newline']        = "\r\n";
    $config['crlf']        = "\r\n";
    $config['mailtype']     = 'html';
        
    $CI = get_instance();
    $CI->email->initialize($config);
    $CI->email->from('info@gggroom.com',"",'');
    $CI->email->reply_to('', "");
    $CI->email->to($email);
    $CI->email->subject("$subject");
    $CI->email->message($message);
    if($file_path != ""){
        $CI->email->attach($file_path);
    }
    $mail = $CI->email->send();

    if($mail)
    {
      return true;
    }else{
      return false;
    }
  }
  /*function sendMail end*/