<?php
ACCESS(\_::$CONFIG->AdminAccess);
LIBRARY("Reflect");
if(RECEIVE(null,"POST")) echo \MiMFa\Library\Reflect::HandleForm(\_::$INFO);
else {
    $form = \MiMFa\Library\Reflect::GetForm(\_::$INFO);
    $form->Title = "Edit Information";
    $form->Id = "EditInformation";
    $form->Draw();
}
?>