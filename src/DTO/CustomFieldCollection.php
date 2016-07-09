<?php

namespace Vynyl\Campaigner\DTO;

class CustomFieldCollection implements ResourceCollection
{
    private $customFields = [];

    public function __construct()
    {

    }

    public function addCustomField(CustomField $customField)
    {
        $this->customFields[] = $customField;
    }

    public function getCustomFields()
    {
        return $this->customFields;
    }

    public function toArray()
    {
        $customFields = [];
        foreach ($this->customFields as $key => $customField) {
            $customFields[] = [
                'FieldName' => $customField->getFieldName(),
                'Value' => $customField->getValue(),
            ];
        }
        return $customFields;
    }
}
