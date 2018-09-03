<!doctype html>
<html>
<head>
<title>Math Feed</title>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.

-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">
<!-- links to MathJax JavaScript library, un-comment to use math-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
   <script>
	MathJax.Hub.Config({
		tex2jax: {
		inlineMath: [['$','$'], ['\\(','\\)']],
		processEscapes: true,
		processClass: "mathjax",
        ignoreClass: "no-mathjax"
		}
	});//			MathJax.Hub.Typeset();//tell Mathjax to update the math
</script>
</head>
<body>
<?php
    echo file_get_contents("html/feed.txt");
?>

<style>

body{
    font-size:1.5em;
    font-family:helvetica;
}
</style>
</body>
</html>