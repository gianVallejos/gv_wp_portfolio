<template>
    <VAbout :data=api_data :quoteImg=quoteImg :imgUserUrl = imgUserUrl />
</template>

<script>

    import VAbout from './VAbout.vue'
    import axios from 'axios'

    export default {
        mounted() {
            var _self = this
            axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/pages/' + this.id_page)
                .then( response => {
                    _self.api_data = response.data
                })
                .catch( e => {
                    console.log('Error: ' + e)
                })
        },
        data () { 
            return {
                id_page: 9,
                quoteImg: this.dirUrl + "/assets/images/about/quote-sign.svg",
                imgUserUrl: this.dirUrl + "/assets/images/user.png",
                api_data: []
            }
        },
        components: {
            VAbout
        },
        props: [
            'dirUrl'
        ]
    }
</script>