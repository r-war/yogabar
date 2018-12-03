<?php
//Ensure that a session exists (just in case)
if( !session_id() )
{
    session_start();
}

/**
 * Function to create and display error and success messages
 * @access public
 * @param string session name
 * @param string message
 * @param string display class
 * @return string message
 */
function setFlash( $name = '', $message = '', $class = 'success fadeout-message' )
{
    //We can only do something if the name isn't empty
    if( !empty( $name ) && !empty( $message ) )
    {       
        $_SESSION[$name] = $message;
        $_SESSION[$name.'_class'] = $class;        
    }
}
function getFlash($name)
{ 
    if( !empty( $_SESSION[$name] )  )
    {
        $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
        echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>'; 
        unset($_SESSION[$name]);
        unset($_SESSION[$name.'_class']);
    }
}

function redirect($page)
{
    if (!empty($page)){
        header("location:".$page);
        exit();
    }
}

function resize($filename, $width, $height) {        
    @define ("DIR_IMAGE", realpath(__DIR__ . '/..').'/web/');  

    if (!is_file(DIR_IMAGE . $filename)) {
        return;
    }
    //echo DIR_IMAGE;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);        
    $old_image = $filename;        
    $new_image =  utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . $width . 'x' . $height . '.' . $extension;                
    if (!is_file(DIR_IMAGE . $new_image) || (filectime(DIR_IMAGE . $old_image) > filectime(DIR_IMAGE . $new_image))) {
        $path = '';           
        $directories = explode('/', dirname(str_replace('../', '', $new_image)));
        foreach ($directories as $directory) {
            $path = $path . '/' . $directory;                

            if (!is_dir(DIR_IMAGE . $path)) {
                mkdir(DIR_IMAGE . $path, 0777);
            }
        }

        list($width_orig, $height_orig) = @getimagesize(DIR_IMAGE . $old_image);

        if ($width_orig != $width || $height_orig != $height) {
        //echo DIR_IMAGE . $new_image;
            $image = new Image(DIR_IMAGE . $old_image);
            $image->resize($width, $height);
            $image->save(DIR_IMAGE . $new_image);
        } else {                
            copy(DIR_IMAGE . $old_image, DIR_IMAGE . $new_image);
        }
    }      
    //echo $new_image. " dd "; 
    return $new_image;
}
function utf8_substr($string, $offset, $length = null) {
    if ($length === null) {
        return mb_substr($string, $offset, utf8_strlen($string));
    } else {
        return mb_substr($string, $offset, $length);
    }
}
function utf8_strrpos($string, $needle) {
    return iconv_strrpos($string, $needle, 'UTF-8');
}