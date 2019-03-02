@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.chapter.actions.edit', ['name' => $chapter->id]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <chapter-form
                :action="'{{ $chapter->resource_url }}'"
                :data="{{ $chapter->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.chapter.actions.edit', ['name' => $chapter->id]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.chapter.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </chapter-form>

    </div>

</div>

@endsection