<!DOCTYPE html>
<html>
<body>

<h2>JavaScript İfadeleri</h2>

<p>JavaScript kod blokları { ve } arasında yazılır.</p>

<button type="button" onclick="myFunction()">Click Me!</button>

<p id="demo1"></p>
<p id="demo2"></p>

<script>
function myFunction() {
  document.getElementById("demo1").innerHTML = "Merhaba!";
  document.getElementById("demo2").innerHTML = "Benim ismim Muhammmet Batuhan";
}
</script>

</body>
</html>