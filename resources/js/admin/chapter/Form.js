import AppForm from '../app-components/Form/AppForm';

Vue.component('chapter-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                chapter:  '' ,
                description:  '' ,
                
            }
        }
    }

});