var element = document.getElementById("cpf");
var maskOptions = {
  mask: "000.000.000-00",
};
var mask = IMask(element, maskOptions);

var element2 = document.getElementById("rg");
var maskOptions2 = {
  mask: [{ mask: "00.000.000-0" }, { mask: "00.000.000-00" }],
};
var mask2 = IMask(element2, maskOptions2);

var element3 = document.getElementById("cep");
var maskOptions3 = {
  mask: "00000-000",
};
var mask3 = IMask(element3, maskOptions3);

var element4 = document.getElementById("telefone");
var maskOptions4 = {
  mask: "+{55}(00)00000-0000",
};
var mask4 = IMask(element4, maskOptions4);
