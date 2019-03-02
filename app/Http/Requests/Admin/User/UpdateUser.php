<?php namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.user.edit', $this->user);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'firstname' => ['sometimes', 'string'],
            'lastname' => ['sometimes', 'string'],
            'email_verified_at' => ['nullable', 'date'],
            'email' => ['sometimes', 'email', Rule::unique('users', 'email')->ignore($this->user->getKey(), $this->user->getKeyName()), 'string'],
            'password' => ['sometimes', 'confirmed', 'min:7', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/', 'string'],
            'phone' => ['sometimes', 'string'],
            'birthday' => ['sometimes', 'date'],
            'chapters_id' => ['sometimes', 'integer'],
            
        ];
    }
}
