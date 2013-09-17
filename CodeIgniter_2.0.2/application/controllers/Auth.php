<?php 	
class Auth extends CI_Controller
{	
	public function __construct(){
            parent::__construct();
			$this->load->model('authmodel');
     }
	
	public function index(){
		$this->load->view('headerwelcome');
		
		$msg="";
		if(isset($_GET['msg'])){
			$msg=$_GET['msg'];
		}
		$content=$this->load->view('/Auth/Login',array('msg'=>$msg),true);
		$this->load->view('/Templates/noRightMarginTemplate',array('content'=>$content));
		$this->load->view('footer');
		
	}
    
	public function forgotPassword(){

		$this->load->view('headerwelcome');
		$content=$this->load->view('/Auth/forgotPassword',array(),true);
		$this->load->view('/Templates/noRightMarginTemplate',array('content'=>$content));
		$this->load->view('footer');
	}
    public function dofblogin(){
		$email =$_POST['email'];
		$name =$_POST['name'];
		$id=$_POST['id'];
		$searchQuery=$_POST['searchQuery'];
		if(count($this->authmodel->checkEmailforLogin($email))){
			if($searchQuery!=""){
				$this->load->model('panelmodel');
				$this->panelmodel->questionSubmit($searchQuery,$email,1);
			}
			$this->session->set_userdata('user',$email);
			echo"success";
		}else{
			$img="http://graph.facebook.com/".$id."/picture?type=normal";
			$this->authmodel->userRegistration($name,$img,$email,$id);
			if($searchQuery!=""){
				$this->load->model('panelmodel');
				$this->panelmodel->questionSubmit($searchQuery,$email,1);
			}
			$this->session->set_userdata('user',$email);
			echo "success";
		} 
				 
    }
	
	public function register($name="User",$email="",$id="",$searchQuery=""){
			$this->load->view('headerwelcome');
			$content=$this->load->view('/Auth/register',array('name'=>$name,'email'=>$email,'id'=>$id,'searchQuery'=>$searchQuery),true);
			$this->load->view('/Templates/noRightMarginTemplate',array('content'=>$content));
			$this->load->view('footer');								
	}
	
	public function userRegistration(){
		
			$name=$_POST['name'];
			$img=$_POST['img'];
			$email=$_POST['email'];
			$id=$_POST['fbId'];
			$searchQuery=$_POST['searchQuery'];
			$password=sha1($_POST['password']);

			$this->authmodel->userRegistration($name,$img,$email,$id);
			$this->load->model('welcomemodel');
			if(count($this->authmodel->checkEmailforLogin($email)) > 0 ){
				$this->authmodel->changePassword($email,$password);				
			}else{
				$this->welcomemodel->signUp($email, $password);
			}
			if($searchQuery!=""){
				$this->load->model('panelmodel');
				$this->panelmodel->questionSubmit($searchQuery,$email,1);
			}
			$this->session->set_userdata('user',$email);
			echo "success";
						
	}
	
	public function forgotPasswordMail(){
		
		/*$config['protocol']='smtp';  
		$config['smtp_host']='ssl://smtp.gmail.com';  
		$config['smtp_port']='465';  
		$config['smtp_timeout']='30';  
		$config['smtp_user']='wikikhoj@gmail.com';  
		$config['smtp_pass']='khoj*wiki.com';  
		$config['charset']='utf-8';  
		$config['newline']="\r\n"; 
		
		$config=array('protocol'=>'smtp',
					  'smtp_host'=>'sslv2://smtp.gmail.com',
					  'smtp_post'=>'587',
					'smtp_timeout'=>'15',
					'smtp_user'=>'wikikhoj@gmail.com',
					'smtp_pass'=>'khoj*wiki.com',
					'charset'=>'utf-8',
					'newline'=>'\r\n'		
		);
		
		$this->load->library('email',$config);
		$toEmail=$_POST['email'];
		
		$this->email->from('wikikhoj@gmail.com', 'Wikikhoj');
		$this->email->to($toEmail); 
		$this->email->subject('WikiKhoj-Password');
		$msg="Hello. You have requested for a password change at wikikhoj.com. Please follow the below link: /r/n /r/n
						http://wikikhoj.com/auth/changePassword?email=".$toEmail."&id=".$uniqueId;
		$this->email->message(msg);	
		 if (!$this->email->send())
      		echo $this->email->print_debugger();
  		else
      	echo "Your e-mail has been sent!";		
      	 
		
		$this->load->library('email');

		$this->email->from('rohit@wikikhoj.com', 'Rohit Agarwal');
		$this->email->to('rohitagarwal.2k6@gmail.com');
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		
		echo $this->email->print_debugger();
		*/
		
		$mail_to="rohitagarwal.2k6@gmail.com";
		$mail_subject="Hello";
		$mail_from="rohit@icircles.in";
		$mail_body_client="Test email sent by PHP's mail() function";
		mail($mail_to,$mail_subject,$mail_body_client,"FROM:". $mail_from);
 
	}
	
}
?>