<div class="form-group row align-items-center" :class="{'has-danger': errors.has('acc_number'), 'has-success': this.fields.acc_number && this.fields.acc_number.valid }">
    <label for="acc_number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.account.columns.acc_number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.acc_number" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('acc_number'), 'form-control-success': this.fields.acc_number && this.fields.acc_number.valid}" id="acc_number" name="acc_number" placeholder="{{ trans('admin.account.columns.acc_number') }}">
        <div v-if="errors.has('acc_number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('acc_number') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('account_type_id'), 'has-success': this.fields.account_type_id && this.fields.account_type_id.valid }">
    <label for="account_type_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.account.columns.account_type_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.account_type_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('account_type_id'), 'form-control-success': this.fields.account_type_id && this.fields.account_type_id.valid}" id="account_type_id" name="account_type_id" placeholder="{{ trans('admin.account.columns.account_type_id') }}">
        <div v-if="errors.has('account_type_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('account_type_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('account_status_id'), 'has-success': this.fields.account_status_id && this.fields.account_status_id.valid }">
    <label for="account_status_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.account.columns.account_status_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.account_status_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('account_status_id'), 'form-control-success': this.fields.account_status_id && this.fields.account_status_id.valid}" id="account_status_id" name="account_status_id" placeholder="{{ trans('admin.account.columns.account_status_id') }}">
        <div v-if="errors.has('account_status_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('account_status_id') }}</div>
    </div>
</div>


