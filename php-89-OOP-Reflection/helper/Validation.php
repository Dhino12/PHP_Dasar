<?php

class ValidationException extends Exception
{
}

class ValidationUtil
{

    // ! tanpa reflection !
    static public function validationRequest(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is null");
    
        } else if (!isset($request->password)) {
            throw new ValidationException("Password is null");
    
        } else if (trim($request->username) == "") {
            throw new Exception("Username is empty");
    
        } else if (trim($request->password) == "") {
            throw new Exception("Password is empty");
    
        } else {
            echo "Congrats your apps no error" . PHP_EOL;
            
        }
    }

    // dengan reflection
    static public function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC); // mengambil semua properti dengan tipe public

        foreach ($properties as  $value) {
            if (!$value->isInitialized($request)) {

                throw new ValidationException("$value->name is not set");
            }else if(is_null($value->getValue($request))){

                throw new ValidationException("$value->name is null");
            }else{

                echo "Congrats your apps is not null or error" . PHP_EOL;
            }
        }
    }

}