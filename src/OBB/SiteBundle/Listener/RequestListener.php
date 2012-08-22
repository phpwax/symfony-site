<?php
namespace OBB\SiteBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RequestListener {
  
  public function on_kernel_request(GetResponseEvent $event) {
    $request = $event->getRequest();
    $default_controller = $request->attributes->get("_controller");
    $action = $request->attributes->get("_action");  
    if(!$action) return TRUE;
    
    $raw_controller = substr($default_controller, 0, (strrpos($default_controller, ":")+1));
    $mapped_controller = $raw_controller.$action;
    $request->attributes->set("_controller", $mapped_controller);
  }

  
}