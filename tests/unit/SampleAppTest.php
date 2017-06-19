<?php
use Myapp\Controller\SampleApp;
use Myapp\Model\SampleModel;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Container;
use AspectMock\Test as test;

class SampleAppTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
        // 各テスト前に実行されるメソッド
    }

    protected function _after()
    {
        // 各テスト後に実行されるメソッド
        test::clean();
    }

    // tests
    public function testResponse()
    {
        // Modelクラスをモック化する
        test::double(new Myapp\Model\SampleModel(), [
            'getStr' => 'hoge'
        ]);

        $env = \Slim\Http\Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/hoge/test'
        ]);
        $request = Request::createFromEnvironment($env);
        $response = new Response();

        $hoge = new SampleApp(new Container());
        $result =  $hoge->index($request, $response, $args = []);

        $this->assertEquals(200, $result->getStatusCode());
    }
}
