<template>
<div>
    <VPortfolio :items=api_data />
</div>
</template>

<script>

import VPortfolio from './VPortfolio.vue'
import axios from 'axios'

export default {
    mounted() {
        var _self = this
        axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/portafolio')
            .then( response => {
                _self.api_data = response.data
            })
            .catch( e => {
                console.log('Error: ' + e)
            })
    },
    data () {
        return {
            api_data: []
        }
    },
    components: {
        VPortfolio
    },
    props: [
        'dirUrl'
    ]
}
</script>
