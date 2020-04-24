<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_google extends CI_Model {
    function __construct() {
        $this->tableName = 'user';
        $this->primaryKey = 'id';
    }
    
    /*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUser($userData = array()){
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            $this->db->where(array('email'=>$userData['email']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                //$userData['modified'] = date("Y-m-d H:i:s");
               $userData1['is_active']  = '1';
               $userData1['oauth_provider']  = 'google';
               $userData1['u_category']  = '1';
               $userData1['email']  = $userData['email'];
               $userData1['firstname']  = $userData['given_name'] ;
               
                $update = $this->db->update($this->tableName, $userData1, array('id' => $prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            }else{
                //insert user data
               // $userData['created']  = date("Y-m-d H:i:s");
               // $userData['modified'] = date("Y-m-d H:i:s");
               $userData1['is_active']  = '1';
               $userData1['oauth_provider']  = 'google';
               $userData1['u_category']  = '1';
               $userData1['email']  = $userData['email'];
               $userData1['firstname']  = $userData['given_name'] ;
                $insert = $this->db->insert($this->tableName, $userData1);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }
}