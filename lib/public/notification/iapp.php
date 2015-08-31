<?php
/**
 * @author Joas Schilling <nickvergessen@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP\Notification;

/**
 * Interface IApp
 *
 * @package OCP\Notification
 * @since 8.2.0
 */
interface IApp {
	/**
	 * @param INotification $notification
	 * @return null
	 * @throws \InvalidArgumentException When the notification is not valid
	 * @since 8.2.0
	 */
	public function notify(INotification $notification);

	/**
	 * @param string $objectType
	 * @param int $objectId
	 * @param string $user
	 * @return null
	 * @since 8.2.0
	 */
	public function markProcessed($objectType, $objectId, $user = '');

	/**
	 * @param string $user
	 * @param string $appId
	 * @return int
	 * @since 8.2.0
	 */
	public function getCount($user, $appId = '');
}
