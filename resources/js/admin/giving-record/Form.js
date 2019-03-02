import AppForm from '../app-components/Form/AppForm';

Vue.component('giving-record-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                amount:  '' ,
                currency:  '' ,
                giving_channel_id:  '' ,
                accounts_id:  '' ,
                
            }
        }
    }

});