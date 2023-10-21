<?php
// app/Traits/Validatable.php

namespace App\Traits;

trait Validatable
{
    public function validate(array $fields = [], array $additionalFields = [])
    {
        if (!isset($this->validate)) {
            throw new \Exception("The validate property is not defined in the model");
        }

        // If fields are not provided, take all from the request.
        if (empty($fields)) {
            $fields = request()->all();
        }

        // Merge fields with additionalFields
        $fields = array_merge($fields, $additionalFields);

        return request()->validate($this->validate);
    }

    public function create(array $attributes = [])
    {
        if (empty($attributes)) {
            $attributes = request()->all();
        }

        $instance = new static();
        foreach ($attributes as $key => $value) {
            if(in_array($key, $this->fillable))
            {
                $instance->$key = $value;
            }
        }
        $instance->save();
        
        return $instance;
    }

    public function validateAndCreate(array $fields = [], array $additionalFields = [])
    {
        $validatedData = $this->validate($fields, $additionalFields);
        
        return $this->create($validatedData);
    }
}
?>