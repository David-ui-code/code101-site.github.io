<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Nova mensagem. Jesus Code Site',
    'email_message' => 'Alguém contatou o seu site.',
    'success_redirect' => '',
    'sendIpAddress' => false,
    'email' => array(
    'from' => '',
    'to' => 'ric78x@hotmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>