@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.account-type.actions.edit', ['name' => $accountType->id]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <account-type-form
                :action="'{{ $accountType->resource_url }}'"
                :data="{{ $accountType->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.account-type.actions.edit', ['name' => $accountType->id]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.account-type.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </account-type-form>

    </div>

</div>

@endsection