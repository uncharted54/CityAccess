 <?php


function carte_ville($query){

$url = 'http://fr.wikipedia.org/w/api.php?format=json&action=parse&page='.$query;
$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "TestScript");
$c = curl_exec($ch);

$json = json_decode($c);

$content = $json->{'parse'}->{'text'}->{'*'}; 

$i=0;

for($r=1;$r<3;$r++){
$e=0;
while ($e==0) {

    if (($content[$i].$content[$i+1].$content[$i+2])=="<p>") {
        $e=1;
    }
    $i=$i+1;

}
$e=0;
while ($e==0) {

    if (($content[$i].$content[$i+1].$content[$i+2])=="</p") {
        $e=1;
    }
    $i=$i+1;

}
}

while ($e==0) {

    if (($content[$i].$content[$i+1].$content[$i+2])=="<p>") {
        $e=1;
    }
    $i=$i+1;

}

$text="";
$e=0;

while ($e==0) {

    if (($content[$i].$content[$i+1].$content[$i+2])=="yme") {
        $e=1;
    }

    $text=$text.$content[$i];
    $i=$i+1;

}

$text[0]="";
$text[1]="";
$text[2]="";

$text=$text.'my"></span></div></div></div></div></td></tr>';

return "coucou";
}

?>
