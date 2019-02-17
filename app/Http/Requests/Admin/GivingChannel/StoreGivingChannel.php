<?php namespace App\Http\Requests\Admin\GivingChannel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreGivingChannel extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.giving-channel.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'channel' => ['required', 'string'],
            'active' => ['required', 'boolean'],
            'description' => ['nullable', 'string'],
            
        ];
    }
}
