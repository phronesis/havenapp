import AppForm from '../app-components/Form/AppForm';

Vue.component('giving-channel-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                channel:  '' ,
                active:  false ,
                description:  '' ,
                
            }
        }
    }

});