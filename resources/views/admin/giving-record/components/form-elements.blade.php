<div class="form-group row align-items-center" :class="{'has-danger': errors.has('amount'), 'has-success': this.fields.amount && this.fields.amount.valid }">
    <label for="amount" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.giving-record.columns.amount') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.amount" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('amount'), 'form-control-success': this.fields.amount && this.fields.amount.valid}" id="amount" name="amount" placeholder="{{ trans('admin.giving-record.columns.amount') }}">
        <div v-if="errors.has('amount')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('amount') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('currency'), 'has-success': this.fields.currency && this.fields.currency.valid }">
    <label for="currency" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.giving-record.columns.currency') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.currency" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('currency'), 'form-control-success': this.fields.currency && this.fields.currency.valid}" id="currency" name="currency" placeholder="{{ trans('admin.giving-record.columns.currency') }}">
        <div v-if="errors.has('currency')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('currency') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('giving_channel_id'), 'has-success': this.fields.giving_channel_id && this.fields.giving_channel_id.valid }">
    <label for="giving_channel_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.giving-record.columns.giving_channel_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.giving_channel_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('giving_channel_id'), 'form-control-success': this.fields.giving_channel_id && this.fields.giving_channel_id.valid}" id="giving_channel_id" name="giving_channel_id" placeholder="{{ trans('admin.giving-record.columns.giving_channel_id') }}">
        <div v-if="errors.has('giving_channel_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('giving_channel_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('accounts_id'), 'has-success': this.fields.accounts_id && this.fields.accounts_id.valid }">
    <label for="accounts_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.giving-record.columns.accounts_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.accounts_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('accounts_id'), 'form-control-success': this.fields.accounts_id && this.fields.accounts_id.valid}" id="accounts_id" name="accounts_id" placeholder="{{ trans('admin.giving-record.columns.accounts_id') }}">
        <div v-if="errors.has('accounts_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('accounts_id') }}</div>
    </div>
</div>


