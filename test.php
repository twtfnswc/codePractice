<?php
    //callback function
    function my_callback_function() {
    	echo "this is my_callback_function! \r\n";   	
    }

    //callback method_exists(object, method_name)od
    class MyClass {
        static function myCallbackMethod() {
        	echo "hello callback method!\n";       
        }
    }

    //simple callback
    call_user_func('my_callback_function');

    //simple method
    call_user_func(array('MyClass', 'myCallbackMethod'));

    //object method call
    $obj = new MyClass();
    call_user_func(array($obj, 'myCallbackMethod'));

    //call



 