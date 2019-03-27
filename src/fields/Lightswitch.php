<?php
namespace verbb\feedme\fields;

use verbb\feedme\FeedMe;
use verbb\feedme\base\Field;
use verbb\feedme\base\FieldInterface;
use verbb\feedme\helpers\BaseHelper;

use Craft;

use Cake\Utility\Hash;

class Lightswitch extends Field implements FieldInterface
{
    // Properties
    // =========================================================================

    public static $name = 'Lightswitch';
    public static $class = 'craft\fields\Lightswitch';


    // Templates
    // =========================================================================

    public function getMappingTemplate()
    {
        return 'feed-me/_includes/fields/lightswitch';
    }


    // Public Methods
    // =========================================================================

    public function parseField()
    {
        $value = $this->fetchValue();
        
        return $this->parseValue($value);
    }

    public function parseValue($value)
    {
        return BaseHelper::parseBoolean($value);
    }

}