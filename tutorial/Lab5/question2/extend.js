function output()
{
    var num1 = Number(document.getElementById("num1").value);
    var num2 = Number(document.getElementById("num2").value);
    var total = num1 + num2;

    document.getElementById("display").innerHTML = total;
}