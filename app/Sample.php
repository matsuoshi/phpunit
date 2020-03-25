<?php
namespace Sample;

class Sample
{
	/**
  	 * 指定された日付が、対象日付の範囲内かを調べる
  	 *
  	 * @param int $date 対象日付
  	 * @param int $from 開始日付
  	 * @param int $to 終了日付
  	 * @return bool
	 */
	public function isInDateRange($date, $from, $to)
	{
		if ($date < $from) {
			return false;
		}
		if ($date > $to) {
			return false;
		}

		return true;
	}
}