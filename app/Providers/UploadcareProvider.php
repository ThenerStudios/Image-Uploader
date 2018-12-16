<?php

namespace AI\Providers;

use Silex\Application;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Api\BootableProviderInterface;

class UploadcareProvider implements ServiceProviderInterface, BootableProviderInterface
{
  public function register (Container $app)
  {
      $app['uploadcare'] = (function() use ($app)  {

          return new \Uploadcare\Api('3729c2cf5697fc3ed780', 'b7f7d4e77382996732f2');

      });
  }
  public function boot(Application $app)
  {
    //
  }
}
