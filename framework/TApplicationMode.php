<?php
/**
 * TApplication enum file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link https://github.com/pradosoft/prado
 * @license https://github.com/pradosoft/prado/blob/master/LICENSE
 */

namespace Prado;

/**
 * TApplicationMode enum.
 * TApplicationMode defines the possible mode that an application can be set at by
 * setting {@link TApplication::setMode Mode}.
 * In particular, the following modes are defined
 * - Off: the application is not running. Any request to the application will obtain an error.
 * - Debug: the application is running in debug mode.
 * - Normal: the application is running in normal production mode.
 * - Performance: the application is running in performance mode.
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 3.0.4
 */
enum TApplicationMode: string
{
	case Off = 'Off';
	case Debug = 'Debug';
	case Normal = 'Normal';
	case Performance = 'Performance';
}
