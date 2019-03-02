<?php namespace App\Http\Requests\Admin\GivingChannel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateGivingChannel extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.giving-channel.edit', $this->givingChannel);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'channel' => ['sometimes', 'string'],
            'active' => ['sometimes', 'boolean'],
            'description' => ['nullable', 'string'],
            
        ];
    }
}
