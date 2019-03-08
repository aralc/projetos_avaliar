
<?php

http_response_code(500);

function setInternalServerError($errno,$errstr = '',$errfile = '',$errline = '')
{
    
    
    if (!DEBUG)
    {
        echo '<h1>Ops temos algo de errado </h1><br> Ative o Debug no arquivo config.php ';
        exit;
    }
    
    echo '<h1> Error </h1>';
    
    switch ($errstr)
    {
        case E_USER_ERROR:
            echo '<strong>user error</stong>[ ' . $errno . ' ] ' . $errstr . ' [ file ] ' . $errfile . ' [ line ] ' . $errline . '<br>\n';
            break;
            
        case E_USER_WARNING:
            echo '<strong>user warning</stong>[ ' . $errno . ' ] ' . $errstr . ' [ file ] ' . $errfile . ' [ line ]' . $errline;
            break;
            
        case  E_USER_NOTICE:
            echo '<strong>user notice</stong>[ ' . $errno . ' ] ' . $errstr . ' [ file ] ' . $errfile . ' [ line ] ' . $errline;
            break;
            
        default:
            echo '<strong>desconhecido</stong>[ ' . $errno . ' ] ' . $errstr . ' [ file ] ' . $errfile . ' [ line ] ' . $errline;
            break;
    }
    
    
    //xdebug precisa
    echo '<ul>';
    foreach(debug_backtrace() as $error)
    {
        if (!empty($error['file']))
        {
            echo '<li>';
            echo $error['file'].':';
            echo $error['line'].':';
            echo '</li>';
        }
    }
    echo '</ul>';
    //xdebug precisa
    
    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');