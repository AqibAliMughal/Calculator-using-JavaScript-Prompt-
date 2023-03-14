<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prompt - Calculator</title>
</head>
<body>
<script type="text/javascript" language="JavaScript">
	
document.write("<center>");

var numberOne = prompt('Enter Number One');
var numberTwo = prompt('Enter Number Two');
var operator = prompt('Perform operation' , "+")

document.write( "Number One: " +  numberOne);
document.write( "<br/>");
document.write( "Number Two: " +  numberTwo);
document.write( "<br/>");
document.write( "Operation performed: " + " ' " + operator + " ' ") ;
document.write( "<br/>"); 
document.write( "___________________") ;
document.write( "<br/>"); 


if( operator == '+')
{
	//Used Number()... (+) was concatenating the strings..
	document.write( "Addition is: " +  (Number(numberOne) + Number(numberTwo)));
}

else if( operator == '-')
{
	if( numberOne >=  numberTwo)
	{
	document.write( "Substraction is: " +  (numberOne - numberTwo));
	}
	else if( numberOne <=  numberTwo)
	{
	document.write( "Substraction is: " +  (numberTwo - numberOne) );
	}
}

else if( operator == '*')
{
	document.write( "Multiplication is: " +  (numberTwo * numberOne) );
}

else if( operator == '/')
{
	document.write( "Division is: " +  (numberOne / numberTwo) );
}

document.write("</center>");

</script>
</body>
</html>