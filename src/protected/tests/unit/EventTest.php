<?php
class EventTest extends CDbTestCase
{

    public function testCalcProgress()
    {
        // Arrange
        $event = Event::model()->findByPk(1); 

        // Act
        $a = $event->calcProgress($event->id);

        // Assert
        $this->assertEquals(0, $a);
        
    }
}
?>