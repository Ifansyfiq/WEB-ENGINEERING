const d = new Date();
document.getElementById("display").innerHTML = d.getDate();

const e = new Date();
document.getElementById("display").innerHTML = d.getDay();

function reccomend()
{
        var price_1g = parseInt(document.myform.price_1g.value);
        var  price_5g = parseInt(document.myform.price_5g.value);
        var price_10g = parseInt(document.myform.price_10g.value);
        var price_20g = parseInt(document.myform.price_20g.value);

        var cap_val=parseInt(document.myform.cap_val.value);

        if (cap_val<=0)
        {
            reccomend();
        }
        else if (cap_val>=20)
        {
            cap_val=  cap_val - price_20g;
            price_20g=price_20g+1;
            return cap_val;
        }
        else if (cap_val>=10)
        {
            cap_val= cap_val - price_10g;
            
            price_10g=price_10g+1;
            return cap_val;
        }
        else if (cap_val>=5)
        {
            cap_val= cap_val - price_5g;
           
            price_5g=price_5g+1;
            return cap_val;
        }
        else if (cap_val>=1)
        {
            cap_val= cap_val - price_1g;
          price_1g=price_1g+1;
            return cap_val;
        }
        else
        {
            reccomend();
        }
}