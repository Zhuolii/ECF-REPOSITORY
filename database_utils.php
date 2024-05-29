<?php 
   $servername = "localhost";
   $username = "david";
   $password = "757135929";
   $dbname = "arcadia";
   $conn = new mysqli($servername, $username, $password, $dbname);
//connexion
function establishDatabaseConnection(){
 
  global $conn, $servername, $username, $password, $dbname;

  
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
}
//deconnexion
function closeDatabaseConnection($conn){
    $conn->close();
}
//recuperation de la valeur souhaitée avec $conn  = $conn , $sql = la requete sql et $column_name le nom de la colonne souhaitée
// Fetching function
function fetchColumnData($conn,$sql,$column_name){
   // $sql = "SELECT * FROM habitat";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo  $row[$column_name]. "<br>";
        }
      } 
}
// fonction combinée
function executeQueryAndFetchColumn($conn,$sql,$column_name){
    establishDatabaseConnection();
    fetchColumnData($conn,$sql,$column_name);
    closeDatabaseConnection($conn);
}
?>