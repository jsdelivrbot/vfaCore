<?php

namespace App\Http\Requests\API\Mappingproject;

use App\Models\Mappingproject\MappingProject;
use InfyOm\Generator\Request\APIRequest;

class UpdateMappingProjectAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return MappingProject::$rules;
    }
}
