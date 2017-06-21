<?php  
require_once ("lib/nusoap.php");  
$client = new soapclient ( 'http://localhost/nusoapService.php?wsdl',true);  
$client->soap_defencoding = 'UTF-8';  
$client->decode_utf8 = false;  
$client->xml_encoding = 'UTF-8';  
//生成proxy类    
$proxy = $client->getProxy();    
//调用远程函数    
$sq = $proxy->GetTestStr('Bruce Lee');   
if (!$err=$proxy->getError()) {    
print_r($sq);    
} else {    
print "ERROR: $err";    
}    
    
print 'REQUEST:＜xmp＞'.$p->request.'＜/xmp＞';    
print 'RESPONSE:＜xmp＞'.str_replace('><', ">\n<", $p->response).'＜/xmp＞';    
?> 