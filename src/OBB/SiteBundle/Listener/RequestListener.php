<?php
namespace OBB\SiteBundle\Listener;

use Symfony\Component\EventDispatcher\EventDispatcher;                             
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Response;

class RequestListener {
  public function onKernelRequest($event) {
    $request = $event->getRequest();
    $default_controller = $request->attributes->get("_controller");
    $action = $request->attributes->get("_action");

    $raw_controller = substr($default_controller, 0, (strrpos($default_controller, ":")+1));
    $mapped_controller = $raw_controller.$action;
    $request->attributes->set("_controller", $mapped_controller);
  }
}