<div class="form-group row align-items-center" :class="{'has-danger': errors.has('chapter'), 'has-success': this.fields.chapter && this.fields.chapter.valid }">
    <label for="chapter" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.chapter.columns.chapter') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.chapter" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('chapter'), 'form-control-success': this.fields.chapter && this.fields.chapter.valid}" id="chapter" name="chapter" placeholder="{{ trans('admin.chapter.columns.chapter') }}">
        <div v-if="errors.has('chapter')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('chapter') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.chapter.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': this.fields.description && this.fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.chapter.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>


