@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.account.actions.edit', ['name' => $account->id]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <account-form
                :action="'{{ $account->resource_url }}'"
                :data="{{ $account->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.account.actions.edit', ['name' => $account->id]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.account.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </account-form>

    </div>

</div>

@endsection