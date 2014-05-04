<?php
$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");

if( $iPod || $iPhone || $iPad ){
    	header('Location: https://itunes.apple.com/us/app/id737503893?mt=8') ;
}else if($Android){
        header('Location: https://play.google.com/store/apps/details?id=com.vidgeo.vidgeo');
}
else if(true)
{
        header('Location: http://www.vidgeo.co/'); // <-everyone else
}
?> 
