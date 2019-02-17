import AppForm from '../app-components/Form/AppForm';

Vue.component('account-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                acc_number:  '' ,
                account_type_id:  '' ,
                account_status_id:  '' ,
                
            }
        }
    }

});