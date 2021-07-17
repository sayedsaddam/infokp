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
    // Half video template
    public function video_template(){
        $data['title'] = 'Video Template';
        $this->load->view('video_template', $data);
    }
    // Send email function - Form action
    public function send_email(){
        $single_email = 'hsaddam355@yahoo.com';
        $to = $single_email;
        $subject = 'Some subject';
        $message = 'Some message';
        $mail_subject = "$subject";
        $mail_message = "
        <html>
            <head>
                <title>Some Heading</title>
            </head>
            <body>
            ".$message."
            </body>
        </html>
        ";
        //dont forget to include content-type on header if your sending html
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: khan62482@gmail.com";
        if(mail($to,$mail_subject,$mail_message,$headers)){
            echo "Email was sent successfully.";
        }
    }
}
