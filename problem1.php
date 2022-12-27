<?php
// Function to print product
// array for a given array
// arr[] of size n
function productArray($arr, $n)
{
	if($n == 1) {
		echo "0";
		return;
	}
	$left = array();
	$right = array();
	$prod = array();
	$i; $j;
	$left[0] = 1;
	$right[$n - 1] = 1;
	
	for ($i = 1; $i < $n; $i++)
		$left[$i] = $arr[$i - 1] *$left[$i - 1];
	
	for ($j = $n - 2; $j >= 0; $j--)
		$right[$j] = $arr[$j + 1] *$right[$j + 1];
	
	for ($i = 0; $i < $n; $i++)
		$prod[$i] = $left[$i] *$right[$i];
	
	for ($i = 0; $i < $n; $i++)
		echo $prod[$i], " ";
	return;
}
$arr = array(1, 2, 3, 4, 5);
$n = count($arr);
echo "The product array is : \n";
productArray($arr, $n);
?>
<?php
$array1=[1,2,3,4,5];
$array2=[];
$size = sizeof($array1);

for($i=0;$i<$size;$i++){
		$n=1;
		for($j=0;$j<$size;$j++){
			if($i==$j){
				$n=$n*$array1[$j];
			}
			}
}
print_r($n);
?>
