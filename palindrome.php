$string = "Test";
$newString = '';
for($x=strlen($string)-1; $x>=0; $x--)
{
  $newString.= "$string[$x]" ;
}

echo 'IS PALINDROME: ';
echo ($string === $newString) ? 'YES' : 'NO';
