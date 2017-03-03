<?php
function colorservice_permission(){
  $items = array();
  $items['colorservice'] = array(
   'title' => t('colorservice permission'),
   'description' => t('colorservice permission'),
  );
  return $items;

}

function colorservice_menu(){
  $items = array();
  $items['admin/colorservice'] = array(
   'title' => t('colorservice permission'),
   'description' => t('colorservice permission'),
   'page callback' => 'colorservice_data',
   'access arguments' => array('colorservice permission'),
    );
  return $items;
}

function colorservice_data(){

  $output = render(drupal_get_form('colorservice_form'));
  return $output;
}

function colorservice_form($form, &$form_state){
   $form = array();
   $form['service_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Sevice Name'),
      '#required' => FALSE,
      '#attributes' => array('id' =>'Service name', 'placeholder' => 'Service name' ),
  );



  $form['service_sku'] = array(
  '#type' => 'textfield',
  '#title' => t('service sku'),
  '#required' => FALSE,
  '#attributes' => array('id' => 'Service sku','placeholder' => 'Service sku'),

    );

  $form['service_color'] = array(
  '#type' => 'textfield',
  '#title' => t('service color'),
  '#required' => FALSE,
  '#attributes' => array('id' => 'Service color' , 'placeholder' => 'Service color'),

    );

 $form['service_id'] = array(
  '#type' =>'textfield',
  '#title' => t('service color'),
  '#required' => FALSE,
  '#attributes' => array('id' => 'Service color' , 'placeholder' => 'Service color'),

  );

 


}



function colorservice_permission(){
 $items = array();
 $items['colorservice'] = array(
  'title' => t('colorservice'),
  'decription' => t('colorservice'),


  );
 return $items;

}

function colorservice_menu(){
 $items['admin/colorservice'] =  array(
  '#title' => t('colorservice permission'),
  '#description' => t('colorservice permission'),
  'page callback' => 'colorservice_data',
  'access argument' => array('colorservice_permission'),
);
 return $items;

}

function colorservice_data(){

  $output = render(drupal_get_form('colorservice_form')),
}
return $output;

 ?>