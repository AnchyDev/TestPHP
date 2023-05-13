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

    function CanValidate()
    {
        return ($_SERVER['REQUEST_METHOD'] == 'POST');
    }

    function ValidateUsernamePasswordFields($username, $password, $passwordRepeat)
    {
        if(!isset($_POST[$username]))
        {
            return new ValidationResult(ValidationStatus::Failure, 'Please enter a username.');
        }

        if(!isset($_POST[$password]) || 
        !isset($_POST[$passwordRepeat]))
        {
            return new ValidationResult(ValidationStatus::Failure, 'Please enter a password.');
        }

        $p = $_POST[$password];
        $p2 = $_POST[$passwordRepeat];

        if($p !== $p2)
        {
            return new ValidationResult(ValidationStatus::Failure, 'Password did not match.');
        }

        return new ValidationResult(ValidationStatus::Success, 'Account created!');
    }
?>