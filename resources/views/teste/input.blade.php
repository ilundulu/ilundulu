<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript" src="javascript/functionsCatalogo.jsx"></script>
  <title>Criar Catalogo</title>
</head>

<body>
  <div id="div1">
<form id="formProd" method="post" action="/equipa">
  @csrf
  <div id="divForm"></div>
  <input type="button" onclick="AddInput()" value="Clique Aqui" />

  <input type="submit" name="submitCatalogo" value="Gerar PDF">
</form>
  </div>
  <div>
<br>
<br>


  </div>
</body>

</html>

<script>

var CountProds = 1;

function AddInput() {
  h = CountProds;
  var form = document.getElementById("divForm");
  var input = document.createElement("INPUT");
  var div = document.createElement("div");

  input.setAttribute("type", "text");
  input.setAttribute("id", "ref" + h);
  input.setAttribute("onkeyup", "lsRef()");
  input.setAttribute("name", "ref" + h);

  div.setAttribute("id", "lsRef" + h);
  div.setAttribute("name", "lsRef" + h);

  form.appendChild(input);
  CountProds++;

}
</script>