<?php 

class ActivityController{
    
    public function index()
    {
        View::load('activity');
    }

    public function ViewSubPage($id)
    {
        $data['id'] = $id;
        View::load('sub/activityView', $data);
    }
}

?>