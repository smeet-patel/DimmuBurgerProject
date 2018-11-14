    var intervalID = window.setInterval(showSuggestion, 2000);

    // function myCallback() {
    //     console.log("hellw");
    // }

    function showSuggestion(){
        // AJAX REQUEST
        // create http object to create get request on certain page
        // status 200 means everything is ok.
        // ready state 4 means request is made and ready
        // var str = document.getElementById("orNum").innerHTML;

        var str = "String";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('output').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "status.php?+q=" + str, true);
        xmlhttp.send();                
    }