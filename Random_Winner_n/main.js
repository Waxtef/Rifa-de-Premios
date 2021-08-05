var participantes = ["Juan","Felipe","Jose","Roberto","Manuel","Lauraa","Maria","Eddy","Moises","Leila","Enrique"];
var apellidos = ["Ortiz","Constanzo","Manuel","Corte","Diaz","Lora","Callas","Duran","Duran","Parra","Ortiz","D.Cruz"]

document.getElementById("demo").onclick = function() {myFunction()};

function myFunction() {
    var nun = Math.floor(Math.random() * 12);
    //document.getElementById("random").innerHTML = nun;
    odoo.default({ el:'.js-odoo', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (participantes[nun]+'_'+apellidos[nun]), animationDelay: 1000 ,animationDuration:3000});
}
