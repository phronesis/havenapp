import AppForm from '../app-components/Form/AppForm';

Vue.component('user-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                firstname:  '' ,
                lastname:  '' ,
                email_verified_at:  '' ,
                email:  '' ,
                password:  '' ,
                phone:  '' ,
                birthday:  '' ,
                chapters_id:  '' ,
                
            }
        }
    }

});