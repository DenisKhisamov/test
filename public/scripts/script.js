$( document ).ready(function() {
    var input = document.getElementById("doc_numb");
     input.maxLength = 6;
});


$('input#fio').on('keypress', function (evt) {
    var character = String.fromCharCode(evt.keyCode);
	return isValid(character);
});
$('input#doc_numb').on('keypress', function (evt) {
    var character = String.fromCharCode(evt.keyCode);
	return isValid1(character);
});
function isValid(str) {
    return !/[~`!@#$%\^&*()+_=\-\[\]\\';,/{}|\\":<>\?,0-9]/g.test(str);
}

function isValid1(str) {
    return !/[~`!@#$%\^&*()+_=\-\[\]\\';,/{}|\\":<>\?,a-z]/g.test(str);
}