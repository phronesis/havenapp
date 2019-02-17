<?php namespace App\Http\Requests\Admin\GivingRecord;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateGivingRecord extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.giving-record.edit', $this->givingRecord);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'amount' => ['sometimes', 'numeric'],
            'currency' => ['nullable', 'string'],
            'giving_channel_id' => ['sometimes', 'integer'],
            'accounts_id' => ['sometimes', 'integer'],
            
        ];
    }
}
