<?php

namespace AppBundle\Form\Handler;

use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use FOS\UserBundle\Model\UserInterface;

class RegistrationFormHandler extends BaseHandler
{
    protected function onSuccess(UserInterface $user, $confirmation)
    {

        parent::onSuccess($user, $confirmation);

        // otherwise add your functionality here
    }
    // public function process($confirmation = false)
    // {
    //     $user = $this->userManager->createUser();
    //     $this->form->setData($user);

    //     if ('POST' == $this->request->getMethod()) {
    //         $this->form->bind($this->request);
    //         if ($this->form->isValid()) {

    //             // do your custom logic here

    //             return true;
    //         }
    //     }

    //     return false;
    // }
}