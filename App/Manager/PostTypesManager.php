<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\CustomPostTypes\Member;
use App\CustomPostTypes\Sigma;

class PostTypesManager extends AbstractManager
{

	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
			Sigma::class,
		];

		add_action('init', [$this, 'register']);
	}
}