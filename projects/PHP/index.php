
<!DOCTYPE html>

<html lang="cs">
      <head>
          <title>
              
             Jakub Pokorný ZT2A 
              
          </title>
          <meta charset="utf-8">
    </head>
    
    <body>
        <form action="index.php"> 
        <input name ="username" type ="text" value="ahoj">
        <input name ="password" type ="password" value="ahoj"><br>
                <hr>                
        
        <br>
        
        <input type ="radio" name="studuje" value = "1" > studuje<br>
        <input type ="radio" name="studuje" value = "0" checked>nestuduje<br><br>
        <hr> 
        <input type ="radio" name="pohlaví" value = "0" >muž<br>
        <input type ="radio" name="pohlaví" value = "1" >žena<br>
        <input type ="radio" name="pohlaví" value = "2" checked >buzerant<br>
        <input type ="radio" name="pohlaví" value = "3" >transvestita<br>
        <input type ="radio" name="pohlaví" value = "4" >neznámé<br>
        <input type ="radio" name="pohlaví" value = "5" >neurčité<br>
        <br><br>
        <input type ="checkbox"name="sites"value="facebook">FB
        <input type ="checkbox"name="sites"value="instagram">Ig
        <input type ="checkbox"name="sites"value="skype">Skype
        <br><br>        <br> <hr>

        <select name="vaha"> 
            <option value="0"selected>
            <option value="1">1-5</option>
            <option value="2">5-20</option>
            <option value="3">20-50</option>
            <option value="4">50-75</option>
                <option value="5">75-100</option>
                 <option value="6">100-125</option>
                  <option value="7">125-150</option>
                   <option value="8">150-175</option>
                    <option value="9">175-200</option>
                  
            
            
        </select>
        vaha
        
        <br><br>
        <hr>

        
        <input type ="file" name="foto">
        </form>


<br>


<?PHP>
 <?PHP echo date ('H:i:s');?>

<br><br><br>

<?PHP echo "Ahoj"?>

<br><br>
<?PHP $jmeno="Jakub Pokorný"; echo $jmeno; ?>

<br>
<?PHP

   $text ="
         Náš Matěj,
ten ho má chlupatej,
strká ho pod vrata,
dráždí s nim kuřata,
ku-řa-ta
Náš Matěj,
ten ho má chlupatej,
strká ho pod vrata,
dráždí s nim kuřata,
Tvá píča to je vokrasa,
strčim ti tam vocasa,
joo až si lehneš na kostrč,
tak si ho tam strč.
A když zaplatim velkou rundu,
tak ti budu lízat kundu,
když ti koupim pak dva rumy,
tak chci šoustat bez gumy,
Když tě pozvu na koňáček,
ukážeš mi poštěváček,
za párek a za pití,
tě budu šoustat do řit'i,
Tvá píča to je vokrasa,
strčim ti tam vocasa,
joo až si lehneš na kostrč,
tak si ho tam strč.
Když tě pozvu na bizoura,
zatáhneš mě za pind'oura,
když zaplatim dvě decky,
budu tě tahat za cecky,
Když dám na plac metr píva,
bude velká tvoje díra,
Za velkýho ferneta,
pak vykouříš mi kokota,
Tvá píča to je vokrasa,
strčim ti tam vocasa,
joo až si lehneš na kostrč,
tak mi ho tam strč.";
    $vulgaArr = array ("kokota","cecky" );
    
    var_dump(isValid($text, $vulgaArr));
    function isValid($text, $vulgarArr){
       foreach ($vulgarArr as $word){
           if (strpos ($text, $word)!==FALSE){
       return TRUE;
           }
       }
       
    }
    $text1 = "nejsou stejny jako knihovna";
        $text = explode(" ", $text);
    $vulgaArr = array("kokota" ,"cecky","hovna");
    
    var_dump(isValid1($text, $vulgarArr));
    
    function isValid1 ($text, $vulgarArr){
      foreach ($text as $slova){ 
        foreach ($vulgarArr as $word) { 
            if ($slova === $word){ 
                return True;
            }
        }
    }
     return false;    
    }

    
    /**
     *@
    
  
    
    
    
    
    
    
$a = 9;
echo"<br>";
$b = 4;

echo "<br>";

echo $a+$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a+=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a==$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a!=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a>$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a<$b;

echo "<br>";
$a = 9;
echo"<br>";
$b = 4;

echo $a||$b;

echo "<br>";
$a = 9;
echo"<br>";
$b = 4;

echo $a&$b;

echo "<br>";

$produkt = array ("nazev" => "rohlík slaný",
    "typ" => "slaný",
    "váha" => "15g",
    "množství" => "5");
var_dump ($produkt);
$produkt = array ("nazev" => "rohlíh originál",
    "typ" => "originál",
    "váha" => "18g",
    "množství" => "2");
var_dump ($produkt);
$produkt = array ("nazev" => "houska slaná",
    "typ" => "slaný",
    "váha" => "5g",
    "množství" => "3");
var_dump ($produkt);
$produkt = array ("nazev" => "houska originál",
    "typ" => "originál",
    "váha" => "50g",
    "množství" => "1");
var_dump ($produkt);
$produkt = array ("nazev" => "kroasant salný",
    "typ" => "slaný",
    "váha" => "58g",
    "množství" => "2");
var_dump ($produkt);
$produkt = array ("nazev" => "kroasant originál",
    "typ" => "originál",
    "váha" => "52g",
    "množství" => "1");
var_dump ($produkt);
$produkt = array ("nazev" => "kroasant sýrový",
    "typ" => "sýrový",
    "váha" => "500g",
    "množství" => "57");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč slaný",
    "typ" => "slaný",
    "váha" => "40g",
    "množství" => "3");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč sladký",
    "typ" => "sladký",
    "váha" => "70g",
    "množství" => "5");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč sýrový",
    "typ" => "sýrový",
    "váha" => "98g",
    "množství" => "12");
var_dump ($produkt);
$produkt = array ("nazev" => "jablečný koláč",
    "typ" => "jablečný",
    "váha" => "37g",
    "množství" => "98");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč hruškový",
    "typ" => "hurškový",
    "váha" => "53g",
    "množství" => "9");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč jahoda",
    "typ" => "jahodový",
    "váha" => "50g",
    "množství" => "9");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč borůvka",
    "typ" => "borůvkový",
    "váha" => "80g",
    "množství" => "4");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč s drobenkou",
    "typ" => "drobenkový",
    "váha" => "503g",
    "množství" => "7");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč bez drbenky",
    "typ" => "bezdrobenkový",
    "váha" => "578g",
    "množství" => "3");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč okurka",
    "typ" => "okurkový",
    "váha" => "590g",
    "množství" => "3");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč špenátový",
    "typ" => "špenátový",
    "váha" => "534g",
    "množství" => "1");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč mrkvový",
    "typ" => "mrkvový",
    "váha" => "520g",
    "množství" => "7");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč paprikový",
    "typ" => "paprikový",
    "váha" => "598g",
    "množství" => "5");
var_dump ($produkt);
$produkt = array ("nazev" => "koláč veganský",
    "typ" => "veganský",
    "váha" => "523g",
    "množství" => "9");
var_dump ($produkt);


echo currency (350.450, 'EUR', 2);
echo "<br>";
echo currency (48.200);

function currency ($price, $currency = "CZK" ,$precision = 2){
    $price = round($price, $precision);
    $price = number_format($price, $precision).",-".$currency;
    
    return $price;
  
}
echo "<br>";
$promena=pow(3,2);
echo $promena;
    $jmena= "PeTrA, pEtR, MARTINA, EveLiNa";
    var_dump($jmena);
    $jmena = str_replace("",",",$jmena);
    var_dump($jmena);
     $jmena = str_replace(",,",",",$jmena);
    var_dump($jmena);
     $jmena = str_replace("-",",",$jmena);
    var_dump($jmena);
      $jmena = str_replace(";",",",$jmena);
        $jmena = str_replace(",",",",$jmena);
         var_dump($jmena);
         $jmena = strtolower($jmena);
         var_dump($jmena);
         $jmena = ucwords ($jmena);
         var_dump($jmena);
         $jmena = explore(" ", $jmena);
         var_dump($jmena);
                 
         
    ?>
    </body>
</html>