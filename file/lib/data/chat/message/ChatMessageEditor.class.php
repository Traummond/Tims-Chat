<?php
namespace wcf\data\chat\message;

/**
 * Provides functions to edit chat messages.
 *
 * @author 	Tim Düsterhus
 * @copyright	2010-2011 Tim Düsterhus
 * @license	Creative Commons Attribution-NonCommercial-ShareAlike <http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode>
 * @package	timwolla.wcf.chat
 * @subpackage	data.chat.message
 */
class ChatMessageEditor extends \wcf\data\DatabaseObjectEditor {
	/**
	 * @see	wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	protected static $baseClass = '\wcf\data\chat\message\ChatMessage';
	
	
	/**
	 * Removes old messages.
	 *
	 * @param	integer	$lifetime	Delete messages older that this time.
	 * @return	integer			Number of deleted messages.
	 */
	public static function cleanup($lifetime = CHAT_ARCHIVETIME) {
		$sql = "SELECT 
				".static::getDatabaseIndexName()."
			FROM
				".static::getDatabaseTableName()."
			WHERE
					time < ?";
		$statement = \wcf\system\WCF::getDB()->prepareStatement($sql);
		$statement->execute(TIME_NOW - $lifetime);
		$objectIDs = array();
		while ($row = $statement->fetchArray()) {
			$objectIDs[] = $row[static::getDatabaseIndexName()];
		}
		return static::deleteAll($objectIDs);
	}
}