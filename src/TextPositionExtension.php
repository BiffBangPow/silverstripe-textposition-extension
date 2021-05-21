<?php

namespace BiffBangPow\Extension;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class TextPositionExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $db = [
        'TextPosition' => 'Enum("Left,Right", "Left")'
    ];

    /**
     * @var array
     */
    private static $defaults = [
        'TextPosition' => 'Left',
    ];

    /**
     * @param FieldList $fields
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Main', [
            DropdownField::create(
                'TextPosition',
                'Text Position',
                $this->owner->dbObject('TextPosition')->enumValues()
            )
        ]);
    }
}