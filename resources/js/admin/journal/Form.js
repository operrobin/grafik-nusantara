import AppForm from '../app-components/Form/AppForm';
import Multiselect from '../multi-select/Multiselect';

Vue.component('journal-form', {
    mixins: [AppForm],
    data: function() {
        return {
            tagsList: [],
            form: {
                content:  '' ,
                published_at:  '' ,
                tags:  [] ,
                title:  '' ,

            },
            mediaCollections: ['gallery']
        }
    },
    methods: {
        addTags(newTag) {
            this.tagsList.push(newTag)
            this.form.tags.push(newTag)
        }
    },
    mounted() {
        // this.form.tags = this.form.tags.split(',');
    }
});

export default {
    components: {
        Multiselect
    },
    data(){
        return {
            value: [],
            options: [
              { name: 'Vue.js', language: 'JavaScript' },
              { name: 'Adonis', language: 'JavaScript' },
              { name: 'Rails', language: 'Ruby' },
              { name: 'Sinatra', language: 'Ruby' },
              { name: 'Laravel', language: 'PHP' },
              { name: 'Phoenix', language: 'Elixir' }
            ]
        }
    }

}