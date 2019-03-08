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
            api_data: [],
            items: [
                    {
                        id: 1, 
                        url: '#', 
                        logoImg: this.dirUrl + '/assets/images/portfolio/logo-01.png', 
                        img: this.dirUrl + '/assets/images/portfolio/portfolio-01.png'
                    },
                    {
                        id: 2, 
                        url: '#', 
                        logoImg: this.dirUrl + '/assets/images/portfolio/logo-02.png', 
                        img: this.dirUrl + '/assets/images/portfolio/portfolio-02.png'
                    },
                    {
                        id: 3, 
                        url: '#', 
                        logoImg: this.dirUrl + '/assets/images/portfolio/logo-03.png', 
                        img: this.dirUrl + '/assets/images/portfolio/portfolio-03.png'
                    },
                    {
                        id: 4, 
                        url: '#', 
                        logoImg: this.dirUrl + '/assets/images/portfolio/logo-04.png', 
                        img: this.dirUrl + '/assets/images/portfolio/portfolio-04.png'
                    },
                    {
                        id: 5, 
                        url: '#', 
                        logoImg: this.dirUrl + '/assets/images/portfolio/logo-05.png', 
                        img: this.dirUrl + '/assets/images/portfolio/portfolio-05.png'
                    },
                    {
                        id: 6, 
                        url: '#', 
                        logoImg: this.dirUrl + '/assets/images/portfolio/logo-06.png', 
                        img: this.dirUrl + '/assets/images/portfolio/portfolio-06.png'
                    }

                ]
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
