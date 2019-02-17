<div class="form-group row align-items-center" :class="{'has-danger': errors.has('channel'), 'has-success': this.fields.channel && this.fields.channel.valid }">
    <label for="channel" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.giving-channel.columns.channel') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.channel" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('channel'), 'form-control-success': this.fields.channel && this.fields.channel.valid}" id="channel" name="channel" placeholder="{{ trans('admin.giving-channel.columns.channel') }}">
        <div v-if="errors.has('channel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('channel') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('active'), 'has-success': this.fields.active && this.fields.active.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="active" type="checkbox" v-model="form.active" v-validate="''" data-vv-name="active"  name="active_fake_element">
        <label class="form-check-label" for="active">
            {{ trans('admin.giving-channel.columns.active') }}
        </label>
        <input type="hidden" name="active" :value="form.active">
        <div v-if="errors.has('active')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('active') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.giving-channel.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': this.fields.description && this.fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.giving-channel.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>


