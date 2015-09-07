<?php

return array(
  'slug'=>'pricing-1',
  'name'=>'Pricing 1',
  'groups'=> array('pricing'),
  'contents'=> array(
    array('name'=>'title', 'value'=>'Price'),
    array('name'=>'description', 'value'=>'Our pricing is awesome', 'type'=>'editor'),
    array('name'=>'featured', 'type'=>'switch'),
    array(
      'name'=>'packages',
      'type'=>'repeater',
      'fields'=> array(
        array(
          array('name'=>'title', 'value'=>'Silver'),
          array('name'=>'featured', 'type'=>'switch'),
          array('name'=>'price', 'value'=>'24'),
          array('name'=>'money', 'value'=>'$'),
          array('name'=>'features', 'value'=> array('one', 'two', 'three', 'four', 'five', 'six', 'seven')),
          array('name'=>'link', 'type'=>'link', 'url'=>'#', 'text'=>'sign up'),
        ),
        array(
          array('name'=>'title', 'value'=>'Gold'),
          array('name'=>'featured', 'type'=>'switch'),
          array('name'=>'price', 'value'=>'40'),
          array('name'=>'money', 'value'=>'$'),
          array('name'=>'features', 'value'=> array('one', 'two', 'three', 'four', 'five', 'six', 'seven')),
          array('name'=>'link', 'type'=>'link', 'url'=>'#', 'text'=>'sign up'),
        ),
        array(
          array('name'=>'title', 'value'=>'Platinum'),
          array('name'=>'featured', 'type'=>'switch'),
          array('name'=>'price', 'value'=>'60'),
          array('name'=>'money', 'value'=>'$'),
          array('name'=>'features', 'value'=> array('one', 'two', 'three', 'four', 'five', 'six', 'seven')),
          array('name'=>'link', 'type'=>'link', 'url'=>'#', 'text'=>'sign up'),
        ),
      )
    )
  )
);
