<?php
namespace OssStaticImage;

use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;

/**
 * Shopware-Plugin OssStaticImage.
 */
class OssStaticImage extends Plugin
{    
    public static function getSubscribedEvents()
    {
        return array(
            'Enlight_Controller_Action_PostDispatch_Frontend' => 'onPostDispatchFrontend',
        );
    }

    public function install(InstallContext $context){
        parent::install($context);
    }

    public function uninstall(UninstallContext $context){
        parent::uninstall($context);
    }

    public function activate(ActivateContext $context)
    {
        $context->scheduleClearCache( InstallContext::CACHE_LIST_ALL );
    }

    public function deactivate(DeactivateContext $context)
    {
        $context->scheduleClearCache( InstallContext::CACHE_LIST_ALL );
    }

    /**
     * @param \Enlight_Controller_ActionEventArgs $arguments
     */
    public function onPostDispatchFrontend(\Enlight_Controller_ActionEventArgs $arguments){
        /**@var $controller \Shopware_Controllers_Frontend_Checkout */
        $controller = $arguments->getSubject();
        $request  = $controller->Request();
        $response = $controller->Response();
        $actionName = $request->getActionName();
        $controllerName = $request->getControllerName();
        $view = $controller->View();

        $view->addTemplateDir( $this->getPath() . '/Resources/views/' );
    }
}
