<?php namespace App\Http\Requests\Admin\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreAccount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.account.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'acc_number' => ['required', 'string'],
            'account_type_id' => ['required', 'integer'],
            'account_status_id' => ['required', 'integer'],
            
        ];
    }
}
