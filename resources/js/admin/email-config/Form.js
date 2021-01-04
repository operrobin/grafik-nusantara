import AppForm from '../app-components/Form/AppForm';

Vue.component('email-config-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                driver:  '' ,
                email:  '' ,
                encryption:  '' ,
                host:  '' ,
                password:  '' ,
                port:  '' ,
                username:  '' ,
                
            }
        }
    }

});