<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('view_home');
	}

    public function send_mail()
    {
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'server2.aussiemike.com', 
            'smtp_port' => 587,
            'smtp_user' => 'support@bauchicompany.org',

            'smtp_pass' => '1support@',

            'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
            'mailtype' => 'text', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
                
        $this->email->to('info@bauchicompany.org');

        $this->email->from('support@bauchicompany.org','Bauchi Company');

        $this->email->subject($email);

        //$this->email->attach($data['fullFilePath']);
        $this->email->message($message);
        
        if ($this->email->send()) {
            $this->session->set_flashdata('message_no', 1);
            $this->session->set_flashdata('message', 'Email Sent Successfully');
        } else 
        {            
            $this->session->set_flashdata('message_no', 2);
            $this->session->set_flashdata('message', $this->email->print_debugger());
        }

        redirect('home');
    }    
}
