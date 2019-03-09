<template>
    <VPortfolioDetail :data = this.api_data :related = this.related_portafolio />
</template>

<script>

import VPortfolioDetail from './VPortfolioDetail.vue'
import axios from 'axios'

export default {
    mounted() {
        var _self = this
        axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/portafolio/' + _self.id)
            .then( response => {
                _self.api_data = response.data
            })
            .catch( e => {
                console.log('Error: ' + e)
            })

        axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/portafolio/?exclude=' + _self.id + '&per_page=4')
            .then( response => {
                _self.related_portafolio = response.data
            })
            .catch( e => {
                console.log('Error: ' + e)
            })
    },
    data () {
        return {
            api_data: [],
            related_portafolio: []
        }
    },
    props: [
        'id'
    ],
    components: {
        VPortfolioDetail
    }
}
</script>