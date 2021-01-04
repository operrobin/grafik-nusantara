import AppForm from '../app-components/Form/AppForm';

Vue.component('collection-type-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                description:  '' ,
                name:  '' ,
                
            }
        }
    }

});