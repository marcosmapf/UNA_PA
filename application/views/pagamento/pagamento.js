function run (f){/in/.test(document.readyState)?setTimeout(run,9,f):f()}
run(function(){
    var pacRadio = document.getElementById("pac-radio");
    var sedexRadio = document.getElementById("sedex-radio");

    pacRadio.addEventListener('click', function () {
        sedexRadio.checked = !(pacRadio.checked);
    });

    sedexRadio.addEventListener('click', function () {
        pacRadio.checked = !(sedexRadio.checked);   
    });    
});

