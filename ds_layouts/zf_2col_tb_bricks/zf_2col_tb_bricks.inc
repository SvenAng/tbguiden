<?php
/**
 * @file
 * Definition of Zurb Foundation Two column bricks Display Suite layout.
 */

function ds_zf_2col_tb_bricks() {
  return array(
    'label' => t('TB Guiden Enkel'),
    'regions' => array(
      'rubrik' => t('Rubrik'),
      'kategori' => t('Kategori'),
      'innehall' => t('Content'),
      
    ),
    'image' => TRUE,
  );
}
