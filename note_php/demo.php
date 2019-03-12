<?php



define('TIPI','Thinking In PHP Internal');
if(defined('TIPI'))
{
  echo 'yes';
}else{
  echo 'no';

}

function testArray(){
  $array=array(1,2,3,4,5);
  foreach ($array as  $value) {
    echo "array I:";
    echo $value;
    // code...
  }



};



$var =constant("TIPI");

$int_var=123;
$int0x=0x123;
$float_int=12.323;
echo $int_var;
echo $int0x;
echo $float_int;

$x=4;
function testVariable(){
  $x=0;
  print " \$x inside function is $x.";
}

testVariable();
testString();

testAgent();

function testString(){

$string_1="this is a string in double quotes";

$string_2="string 2";
echo $string_1."    ".$string_2." lenth is:".strlen($string_1);




};

function testAgent(){
  $viewer = getenv( "HTTP_USER_AGENT" );
       $browser = "An unidentified browser";
       if( preg_match( "/MSIE/i", "$viewer" ) )
       {
          $browser = "Internet Explorer";
       }
       else if(  preg_match( "/Netscape/i", "$viewer" ) )
       {
          $browser = "Netscape";
       }
       else if(  preg_match( "/Mozilla/i", "$viewer" ) )
       {
          $browser = "Mozilla";
       }
       $platform = "An unidentified OS!";
       if( preg_match( "/Windows/i", "$viewer" ) )
       {
          $platform = "Windows!";
       }
       else if ( preg_match( "/Linux/i", "$viewer" ) )
       {
          $platform = "Linux!";
       }
       echo("You are using $browser on $platform");
}





?>
