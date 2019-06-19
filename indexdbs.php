<?PHP
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
} 
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
echo "In Here";
set_error_handler("customError");

 if( $_SERVER['HTTP_USER_AGENT']<>"NodePing")
{
$user_ip = getUserIP();

//echo $user_ip; 
    $hostname="182.50.133.90:3306";
	$username="db_usr51";
	$password="!M08ytda@";
	$dbname="db_sitetraffic";
	
	
	mysql_connect($hostname,$username, $password); or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db($dbname);
	
	$query = "INSERT INTO site_visitors(device_ip,user_agent,site_name) values ('" . $user_ip . "','"  . $_SERVER['HTTP_USER_AGENT'] ."','"SN"')";
	
	$result = mysql_query($query);
}	
//print @$_SERVER['HTTP_REFERER'];
//header("Location: http://www.synergynaturals.in/index.html"); /* Redirect browser */
//exit();
	/*if($result){
			echo "Name: Success<br/>";
		}*/
?>