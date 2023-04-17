<?php
/**
 * TUserManager class
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link https://github.com/pradosoft/prado
 * @license https://github.com/pradosoft/prado/blob/master/LICENSE
 */

namespace Prado\Security;

/**
 * TUserManagerPasswordMode enum.
 * TUserManagerPasswordMode defines the enumerable type for the possible modes
 * that user passwords can be specified for a {@link TUserManager}.
 *
 * The following enumerable values are defined:
 * - Clear: the password is in plain text
 * - MD5: the password is recorded as the MD5 hash value of the original password
 * - SHA1: the password is recorded as the SHA1 hash value of the original password
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 3.0.4
 */
enum TUserManagerPasswordMode: string
{
	case Clear = 'Clear';
	case MD5 = 'MD5';
	case SHA1 = 'SHA1';
}
