import AppForm from '../app-components/Form/AppForm';

Vue.component('collection-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                category_id:  '' ,
                created_when:  '' ,
                created_who:  '' ,
                description:  '' ,
                name:  '' ,
            },
            mediaCollections: ['gallery']
        }
    }

});
