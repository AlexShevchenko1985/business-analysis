<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\CustomPostTypes\Project;
use App\CustomPostTypes\Services;

class PostTypesManager extends AbstractManager
{

	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
            Project::class,
            Services::class,
		];

		add_action('init', [$this, 'register']);
	}
}