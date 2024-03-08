<?php
include("conectare.php");
//am luat din post valorile si le-am salvat in variabile
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];

//am verificat daca toate campurile sunt completate
if ($nume && $prenume && $email && $mesaj) {
    //am creat un query 
    $query = "INSERT INTO contact(nume,prenume,email,mesaj) VALUES ('$nume','$prenume','$email','$mesaj')";
//am rulat query-ul si am verificat daca s-a efectuat cu succes sau nu
    if (!mysqli_query($conectareBD, $query)) {
        die('Error: ' . mysqli_error($conectareBD));
    }
    echo 'Comentariul tau a fost adaugat cu succes!';
}
else {
    echo 'Nu ai completat toate campurile!';
}
?>