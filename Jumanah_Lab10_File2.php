<!DOCTYPE html>
<html>

<head>
    <title>Jumanah 1808740 Lab 10</title>
</head>
<body> 
    
<p id="demo"></p>

<script>
    function load(){
        var xmlhttp = new XMLHttpRequest();   
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {        
        var myObj = JSON.parse(this.responseText);
        console.log(myObj);
    }
    xmlhttp.open("GET", "Jumanah_Lab10.php", true);
    xmlhttp.send();
};

}

window.addEventListener('load',load(),false);
</script>

</body>
</html>