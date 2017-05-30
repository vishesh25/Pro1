
<?php
$target_dir = "color:brown">"uploads/";
$target_file = $target_dir . basename("color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"name"]);
$uploadOk = "color:red">1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
"color:green">// Check if image file is a actual image or fake image
"color:mediumblue">if("color:mediumblue">isset("color:goldenrod">$_POST["color:brown">"submit"])) {
    $check = getimagesize("color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"tmp_name"]);
    "color:mediumblue">if($check !== false) {
        "color:mediumblue">echo "color:brown">"File is an image - " . $check["color:brown">"mime"] . "color:brown">".";
        $uploadOk = "color:red">1;
    } "color:mediumblue">else {
        "color:mediumblue">echo "color:brown">"File is not an image.";
        $uploadOk = "color:red">0;
    }
}
"color:green">// Check if file already exists
"color:mediumblue">if (file_exists($target_file)) {
    "color:mediumblue">echo "color:brown">"Sorry, file already exists.";
    $uploadOk = "color:red">0;
}
"color:red"> "color:green">// Check file size
"color:mediumblue">if ("color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"size"] > "color:red">500000) {
    "color:mediumblue">echo "color:brown">"Sorry, your file is too large.";
    $uploadOk = "color:red">0;
"color:red"> }
"color:green">// Allow certain file formats
"color:mediumblue">if($imageFileType != "color:brown">"jpg" && $imageFileType != "color:brown">"png" && $imageFileType != "color:brown">"jpeg"
&& $imageFileType != "color:brown">"gif" ) {
    "color:mediumblue">echo "color:brown">"Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = "color:red">0;
}
"color:green">// Check if $uploadOk is set to 0 by an error
"color:mediumblue">if "color:red"> ($uploadOk == "color:red">0) {
    "color:mediumblue">echo "color:brown">"Sorry, your file was not uploaded.";
"color:green">// if everything is ok, try to upload file
} "color:mediumblue">else {
    "color:mediumblue">if (move_uploaded_file("color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"tmp_name"], $target_file)) {
        "color:mediumblue">echo "color:brown">"The file ". basename( "color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"name"]). "color:brown">" has been uploaded.";
    } "color:mediumblue">else {
        "color:mediumblue">echo "color:brown">"Sorry, there was an error uploading your file.";
    "color:red"> }
}
"color:red">?>

