<br /><ul class="nav nav-list">	<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(			'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'			'buttons'=>array(					array('label'=>'Create New', 'items'=>array(							array('label'=>'Journal', 'url'=>Yii::app()->createUrl('/m2/uJournal/create')),							array('label'=>'Cash Bank', 'url'=>Yii::app()->createUrl('/m2/mCashbank/create')),							'---',							array('label'=>'Inventory', 'url'=>Yii::app()->createUrl('/m2/bPorderInventory/create')),							array('label'=>'General', 'url'=>Yii::app()->createUrl('/m2/bPorderGeneral/create')),					)),			),	)); ?></ul><br />