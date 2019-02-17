import AppForm from '../app-components/Form/AppForm';

Vue.component('account-type-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                type:  '' ,
                
            }
        }
    }

});