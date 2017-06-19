<?php
namespace Myapp\Controller;

use Myapp\Model\SampleModel;
use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SampleApp
{
    public function index(Request $request, Response $response)
    { if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($request, $response), false)) !== __AM_CONTINUE__) return $__am_res; 
        $model = new SampleModel();
        $request = array(
            'hoge' => $model->getStr()
        );
        $view = new Twig('/home/tomsato/codeception_test/src/Controller' . '/../View', array (
                'cache' => false,
            )
        );

        return $view->render($response, 'test.twig', $request);
    }
}

