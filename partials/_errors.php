<?php
if(isset($errors) && count($errors) !=0){
  echo '<div class="isa_error">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
  foreach ($errors as $error) {
    echo $error.'<br/>';
  }
  echo '</div>';
}
