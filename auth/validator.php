<?php
    enum ValidationStatus
    {
        case Success;
        case Failure;
        case None;
    }
    
    class ValidationResult
    {
        public $Status;
        public $Message;

        function __construct($status, $message) 
        {
            $this->Status = $status;
            $this->Message = $message;
        }
    }

    function Validate()
    {
        if($_SERVER['REQUEST_METHOD'] != 'POST')
        {
            return new ValidationResult(ValidationStatus::None, '');
        }

        if(!isset($_POST['username']))
        {
            return new ValidationResult(ValidationStatus::Failure, 'Please enter a username.');
        }

        if(!isset($_POST['psw']) || 
            !isset($_POST['psw-repeat']))
        {
            return new ValidationResult(ValidationStatus::Failure, 'Please enter a password.');
        }

        $username = $_POST['username'];
        $password = $_POST['psw'];
        $password2 = $_POST['psw-repeat'];

        if($password !== $password2)
        {
            return new ValidationResult(ValidationStatus::Failure, 'Password did not match.');
        }

        return new ValidationResult(ValidationStatus::Success, 'Account created!');
    }
?>