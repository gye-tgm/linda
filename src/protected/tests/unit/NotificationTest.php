<?php
class NotificationTest extends CDbTestCase
{

    public function testTranslate()
    {
        // Arrange
        $nofi = new Notification();

        // Act
        $a = $nofi->translate(1,Notification::EVENT_DELETED);
        $b = $nofi->translate(1,Notification::EVENT_INVITATION);
        $c = $nofi->translate(1,Notification::EVENT_EDITED);
        $d = $nofi->translate(1,Notification::INVITATION_DELETED);
        $e = $nofi->translate(1,Notification::EVENT_READY);
        $f = $nofi->translate(1,Notification::EVENT_OK);
        

        // Assert
        $this->assertEquals("event1 has been deleted.", $a);
        $this->assertEquals("You've been invited to event1.", $b);
        $this->assertEquals("event1 has been edited. Check it out!", $c);
        $this->assertEquals("You are no longer invited to event1.", $d);
        $this->assertEquals("Every participant has made some proposals, you can fix the date for event1 now", $e);
        $this->assertEquals("The organizer has made fixed arrangemnts for event1", $f);
        
    }

}
?>