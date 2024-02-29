<php?
if (isset($_POST['cosultar'])) {
  $con = mysqli_connect('locahost','root','','3pp');
  $codigo = $_POST['codigo'];
  $query = "SELECT * FROM produto WHERE codigo='$codigo'";
  $return = mysqli_query($con,$query);
  if ($result) {
    while ($linha = mysqli_fetch_array($return)) {
      echo $linha['descricao'].'<br>'
      echo $linha['valor'].'<br> <hr>';
  }
}
?>
