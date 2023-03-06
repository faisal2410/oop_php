<?php
class Application {
    private $job_id;
    private $name;
    private $email;
    private $phone;   

    public function __construct( $job_id, $name, $email, $phone ) {
        $this->job_id = $job_id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;        
    }



    public function save() {
        // Save application to file or send email to employer
        return true; // Return true if successful, false otherwise
    }
}

