function addRecipe() {
    const extra = document.getElementById('extra').value;
    const html = 'Extra: <b>' + extra + '</b> <br/>';
    document.getElementById('result').innerHTML = html;
}
 
function test() {
    var cboxes = document.getElementsByName('mailId[]');
    var len = cboxes.length;
    for (var i=0; i<len; i++) {
        alert(i + (cboxes[i].checked?' checked ':' unchecked ') + cboxes[i].value);
    }
}

document.getElementById('extra').addEventListener('keydown', addRecipe);
