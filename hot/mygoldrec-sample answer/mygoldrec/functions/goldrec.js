window.onload = function () {
    // form
    const form = document.getElementById('form');

    // get GET request parameters
    const urlParams = new URLSearchParams(window.location.search);

    const cap = urlParams.get('cap');

    const gb1 = parseFloat(urlParams.get('gb1'));
    const gb5 =parseFloat(urlParams.get('gb5'));
    const gb10 = parseFloat(urlParams.get('gb10'));
    const gb20 = parseFloat(urlParams.get('gb20'));

    // replace form values
    form.cap.value = cap;

    let bal = parseFloat(cap);

    // begins calculation with the highest price first
    
    const gb20_qnty = Math.floor(cap / gb20);
    bal -= (gb20_qnty * gb20);

    const gb10_qnty = Math.floor(bal / gb10);
    bal -= (gb10_qnty * gb10);

    const gb5_qnty = Math.floor(bal / gb5);
    bal -= (gb5_qnty * gb5);

    const gb1_qnty = Math.floor(bal / gb1);
    bal -= (gb1_qnty * gb1);

    // display results
    form.gb1.value = gb1_qnty;
    form.gb5.value = gb5_qnty;
    form.gb10.value = gb10_qnty;
    form.gb20.value = gb20_qnty;

    form.bal.value = bal;
}