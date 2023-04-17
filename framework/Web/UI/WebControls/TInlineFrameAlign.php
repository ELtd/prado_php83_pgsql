<?php
/**
 * TInlineFrame class file.
 *
 * @author Jason Ragsdale <jrags@jasrags.net>
 * @author Harry Pottash <hpottash@gmail.com>
 * @link https://github.com/pradosoft/prado
 * @license https://github.com/pradosoft/prado/blob/master/LICENSE
 */

namespace Prado\Web\UI\WebControls;

/**
 * TInlineFrameAlign enum.
 * TInlineFrameAlign defines the enumerable type for the possible alignments
 * that the content in a {@link TInlineFrame} could be.
 *
 * The following enumerable values are defined:
 * - NotSet: the alignment is not specified.
 * - Left: left aligned
 * - Right: right aligned
 * - Top: top aligned
 * - Middle: middle aligned
 * - Bottom: bottom aligned
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 3.0.4
 * @deprecated obsolete since html5
 */
enum TInlineFrameAlign: string
{
	case NotSet = 'NotSet';
	case Left = 'Left';
	case Right = 'Right';
	case Top = 'Top';
	case Middle = 'Middle';
	case Bottom = 'Bottom';
}
