function say_hi() {
    var extra = document.getElementById('extra').value;
 
    var html = 'Extra: <b>' + extra + '</b> ';
 
    document.getElementById('result').innerHTML = html;
}
 
document.getElementById('extra').addEventListener('keyup', say_hi);
