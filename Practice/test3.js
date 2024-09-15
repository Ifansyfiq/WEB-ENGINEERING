function compareNumbers(num1, num2) {
    if (num1 > num2) {
        alert("BIG");
    } else {
        alert("SMALL");
    }
}


var firstNumber = parseFloat(prompt("Enter the first number:"));
var secondNumber = parseFloat(prompt("Enter the second number:"));


if (!isNaN(firstNumber) && !isNaN(secondNumber)) {
    compareNumbers(firstNumber, secondNumber);
} else {
    alert("Please enter valid numbers");
}
