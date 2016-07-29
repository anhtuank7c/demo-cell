<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Notifications cell
 */
class NotificationsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Notifications');
        $notifications = $this->Notifications->find('all', ['conditions' => ['is_read' => false]]);
        $this->set(compact('notifications'));
    }
}
