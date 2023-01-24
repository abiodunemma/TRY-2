<?php 


function create_unique_id(){
    $charecters =
    'jhehf24235645yfbhjggutgytgyugugyugcnvmhkgmcncjfkgdhrfjtgm';
    $charecters_length = strlen($charecters);
    $random = '';
    for($i = 0; $i < 20; $i++){
        $random .=$charecters[mt_rand(0, $charecters_length - 1)];
    }
    return $random;
}


if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
  }else{
    $user_id = '';
  }

  
function isValidImage($file){
  $form_errors = array();

  $part = explode(".", $file);

  $extension = end($part);

  switch(strtolower($extension)){
      case 'jpg':
      case'gif':
      case 'bmp':
      case 'png':
          return $form_errors;
  }
  $form_errors[] = $extension . "is not a valid image extension";
  return $form_errors;
}

function uploadAvatar($username){
  $isImageMoved= false;

  if($_FILES['avatar']['tmp_name']){

      //file in temp location
      $temp_file = $_FILES['avatar']['tmp_name'];

      $ds = DIRECTORY_SEPARATOR; //uploads//
      $avatar_name = $username.".jpg";

      $path = "img.".$ds.$avatar_name; //uploads/demo.jpg

      if(move_uploaded_file($temp_file, $path)){
          $isImageMoved = true;
      }
  }
  return $isImageMoved;
}


function isValidPOST($file){
  $form_errors = array();

  $part = explode(".", $file);

  $extension = end($part);

  switch(strtolower($extension)){
      case 'jpg':
      case'gif':
      case 'bmp':
      case 'png':
          return $form_errors;
  }
  $form_errors[] = $extension . "is not a valid image extension";
  return $form_errors;
}



function uploadPOST($username){
  $isImageMoved= false;

  if($_FILES['POST']['tmp_name']){

      //file in temp location
      $temp_file = $_FILES['POST']['tmp_name'];

      $ds = DIRECTORY_SEPARATOR; //uploads//
      $POST_name = $username.".jpg";

      $path = "img.".$ds.$POST_name; //uploads/demo.jpg

      if(move_uploaded_file($temp_file, $path)){
          $isImageMoved = true;
      }
  }
  return $isImageMoved;
}




?>