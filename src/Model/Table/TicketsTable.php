<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Routing\Router; 
use Cake\Http\Session;

class TicketsTable extends Table
{
    public function initialize(array $config) : void {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
    }

    public function beforeFind( $event,  $query,  $options, $primary)
    {
        $session = Router::getRequest()->getSession(); 
        $query->andWhere(['Tickets.user_id IS' => $session->read('Auth.id')]);
    }   
}