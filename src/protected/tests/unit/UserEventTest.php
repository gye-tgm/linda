<?php
class UserEventTest extends CDbTestCase{
	
	public $fixtures=array(
		'event' => 'Event',
		'user' => 'User'
	);
	
	public $usrevent;
	public $usr;
	public $eve;
	public $db;
	
	public function setUp(){
		parent::setUp();
		$this->db = Yii::app()->db;
		$this->usr = new User($this->user['user1']);
		$this->eve = new Event($this->event['event1']);
	}
	
	public function tearDown(){
		parent::tearDown();
		$this->usrevent->delete();
		$this->db->createCommand('delete from User_Event where userid=3')->query();
	}
	
    public function testCreateInvitation()
    {
    	$this->usrevent = new UserEvent();
    	$this->usrevent->userid=1;
    	$this->usrevent->eventid=1;
    	$this->usrevent->signedup=0;
    	
    	//createInvitation creates a new UserEvent Object that cant be deleted,
    	//because of that we cant repeat that test without an extra sql execution
        $this->assertTrue($this->usrevent->createInvitation(3,3));
        $this->usrevent->save();
    }
}
?>