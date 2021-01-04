<div class="form-group row align-items-center" :class="{'has-danger': errors.has('driver'), 'has-success': fields.driver && fields.driver.valid }">
    <label for="driver" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.driver') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.driver" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('driver'), 'form-control-success': fields.driver && fields.driver.valid}" id="driver" name="driver" placeholder="{{ trans('admin.email-config.columns.driver') }}">
        <div v-if="errors.has('driver')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('driver') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.email-config.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('encryption'), 'has-success': fields.encryption && fields.encryption.valid }">
    <label for="encryption" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.encryption') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.encryption" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('encryption'), 'form-control-success': fields.encryption && fields.encryption.valid}" id="encryption" name="encryption" placeholder="{{ trans('admin.email-config.columns.encryption') }}">
        <div v-if="errors.has('encryption')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('encryption') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('host'), 'has-success': fields.host && fields.host.valid }">
    <label for="host" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.host') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.host" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('host'), 'form-control-success': fields.host && fields.host.valid}" id="host" name="host" placeholder="{{ trans('admin.email-config.columns.host') }}">
        <div v-if="errors.has('host')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('host') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('password'), 'has-success': fields.password && fields.password.valid }">
    <label for="password" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.password') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="password" v-model="form.password" v-validate="'min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password'), 'form-control-success': fields.password && fields.password.valid}" id="password" name="password" placeholder="{{ trans('admin.email-config.columns.password') }}" ref="password">
        <div v-if="errors.has('password')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('password_confirmation'), 'has-success': fields.password_confirmation && fields.password_confirmation.valid }">
    <label for="password_confirmation" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.password_repeat') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="password" v-model="form.password_confirmation" v-validate="'confirmed:password|min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password_confirmation'), 'form-control-success': fields.password_confirmation && fields.password_confirmation.valid}" id="password_confirmation" name="password_confirmation" placeholder="{{ trans('admin.email-config.columns.password') }}" data-vv-as="password">
        <div v-if="errors.has('password_confirmation')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password_confirmation') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('port'), 'has-success': fields.port && fields.port.valid }">
    <label for="port" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.port') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.port" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('port'), 'form-control-success': fields.port && fields.port.valid}" id="port" name="port" placeholder="{{ trans('admin.email-config.columns.port') }}">
        <div v-if="errors.has('port')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('port') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('username'), 'has-success': fields.username && fields.username.valid }">
    <label for="username" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.email-config.columns.username') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.username" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('username'), 'form-control-success': fields.username && fields.username.valid}" id="username" name="username" placeholder="{{ trans('admin.email-config.columns.username') }}">
        <div v-if="errors.has('username')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('username') }}</div>
    </div>
</div>


