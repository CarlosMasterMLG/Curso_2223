function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      const xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    xmlhttp.open("GET", "act1.php?nombre=" + str);
    xmlhttp.send();
    }
  }
  
