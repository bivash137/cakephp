<?php
class Mad extends AppModel {
	public $name = 'Mad';
	

	
	public $validate = array(
		'address'=>array(
			'Please enter your equipment.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),
		
		'space'=>array(
			'temperature value.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),
		
		'parked'=>array(
			'pressure value'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),

		'charges'=>array(
			'pressure value'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		)
	);
	

	
}
?>
