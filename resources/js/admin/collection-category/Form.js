import AppForm from '../app-components/Form/AppForm';

Vue.component('collection-category-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                description:  '' ,
                name:  '' ,
                type_id:  '' ,
                
            }
        }
    }

});