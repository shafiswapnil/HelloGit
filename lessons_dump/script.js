var numbers = [1,2,3,4,5,6,7];

function sum(n) {
	var summation = 0;

	// do the math
	summation = n.reduce(function (o,n) { return o + n ; });
	
	return summation;
}

console.log( sum ( numbers ) );
