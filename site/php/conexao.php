<?php

$conn = mysqli_connect(
	"127.0.0.1",
    "root", 
    "", 
    "Artem"
);

if(!$conn){
	echo "<script>alert('Conexao Recusada')</script>";
}
