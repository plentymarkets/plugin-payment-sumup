<?php
/**
 * author: stefankirchner
 */
namespace SumUp\Controllers;


use SumUp\Helper\SumUpHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

class SettingsController extends Controller
{
	/**
	 * @param Request $request
	 * @return array
	 */
    public function configuration(Request $request, ConfigRepository $configRepository)
	{
		/**
		 * @var $mopRepository PaymentMethodRepositoryContract
		 */
		$mopRepository = pluginApp(PaymentMethodRepositoryContract::class);
		
		$mopModels = $mopRepository->allForPlugin(SumUpHelper::PLUGIN_NAME);
		foreach ($mopModels as $mopModel)
		{
			$response['methodsOfPayment'][] = $mopModel->toArray();
		}

		return $response;
	}
}