<div class="form-group row align-items-center" :class="{'has-danger': errors.has('category'), 'has-success': this.fields.category && this.fields.category.valid }">
    <label for="category" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.category.columns.category') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.category" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('category'), 'form-control-success': this.fields.category && this.fields.category.valid}" id="category" name="category" placeholder="{{ trans('admin.category.columns.category') }}">
        <div v-if="errors.has('category')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('category') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('active'), 'has-success': this.fields.active && this.fields.active.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="active" type="checkbox" v-model="form.active" v-validate="''" data-vv-name="active"  name="active_fake_element">
        <label class="form-check-label" for="active">
            {{ trans('admin.category.columns.active') }}
        </label>
        <input type="hidden" name="active" :value="form.active">
        <div v-if="errors.has('active')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('active') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('account_types_id'), 'has-success': this.fields.account_types_id && this.fields.account_types_id.valid }">
    <label for="account_types_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.category.columns.account_types_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.account_types_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('account_types_id'), 'form-control-success': this.fields.account_types_id && this.fields.account_types_id.valid}" id="account_types_id" name="account_types_id" placeholder="{{ trans('admin.category.columns.account_types_id') }}">
        <div v-if="errors.has('account_types_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('account_types_id') }}</div>
    </div>
</div>


