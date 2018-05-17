<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-mailchimp
 * @license BSD 3-Clause
 * @package yii2-mailchimp
 * @version 0.2.0
 */

namespace cinghie\mailchimp;

use Yii;

class Mailchimp extends \yii\base\Module
{
    public $controllerNamespace = 'cinghie\mailchimp\controllers';

    public $apiKey = "";
    public $showFirstname = true;
    public $showLastname = true;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->registerTranslations();
    }

    /**
     * Translating module message
     */
    public function registerTranslations()
    {
        if (!isset(Yii::$app->i18n->translations['mailchimp*']))
        {
            Yii::$app->i18n->translations['mailchimp*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => __DIR__ . '/messages',
            ];
        }
    }
}