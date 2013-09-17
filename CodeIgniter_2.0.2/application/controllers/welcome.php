<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
            $this->load->model('welcomemodel');
            $this->load->model('panelmodel');
            $this->load->helper('captcha');
            $this->load->helper('cookie');
       }
	public function index()
	{	
		Welcome::ifLogin();
		$this->load->view('headerwelcome');
		$this->load->view('welcomeview');
		$this->load->view('howitworks');
		$this->load->view('footer');
	}
	public function ifLogin()
	{ 
		if(get_cookie('user'))
			$this->session->set_userdata('user',get_cookie('user')); 
		else if(get_cookie('modwiki'))
			$this->session->set_userdata('moderator',get_cookie('modwiki'));
		if ($this->session->userdata('moderator'))	
			header( 'Location: ../mpanel' ) ;
		else if($this->session->userdata('user'))
			header( 'Location: ../home' ) ;
	}
	public function logout()
	{
		$this->session->sess_destroy();
		delete_cookie("user");
		delete_cookie("modwiki");
		header( 'Location: ../' ) ;
	}
	public function captcha()
	{
		session_start();
		$x=rand(1,9);
		$y=rand(1,9);
		$z=rand(1,9);
		$vals = array(
		    'word' => ' '.$x.' '.$y.' '.$z.' ',
		    'img_path' => './static/images/captcha/',
		    'img_url' => '../static/images/captcha/',
		    'font_path' => './path/to/fonts/texb.ttf',
		    'img_width' => '130',
		    'img_height' => 30,
		    'expiration' => 7200
		    );

		$cap = create_captcha($vals);
		$_SESSION['time']=$cap['time'];
		$_SESSION['captcha']= $x.''.$y.''.$z;
		
		echo $cap['image'];
	}
	public function newUserQuestion()
	{
		session_start();
		$question=trim($_POST['userQuestion']);
		$email=trim($_POST['userEmail']);
		$notify=$_POST['userNotify'];
		$password=sha1($_POST['userPassword']);
		$captchaUserAnswer=$_POST['captchaUserAnswer'];
		
		if($_SESSION['captcha'] == $captchaUserAnswer)
		{
			$filename = './static/images/captcha/'.$_SESSION['time'].'.jpg';
			unlink($filename);
			$this->welcomemodel->signUp($email,$password);
			$this->panelmodel->questionSubmit($question,$email,$notify);
			$this->session->set_userdata('user',$email);	
			echo "success";
		}
		else echo "enter correct captcha";
	}
	
	public function userQuestion()
	{
		$question=trim($_POST['userQuestion']);
		$email=trim($_POST['userEmail']);
		$notify=$_POST['userNotify'];
		$password=sha1($_POST['userPassword']);
		
		$result=$this->welcomemodel->checkLogin($email,$password);
		if(!($result))
			echo "error";
		else if($result->designation=='0' || $result->designation=='1')
		{
			$this->panelmodel->questionSubmit($question,$email,$notify);
			$this->session->set_userdata('user',$email);
			echo "../home";
		}
	}
	
	public function login()
	{
		$email=trim($_POST['logEmail']);
		$password=sha1($_POST['logPassword']);
		$remember =$_POST['logRemember'];

		$result=$this->welcomemodel->checkLogin($email,$password);
		if(!($result))
			echo "error";
		else if($result->designation=='0')
		{
			$this->session->set_userdata('user',$email);
			if($remember=="true")
			{
				$cookie = array('name'=>'user','value'=>$email,'expire'=>'86400');
				$this->input->set_cookie($cookie);
			}
			echo "../home";
		}
		else if($result->designation=='1')
		{
			$this->session->set_userdata('moderator',$email);
			if($remember)
			{
				$cookie = array('name'=>'modwiki','value'=>$email,'expire'=>'432000');
				$this->input->set_cookie($cookie);
			}
			echo "../mpanel";
		}		
	}
	
	public function checkMail()
	{
		$email=trim($_POST['userEmail']);
		
		$result = $this->welcomemodel->checkEmail($email);
		echo $result;
	}
}
