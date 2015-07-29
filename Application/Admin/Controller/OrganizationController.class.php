<?php
namespace Admin\Controller;
use Think\Controller;
class OrganizationController extends Controller
{
    private $topBar = array(array('active'=>"",'url'=>"#",   'value'=>"用户"),
        array('active'=>"",'url'=>"#",   'value'=>"站点"),
        array('active'=>"",'url'=>"#",   'value'=>"工作站"),
        array('active'=>"",'url'=>"#",   'value'=>"工作站 分组"));

    function __construct()
    {
        parent::__construct();
        $this->topBar[0]['url'] = U('Organization/user');
        $this->topBar[1]['url'] = U('Organization/site');
        $this->topBar[2]['url'] = U('Organization/workstation');
        $this->topBar[3]['url'] = U('Organization/wsGroups');
    }

    public function user(){
        $this->topBar[0]['active'] = "active";
        $this->assign('topBar',$this->topBar);

        $Page = new \Think\Page(10,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);
        $this->display();
    }

    public function site()
    {
        $this->topBar[1]['active'] = "active";
        $this->assign('topBar', $this->topBar);

        $this->display();
    }

    public function workstation()
    {
        $this->topBar[2]['active'] = "active";
        $this->assign('topBar', $this->topBar);

        $this->display();
    }

    public function wsGroups()
    {
        $this->topBar[3]['active'] = "active";
        $this->assign('topBar', $this->topBar);

        $this->display();
    }
}