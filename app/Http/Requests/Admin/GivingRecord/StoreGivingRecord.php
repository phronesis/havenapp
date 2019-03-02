<?php namespace App\Http\Requests\Admin\GivingRecord;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreGivingRecord extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.giving-record.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'amount' => ['required', 'numeric'],
            'currency' => ['nullable', 'string'],
            'giving_channel_id' => ['required', 'integer'],
            'accounts_id' => ['required', 'integer'],
            
        ];
    }
}
