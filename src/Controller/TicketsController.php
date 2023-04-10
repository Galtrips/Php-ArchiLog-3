<?php

namespace App\Controller;

class TicketsController extends AppController {


    public function listing() {

        $tickets = $this->Tickets->find()->order(['created' => 'DESC'])->all();
        $this->set(compact('tickets'));
    }

    public function check($id) {
        $ticket = $this->Tickets->get($id);
        $ticket->done = true;
        if ($this->Tickets->save($ticket)) {
            $this->Flash->success('Le ticket a été classé comme fait !');
        } else {
            $this->Flash->error('Le ticket n\'a pas pu être classé comme fait ...');
        }
        
        return $this->redirect($this->referer());
    }

    public function uncheck($id) {
        $ticket = $this->Tickets->get($id);
        $ticket->done = false;
        if ($this->Tickets->save($ticket)) {
            $this->Flash->success('Le ticket a été enlevé de la liste des tâches faites');
        } else {
            $this->Flash->error('Le ticket n\'a pas pu être enlevé de la liste des tâches faites...');
        }
        
        return $this->redirect($this->referer());
    }


    public function create() {
       
        if (!empty($this->request->getData())) {
            $ticket = $this->Tickets->newEmptyEntity();
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            $ticket->user_id = $this->request->getSession()->read('Auth.id');
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success('Le ticket a bien été crée');
                return $this->redirect(['action' => 'listing']);
            } else {
                $this->Flash->error('Le ticket n\'a pas pu être crée');
            }
        }
        return;
    }

    public function edit($id) {
        $ticket = $this->Tickets->get($id);
        if (!empty($this->request->getData())) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success('Le ticket a bien été modifié');
                return $this->redirect(['action' => 'listing']);
            } else {
                $this->Flash->error('Le ticket n\'a pas pu être modifié');
            }
    
        }
       
        $this->set(compact('ticket'));   
    }

    public function remove($id) {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success('Le ticket a bien été supprimé');
        } else {
            $this->Flash->error('Le ticket n\'a pas pu être supprimé');
        }

        return $this->redirect($this->referer());
    }

    
}