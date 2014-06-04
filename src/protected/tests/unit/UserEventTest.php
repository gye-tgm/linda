<?php
class UserEventTest extends CDbTestCase
{

    public function testCreateInvitation()
    {
        // Arrange
        $invite = UserEvent()::model;

        // Act
        $this->assertTrue($invite->createInvitation(1,2,true));
    }
}
?>