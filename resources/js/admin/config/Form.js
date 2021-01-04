import AppForm from '../app-components/Form/AppForm';

Vue.component('config-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                type:  '' ,
                content:  '' ,

            },
            mediaWysiwygConfig: {
                autogrow: true,
                imageWidthModalEdit: true,
                btnsDef: {
                    image: {
                        dropdown: ['insertImage', 'upload', 'base64'],
                        ico: 'insertImage'
                    },
                    align: {
                        dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                        ico: 'justifyLeft'
                    }
                },
                btns: [
                    ['fontsize'],
                    ['formatting'],
                    ['strong', 'em', 'del'],
                    ['align'],
                    ['unorderedList', 'orderedList', 'table'],
                    ['foreColor', 'backColor'],
                    ['link', 'noembed', 'image'],
                    ['template'],
                    ['fullscreen', 'viewHTML'],
                ],
            }
        }
    }

});
