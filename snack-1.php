// ! SNACK 1
function getCount(string $str): int {
  
    $counter = 0;

    $strings = str_split($str);

    foreach($string as $element){
        if($element === "a"  ||
           $element === "e"  ||
           $element === "i"  ||
           $element === "o"  ||
           $element === "u"  ||) {

        }
    }
  
    return 0; 
}

// ! SNACK 2
function spinWords(string $str): string {
  
  $stringArray = explode(" ", $str);
  
  foreach( $stringArray as $word){
    if($str >= 5)
  }
 
  return $str;
}

// ! SNACK 3
function moveZeros(array $items): array
{
  
  $zerosArray = [];
  $zeros = 0;
  
    foreach($items as $item){
      if(is_numeric($item) && floatval($item) == 0){
        $zeros++;
      } else {
        $zerosArray = $item[];
      }
      
      for($i = 0; $i < $zeros; $i++){
        $zerosArray[] = 0;
      }
      
      return $zerosArray;
    }
}