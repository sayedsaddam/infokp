<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();    
    }
    public function index(){
        $data['title'] = 'Home | InfoKP Solutions';
        $data['content'] = 'infokp';
        $this->load->view('components/template', $data);
    }
    // Profile page
    public function profile(){
        // $data['title'] = 'Profile | InfoKP Solutions';
        // $data['content'] = 'profile';
        $this->load->view('profile');
    }
    public function home_page(){
        $this->load->view('homepage');
    }
    public function landing_page(){
        $this->load->view('landing-page');
    }
    public function agency_page(){
        $this->load->view('agency-page');
    }
    public function resume(){
        $this->load->view('resume');
    }
    // Instagram layout by MDB Lab.
    public function instagram(){
        $this->load->view('mdb_instagram');
    }
    public function mail_sending(){
        $this->load->view('email_form');
    }
    // Send email function - Form action
    public function send_email(){
        if(isset($_POST['email'])) {
            $email_to = "atif.shahab@cloudways.com";
            $email_subject = "Summarized propose of the email";
            //Errors to show if there is a problem in form fields.
            function died($error) {
                echo "We are sorry that we can not procceed your request due to error(s).";
                echo "Below is the error(s) list <br /><br />";
                echo $error."<br /><br />";
                echo "Please go back and fix these errors.<br /><br />";
                die();
        }
        // validation expected data exists
        if(!isset($_POST['first_name']) ||
            !isset($_POST['last_name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['telephone']) ||
            !isset($_POST['comments'])) {
            died('We are sorry to proceed your request due to error within form entries.');   
        }
        $first_name = $_POST['first_name']; // required
        $last_name = $_POST['last_name']; // required
        $email_from = $_POST['email']; // required
        $telephone = $_POST['telephone']; // not required
        $comments = $_POST['comments']; // required
        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if(!preg_match($email_exp,$email_from)) {
            $error_message .= 'You entered an invalid email<br />';
        }
        $string_exp = "/^[A-Za-z .'-]+$/";
        if(!preg_match($string_exp,$first_name)) {
            $error_message .= 'Invalid first name<br />';
        }
        if(!preg_match($string_exp,$last_name)) {
            $error_message .= 'Invalid Last name<br />';
        }
        if(strlen($comments) < 2) {
            $error_message .= 'Invalid comments<br />';
        }
        if(strlen($error_message) > 0) {
            died($error_message);
        }
        $email_message = "Form details below.\n\n";
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }
        $email_message .= "First Name: ".clean_string($first_name)."\n";
        $email_message .= "Last Name: ".clean_string($last_name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Telephone: ".clean_string($telephone)."\n";
        $email_message .= "Comments: ".clean_string($comments)."\n";
        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);
            $this->session->set_flashdata('success', '<strong>Success!</strong> Thank you for contacting us. We will be in touch soon.');
            redirect('home/mail_sending');
        }
    }
}
