Vue.component('cp_css-fieldtype', {

    mixins: [Fieldtype],

    data() {
        return {
            codemirror: null       // The CodeMirror instance
        }
    },

    template: `
        <div class="css-fieldtype-wrapper">
            <span>CSS</span>
            <div class="editor" v-el:codemirror></div>
        </div>
    `,

    ready: function() {
        this.codemirror = window.CodeMirror(this.$els.codemirror, {
            value: this.data || this.config.default || '',
            mode: 'css',
            lineNumbers: true,
            lineWrapping: true,
            viewportMargin: Infinity
        });

        this.codemirror.on('change', (cm) => {
            this.data = cm.doc.getValue();
        });
    },

    methods: {

        focus() {
            this.codemirror.focus();
        }

    }
});