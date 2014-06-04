<?php
class NotificationTest extends CTestCase
{
	public function testApprove()
	{
		// insert a comment in pending status
		$comment=new Comment;
		$comment->text = "Comment 1";
		$comment->time = date('Y-m-d H:i:s'); 
	}
}
