<?php namespace App\Http\Requests\Admin\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateAccount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.account.edit', $this->account);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'acc_number' => ['sometimes', 'string'],
            'account_type_id' => ['sometimes', 'integer'],
            'account_status_id' => ['sometimes', 'integer'],
            
        ];
    }
}
