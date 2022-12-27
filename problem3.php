<html>
<body>
<script>
let array =[1,2,3,4,5];
let array1 = [];
let size = array.length;

for(let i=0; i<size; i++){
	let n = 1;
	for(let j=0; j<size; j++)
	{
			if(i =j){
				n = n*array[j]
			}
	}
}
array1.push(n);
</script>
</body>
</html>