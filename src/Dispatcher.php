<?php

namespace Foxital\Frogio;

use Foxital\Frogio\FamilleController;

class Dispatcher
{
  private string $page;

  public function __construct()
  {
  }

  /**
   * Get the value of page
   */
  public function getPage()
  {
    return $this->page;
  }

  /**
   * Set the value of page
   *
   * @return  self
   */
  public function setPage($page)
  {
    $this->page = $page;

    return $this;
  }

  public function dispatch()
  {
    if (isset($_GET['page'])) {
      switch ($_GET['page']) {
        case 'famille':
          $this->setPage('Famille.php');
          break;
        case 'utilisateur':
          $this->setPage('Utilisateur.php');
          break;
        case 'statut':
          $this->setPage('Statut.php');
          break;
        case 'collection':
          $this->setPage('Collection.php');
          break;
        case 'grenouille':
          $this->setPage('Grenouille.php');
          break;
        default;
          break;
      }
    } else {
      $this->setPage('index.php');
    }

    return $this->getPage();
  }
}
