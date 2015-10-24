<?php
namespace AppBundle\Exception;

class ResourceNotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = 'Resource does not exist!';

}
