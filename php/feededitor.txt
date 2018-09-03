 <!doctype html>
<html>
<head>
 <!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">

<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>
<title>Page Editor</title>
</head>
<body  class="no-mathjax">
<table id = "linktable">
    <tr>
        <td>
            <a href = "index.php" id = "indexlink">index.php</a>
        </td>
        <td>
            <a href = "editor.php">editor.php</a>
        </td>
    </tr>
</table>
<div id="maineditor" contenteditable="true" spellcheck="false"></div>
<script>
pathset = false;

editor = ace.edit("maineditor");
editor.setTheme("ace/theme/cobalt");
editor.getSession().setMode("ace/mode/html");
editor.getSession().setUseWrapMode(true);
editor.$blockScrolling = Infinity;

document.getElementById("maineditor").onkeyup = function(){
    data = encodeURIComponent(editor.getSession().getValue());
    var httpc = new XMLHttpRequest();
    var url = "filesaver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    httpc.send("data="+data+"&filename="+currentFile);//send text to filesaver.php
}


    currentFile = "html/feed.txt";
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            filedata = this.responseText;
            editor.setValue(filedata);
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + currentFile, true);
    httpc.send();



</script>
<style>
body{
    background-color:#404040;
    font-family:Helvetica;
}
#maineditor{
    position:absolute;
    top:4em;
    bottom:5px;
    right:5px;
    left:5px;
    font-size:22px;
}

#linktable{
    position:absolute;
    top:0px;
    left:0px;
    font-size:22px;
}
#linktable a{
    color:white;
}
#linktable td{
    padding-left:2em;
}

</style>

</body>
</html>