<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Dashboard class.
 *
 * @extends CI_Controller
 */
class Login extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','custom_helper'));
        $this->load->model('general_model');
         // Load facebook library
        $this->load->library('facebook');
        //$this->load->library('google');
        require_once APPPATH.'third_party/src/Google_Client.php';
       require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
        
        //Load user model
        $this->load->model('user');
        $this->load->model('user_google');
    }

    /**
     * index function.
     *
     * @access public
     * @return void
     */
     
     public function google_login()
	{
		$clientId = '451121193550-hlsugnnfutdn2fmdj8h9afodm7bf6tge.apps.googleusercontent.com'; //Google client ID
		$clientSecret = '72xfen98jbCpgKOnJ5dRG1zy'; //Google client secret
		$redirectURL = base_url() . 'Login/google_login/';
		
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		 $userData = array();
		
		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{
			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
             $userData = $userProfile;
            
             // Insert or update user data
            $userID = $this->user_google->checkUser($userProfile);
            
             // Check user data insert or update status
            if(!empty($userID)){
                 $userData['uid'] = $userID;
                $data['userData'] = $userData;
                $this->session->set_userdata('userData', $userData);
                //print_r($userData);
              
                
                 $sess_data = array('login' => TRUE, 'email' => $userData['email'], 'username' => $userData['given_name'], 'uid' => $userData['uid'], 'firstname' => $userData['given_name'], 'usertype' => '1');
                  $this->session->set_userdata($sess_data);
                   redirect('home', 'refresh');
            }else{
               $data['userData'] = array();
            }
            
            
			echo "<pre>";
			print_r($userProfile);
			die;
        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}
    public function index() {
      $footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;
      $this->data['authURL'] =  $this->facebook->login_url();
     //$this->data['google_login_url']=$this->google->get_login_url();
     // $this->data['loginURL'] = $this->google->loginURL();


        if (!$this->session->userdata('uid')) {
          // echo "<pre>";print_r($_SESSION);
          $this->data['title'] = 'Login | GGG Rooms';
           $this->render('login');
        }
        else{
          redirect('home');
        }
    }

    public function register() {
      $footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;

      $this->data['js_file'] = array(
          "front/js/jquery-editable-select.min.js",

      );
      $this->data['css_file'] = array(
          "front/css/jquery-editable-select.min.css"
      );

      $this->data['title'] = 'Sign Up | GGG Rooms';
        $this->render('register');
    }

    public function forgot_password() {
      $footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;

      $this->data['title'] = 'Forgot Password | GGG Rooms';
        $this->render('forgot_password');
    }

    public function forgot_reset_password($token){
      $footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;

      $this->data['token'] = $token;
      $this->data['title'] = 'Forgot Password | GGG Rooms';
      $this->render('passwordreset');
  }

    public function user_login(){
      /*$footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;*/

              $this->load->helper('form','url');
              $this->load->library('form_validation');

              $this->form_validation->set_rules('email', 'email', 'required');
              $this->form_validation->set_rules('pwd', 'Password', 'required');

              if ($this->input->post()) {
                  if ($this->form_validation->run() == false) {
                      $this->session->set_flashdata('error_message', "Username and Password is require");
                      redirect('', 'refresh');
                  } else {

                    $email = $this->input->post('email');
                    $pwd2 = $this->input->post('pwd');
                    $password = md5($this->input->post('pwd'));
                    $remember = $this->input->post('remember');

                    if($remember){
                      setcookie("remember", $remember, time() + (86400 * 30), "/");
                      setcookie("rem_email", $email, time() + (86400 * 30), "/");
                      setcookie("rem_pass", $this->input->post('pwd'), time() + (86400 * 30), "/");
                    }

                    /*if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
                      $uresult = $this->general_model->check_data( 'user', array('username' => $email, 'password' => $password));
                    }
                    else{*/
                      $uresult = $this->general_model->check_data( 'user', array('email' => $email, 'password' => $password));
                    //}
                    // $uresult = $this->general_model->check_data( 'user', array('email' => $email, 'password' => $password));
                    if (count($uresult) > 0)
                    { print_r($uresult);
                      if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
                        $verification = $this->general_model->check_verification('user', array('username' => $email, 'is_active' => 1));
                        $check_verify = count($verification);
                      }
                      else{
                        $verification = $this->general_model->check_verification('user', array('email' => $email, 'is_active' => 1));
                        $check_verify = count($verification);
                      }
                      // $verification = $this->general_model->check_verification('user', array('email' => $email, 'is_active' => 1));
                      $check_verify = count($verification);


                      $set = '1234567890';
                      $code = substr(str_shuffle($set), 0, 4);

                      $u_data = array(
                          'email' => $uresult[0]->email,
                          'password' => $pwd2,
                          'code' => $code,
                      );

                      $data = array(
                          'code' => $code,
                      );

                      if($check_verify == 1){
                        $sess_data = array('login' => TRUE, 'email' => $uresult[0]->email, 'username' => $uresult[0]->username, 'uid' => $uresult[0]->id, 'firstname' => $uresult[0]->firstname, 'usertype' => $uresult[0]->u_category);
                        $this->session->set_userdata($sess_data);

                        $uid = $this->session->userdata('uid');
                        // redirect('home', 'refresh');
                        if(!empty($_SESSION['appointmentId']))
                        {
                          redirect('appointment/appointment_step1/'.$_SESSION['appointmentId'], 'refresh');
                        }
                        elseif(!empty($_SESSION['chatId']))
                        {
                          redirect('chat?id='.$_SESSION['chatId'], 'refresh');
                        }
                        elseif(!empty($_SESSION['chatId_main']))
                        {
                          redirect('chat/send_message/'.$_SESSION['chatId_main'], 'refresh');
                        }
                        elseif(!empty($_SESSION['fav_shopid']) && !empty($_SESSION['fav_serviceid']))
                        {
                          redirect('home/index1', 'refresh');
                        }
                        else
                        {
                          // echo "<pre>"; print_r($_SESSION);exit;
                          redirect('home/index1', 'refresh');
                        }
                      }else{
                        $update_id = $this->general_model->update_verification_code($data, 'user', array('email' => $uresult[0]->email));
                        // echo '<pre>';print_r($update_id);exit;
                        if ($update_id) {
                          $emailsend = $this->general_model->sendConfirmationEmail($u_data);

                          if($emailsend){
                            $msg = 'Activation code sent to email, Please first verify your account.';
                            $this->data['success'] = $msg;
                            $this->data['user_data'] = $uresult[0]->email;
                            $this->data['title'] = 'Verification | GGG Rooms';
                            $this->render('verification');
                          }else{
                             $this->session->set_flashdata('error_message', "Sorry, User can not login as he is Inactive or deleted");
                             redirect('', 'refresh');
                            }
                        }
                      }
                    }
                    else {
                        $this->session->set_flashdata('error_message', "Please enter correct username and password");
                        redirect('', 'refresh');
                    }
                  }
              }
    }
    
    public function logout(){
      $data = array('login' => '', 'email' => '',  'firstname' => '', 'uid' => '');
      $this->session->unset_userdata($data);
      // redirect('home', 'refresh', $data);
      redirect(site_url(), $data);
    }

    public function register_user() {
      /*$footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;*/

            if ($this->input->post()) {
                $this->load->helper('form','url');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('fname', 'Firstname', 'required');
                $this->form_validation->set_rules('lname', 'Lastname', 'required');
                //$this->form_validation->set_rules('uname', 'Username', 'required');
                $this->form_validation->set_rules('radio_gender', 'Gender', 'required');
                $this->form_validation->set_rules('mobile', 'Mobile No', 'required');
                $this->form_validation->set_rules('u_chk', 'Radio', 'required');
                $this->form_validation->set_rules('pwd', 'Password', 'required');
                //$this->form_validation->set_rules('u_email', 'Email', 'required|valid_email|is_unique[user.email]');
                //$this->form_validation->set_rules('u_email', 'Email', 'required|valid_email');

                if ($this->form_validation->run() == false) {

                    $this->session->set_flashdata('error_message', "Please fill required fields.");

                    $this->session->set_userdata('USER_DETAIL', $_POST);

                    redirect('login/register', 'refresh');

                } else {

                    $u_email = $this->input->post('u_email');
                    // echo '<pre>';print_r($this->input->post());exit;
                    if ($this->general_model->check_exist_data('id', 'user', array('email' => $u_email, 'is_deleted' => 0))) {

                        $this->session->set_flashdata('error_message', "User already exist.");

                        //redirect('login/register', 'refresh');

                    } else {
                      $fname = $this->input->post('fname');
                      $lname = $this->input->post('lname');
                      $uname = $this->input->post('uname');
                      $mobile = $this->input->post('mobile');
                      $u_email = $this->input->post('u_email');
                      $gender = $this->input->post('radio_gender');
                      $pwd = $this->input->post('pwd');
                      $u_chk = $this->input->post('u_chk');
                      //$set = '1234567890';
                      //$code = substr(str_shuffle($set), 3, 4);
                      $code = rand(1111,9999);

                      $u_data = array(
                          'firstname' => $fname,
                          'lastname' => $lname,
                          'mobile' => $mobile,
                          'email' => $u_email,
                          'gender' => $gender,
                          'password' => $pwd,
                          'u_category' => $u_chk,
                          'code' => $code,
                      );

                      $data = array(
                          'firstname' => $fname,
                          'lastname' => $lname,
                          'mobile' => $mobile,
                          'email' => $u_email,
                          'gender' => $gender,
                          'password' => md5($pwd),
                          'u_category' => $u_chk,
                          'code' => $code,
                          'date' => date('Y-m-d H:i:s'),
                          'is_active' => 0,
                          'is_deleted' => 0,
                      );
                      // $this->load->helper('sendsms_helper');
                      // $number = "919870032213";
                      // $message = "hii";
                      // $send = $this->general_model->sendsms($number, $message);
                      // echo '<pre>';print_r($send);exit;
                      // if ($inserted_id) {

                      $emailsend = $this->general_model->sendConfirmationEmail($u_data);
                      $smssend=$this->general_model->sendConfirmationSms($u_data);
                        // echo $emailsend;exit;
                        // <p style="text-align:center;font-size: 18px;line-height: 5px;"><b>Just one more step</b></p><br/>You have almost completed your registration. We have sent you a activation code to the email address you provided. Please check out your inbox to confirm your registration.<br/> Thank you!<br/><br/><p style="text-align:center;font-size: 18px;line-height: 5px;margin-top: 22px;">Did not receive your activation code?</p><div style="text-align:center;"><button type="button" id="resend_code" style="padding: 5px;">RESEND EMAIL</button></div>
                        if($emailsend){
                          $inserted_id = $this->general_model->insert_user($data, 'user');
                          $msg = 'Activation code sent to email';
                          $this->data['success'] = $msg;
                          $this->data['user_data'] = $u_email;
                          $this->data['title'] = 'Verification | GGG Rooms';
                          $this->render('verification');
                        }else{
                            $this->session->set_flashdata('error_message', "Sorry, something went wrong. please try again");
                            redirect('', 'refresh');
                         }
                          
                      // }
                    }
                }
            } else {
               redirect('', 'refresh');
            }
        // } else {
        //     redirect('Login', 'refresh');
        // }
    }


    /*public function testfun()
    {
      $this->render('verification');
    }*/
    public function activate(){
      
      $footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
      $this->data['footer_pages1'] = $footer_pages1;

      $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
      $this->data['footer_pages2'] = $footer_pages2;

      $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
      $this->data['footer_pages3'] = $footer_pages3;

      $u_email = $this->input->post('user_email');
      $code1 = $this->input->post('code1');
      $code2 = $this->input->post('code2');
      $code3 = $this->input->post('code3');
      $code4 = $this->input->post('code4');
      $code = $code1.$code2.$code3.$code4;
      $user = $this->general_model->getUser($u_email);
    if($user['code'] == $code){
      $data['is_active'] = 1;
      $query = $this->general_model->activate($data, $u_email);
      if($query){
        $sess_data = array('login' => TRUE, 'email' => $user['email'], 'username' => $user['username'], 'uid' => $user['id'], 'firstname' => $user['firstname']);
        $this->session->set_userdata($sess_data);

        $this->session->set_flashdata('success_message', 'User activated successfully');
        redirect('', 'refresh');

        // $this->session->set_flashdata('success_message', 'User activated successfully');
        // redirect('login', 'refresh');
      }
      else{
        $this->session->set_flashdata('error_message', 'Something went wrong in activating account');
        redirect('login/register', 'refresh');
      }
    }
    else{
      $msg = "Cannot activate account. Code didn't match";
      $this->data['error'] = $msg;
      $this->data['user_data'] = $u_email;
        $this->data['title'] = 'Verification | GGG Rooms';
      $this->render('verification');

    }
  }

  public function checkUniqueusername($table, $columnName)
  {
   $username = $_POST['username'];
      if(!empty($username)) {

           $this->db->select($columnName);
           $this->db->from($table);
           $this->db->where('username',$username);
           $count = $this->db->get()->row();
           $count = count($count);
           $count = (int)$count;
           if($count > 0){
              echo 'false';
           }else{
             echo 'true';
           }
  }
  }

  public function checkUnique($table, $columnName)
 {
   $email = $_POST['u_email'];
      if(!empty($email)) {

           $this->db->select($columnName);
           $this->db->from($table);
           $this->db->where('email',$email);
           $count = $this->db->get()->row();
           $count = count($count);
           $count = (int)$count;
           if($count > 0){
              echo 'false';
           }else{
             echo 'true';
           }
  }
}


public function checkemail()
 {   
    $email =$_POST['val'];
      if(!empty($email)) {

           $this->db->select('email');
           $this->db->from('user');
           $this->db->where('email',$email);
           $count = $this->db->get()->row();
           $count = count($count);
           $count = (int)$count;
           if($count > 0){
            echo 'Email already Exist';
           return false;
        
           }else{
            return true;
        
           }
  }
}


  public function privacy(){
    $footer_pages1 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 1, 'is_deleted' => 0));
    $this->data['footer_pages1'] = $footer_pages1;

    $footer_pages2 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 2, 'is_deleted' => 0));
    $this->data['footer_pages2'] = $footer_pages2;

    $footer_pages3 = $this->general_model->get_footer_page_data('*', 'page', array('flag' => 3, 'is_deleted' => 0));
    $this->data['footer_pages3'] = $footer_pages3;

    $id = $this->session->userdata('uid');
    $userlist = $this->general_model->get_edit_user_data('user', array('user.id' => $id, 'user.is_deleted' => 0));
    $this->data['userlist'] = $userlist;

    $this->data['title'] = 'Change Password | GGG Rooms';
      $this->render('change_password');
    }

    public function change_password(){

      if ($this->input->post()){
          $this->load->helper('form','url');
          $this->load->library('form_validation');

          $this->form_validation->set_rules('current_pwd', 'Password', 'required');
          $this->form_validation->set_rules('pwd', 'Password', 'required');
          $this->form_validation->set_rules('c_pwd', 'Confirm Password', 'required|matches[pwd]');

          if ($this->form_validation->run() == false) {
              $this->session->set_flashdata('error_message', "Please fill all the fields");
              redirect('login/privacy', 'refresh');
          } else {

            $uid = $this->session->userdata('uid');
            $pwd = $this->input->post('pwd');
            $c_pwd = $this->input->post('c_pwd');

              $data = array(
                'password' => md5($pwd),
              );

              $change_pwd = $this->general_model->change_password($data, 'user', array('id' => $uid));

              // if($change_pwd == 1){
              $this->db->select('email,firstname');
              $this->db->from('user');
              $this->db->where('id',$uid);
              $count = $this->db->get()->row();
                  $email = $count->email;
                  $firstname = $count->firstname;
                  $emailsend = $this->general_model->change_pwd_Email($email, $firstname);
                  if($emailsend){
                    $data = array('login' => '', 'email' => '', 'username' => '', 'firstname' => '', 'uid' => '');
                    $this->session->unset_userdata($data);

                    $this->session->set_flashdata('success_message', "Your password has been updated, Try to Login with the new Password.");
                    redirect('home','refresh');
                  }
                  else{
                    $this->session->set_flashdata('error_message', 'Sorry, something went wrong. please try again');
                    redirect('home', 'refresh');
                  }
              // }
              // else{
              //   $this->session->set_flashdata('error_message', 'Sorry, something went wrong. please try again');
              //   redirect('home', 'refresh');
              // }
            }
          }
          else {
             redirect('home', 'refresh');
          }
        }

        public function check_old_password($table, $columnName)
       {
         $password = $_POST['current_pwd'];
         $c_password = md5($password);
         $uid = $this->session->userdata('uid');

            if(!empty($c_password)) {
                 $this->db->select($columnName);
                 $this->db->from($table);
                 $this->db->where('password',$c_password);
                 $this->db->where('id',$uid);
                 $count = $this->db->get()->row();
                 $count = count($count);
                 $count = (int)$count;
                 if($count > 0){
                    echo 'true';
                 }else{
                   echo 'false';
                 }
        }
      }
    public function check_recovery_email($table, $columnName)
     {
       $email = $_POST['recovery_email'];
          if(!empty($email)) {
               $this->db->select($columnName);
               $this->db->from($table);
               $this->db->where('email',$email);
               $count = $this->db->get()->row();
               $count = count($count);
               $count = (int)$count;
               if($count > 0){
                  echo 'true';
               }else{
                 echo 'false';
               }
      }
    }

    public function reset_password(){

      if ($this->input->post()){
          $this->load->helper('form','url');
          $this->load->library('form_validation');

          $this->form_validation->set_rules('recovery_email', 'Email', 'required|valid_email');

          if ($this->form_validation->run() == false) {
              $this->session->set_flashdata('error_message', "Email is require");
              redirect('login/forgot_password', 'refresh');
          } else {
            $email = $this->input->post('recovery_email');
            $this->load->helper('string', 6);
            $token= random_string('alnum', 12);

              $data = array(
                  'token' => $token
              );

              $qry = $this->db->where('email', $email)
                              ->update('user', $data);

              $emailsend = $this->general_model->forgot_pwd_Email($email, $token);
              if($emailsend){
                $this->session->set_flashdata('success_message', "Your password has been updated, Try to Login with the new Password.");
                redirect('login','refresh');
              }
              else{
                $this->session->set_flashdata('error_message', 'Sorry, something went wrong. please try again');
                redirect('home', 'refresh');
              }
          }
        }
      }

  /*this function is used for password reset*/
  public function password_reset($token){
    if ($this->input->post()){
      $this->load->helper('form','url');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('pwd', 'Password', 'required');
      $this->form_validation->set_rules('c_pwd', 'Conform Password', 'required|matches[pwd]');
      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('error_message', "Password and confirm password is require");
        redirect('passwordreset/'.$token);
      }
      else{
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where('token',$token);
        $query = $this->db->get();
        $res = $query->result();
        $email = $res[0]->email;
        $username = $res[0]->username;
        $firstname = $res[0]->firstname;
        $t_id = $res[0]->id;

        if ($query->num_rows() == 0)
        {
          $this->session->set_flashdata('error_message', "Sorry!!! Invalid Request!");
          // redirect('login', 'refresh');
          redirect('home', 'refresh');
        }
        else
        {
          $data = array(
            'password' => md5($this->input->post('pwd')),
            'token' => ''
          );

          $where=$this->db->where('token', $token);
                 $this->db->update('user',$data);
          if($where){
            $emailsend = $this->general_model->change_pwd_Email($email, $firstname);
            if($emailsend){
              $sess_data = array('login' => TRUE, 'email' => $email, 'username' => $username, 'uid' => $t_id, 'firstname' => $firstname);
              $this->session->set_userdata($sess_data);

              $this->session->set_flashdata('success_message', "Your password has been reset, Try to Login with the new Password.");
              redirect('home', 'refresh');
            }
            else{
              $this->session->set_flashdata('error_message', 'Sorry, something went wrong. please try again');
              redirect('home', 'refresh');
            }
          }
        }
      }
    }
  }

  
  /*resendOtp function start*/
  /*This function used for resend otp*/
  public function resendOtp(){
    $email = $this->input->post('otp_email');
    $mobile = $this->input->post('otp_mobile');

    if($email != '' && $mobile != ''){

      $code = rand(1111,9999);

      $data = [
        'code' => $code
      ];

      $res = $this->general_model->update_verification_code($data, 'user', array('email' => $email));

      if($res) {
        
        $main_image = base_url()."front/images/nochats.png";

        $email_message =
        "<html>
            <head>
              <title>Verification Code</title>
            </head>
            <body>
            <div style=text-align:center;><img src=".$main_image." width=200 height=100 /></div>
            <p>Hi,</p>
            <p><b>Your verification code:</b><br/>".$code."</p>
            </body>
        </html>";

        $subject = 'Resend otp';

        sendMail($email, $subject, $email_message);

        $sms_message = urlencode("Your verification code: ".$code."");
        sendSms($mobile, $sms_message);

        echo 'success';
      }else{
        echo 'failed';
      }
    }else{
      echo 'failed';
    }
  }
  /*resendOtp function end*/


  /*user_forgot_password function start*/
  /*This function used for forgot password*/
  public function user_forgot_password(){

    $email = $this->input->post('recovery_email');

    if($email != ''){
      $this->db->select('email');
      $this->db->from('user');
      $this->db->where('email',$email);
      $count = $this->db->get()->row();
      $count = count($count);
      $count = (int)$count;
      if($count > 0){
        $this->load->helper('string', 6);
        $token= random_string('alnum', 12);

        $data = array(
            'token' => $token
        );

        $qry = $this->db->where('email', $email)
                        ->update('user', $data);

        $emailsend = $this->general_model->forgot_pwd_Email($email, $token);

        echo '1';

      }else{
        echo '2';
      }
    }else{
      echo '3';
    }  
  }
  /*user_forgot_password function end*/

}
