<?php



$folder = __DIR__ ."/uploads";

if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, permissions:0755);
}


var_dump([
    "filesize" => ini_get(option:"upload_max_filesize"),
    "postsize" => ini_get(option:"post_max_size"),
]);

$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
var_dump($_FILES);


if($_FILES && !empty($_FILES['file']['name'])) {
    $fileUpload = $_FILES['file'];
    var_dump($_FILES);

    $allowebTypes = [ 
        "image/jpeg",
        "image/png",
        "application/pdf"
    ];
}elseif ( $getPost){ 
    echo "<p class='trigger warning'>Arquivo excede o limite permitido!</p>";
} else{
   if($_FILES){
       echo "<p class='trigger warning'>Arquivo não selecionado!</p>";
   }
}


include __DIR__ . "../src/form/form.php";
var_dump(scandir(__DIR__ ."/uploads"));