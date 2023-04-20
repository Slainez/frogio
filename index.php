<?php
  require_once('vendor/autoload.php');
  use Moi\Frogio\Dispatcher ;

  include_once('./views/template/head.php');
  include_once('./views/template/header.php');
?>
<main>
  <?php 
    $content = new Dispatcher();
    $return = $content->dispatch();
    include_once('./views/'.$return);
  ?>
</main>

<?php
  include_once('./views/template/footer.php');
?>

