<?php
/**
 * Class for storing generic contact information
 *
 * @package    Vendo
 * @author     Jeremy Bush
 * @copyright  (c) 2010 Jeremy Bush
 * @license    http://github.com/zombor/Vendo/raw/master/LICENSE
 */
class Model_Contact extends AutoModeler_ORM
{
	protected $_table_name = 'contacts';

	protected $_data = array(
		'id' => '',
		'email' => '',
		'first_name' => '',
		'last_name' => '',
		'address_id' => '',
	);

	protected $_rules = array(
		'email' => array('not_empty', 'email'),
		'first_name' => array('not_empty'),
		'last_name' => array('not_empty'),
		'address_id' => array('not_empty', 'numeric'),
	);
}