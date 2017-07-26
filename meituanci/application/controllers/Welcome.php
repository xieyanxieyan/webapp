<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("product_model");
        $this -> load -> model("order_model");
    }
	public function index()
	{  $results = $this->product_model->get_product();
//        foreach($results as $product){
//            $product->num = $product->num==null?0:$product->num;
//        }
//        foreach($results as $product){
//            $num=$this->order_model->get_count__by_product_id($product->product_id);
//            $product->num = $num->num == null?0:$num->num;
//        }
//        var_dump($results[0]->product_id);
		$this->load->view('index',array('result'=>$results));
	}
	public function detail($product_id)
    {
//        var_dump($product_id);
//        die();

        $row=$this->product_model->get_product_by_id($product_id);
        $userinfo = $this->session->userdata('userinfo');
        if(empty($userinfo)){

            $row->collect='收藏';
        }else{

            $user_id = $userinfo -> user_id;
            $collect = $this->product_model->get_collect($user_id,$product_id);
//            var_dump( $collect);
//            die();
            if($collect == null){
                //未收藏，显示收藏
                $row->collect = '收藏';
            }
            else{
                //已收藏，显示取消
                $row->collect = '取消';
            }
        }

	    $this->load->view('detail',array('row'=>$row));
    }
    public function success()
    {
        $this -> load -> view('success');
    }
}
