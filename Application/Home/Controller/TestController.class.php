<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {

    public function index(){
        echo "Home-Test-index";
    }

	public function test(){
        echo "Home-Test-test";
    }

}