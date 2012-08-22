<?php

namespace OBB\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;



class PageController extends Controller {


    public function indexAction() {
      $name ="test";
      return $this->render('OBBSiteBundle:Page:index.html.php', array('name' => $name));
    }
    
    public function testAction() {
      return true;
    }


}
