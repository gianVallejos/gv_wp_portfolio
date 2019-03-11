<template>
    <VBlogDetail :data=api_data :img_back_perfil=img_back_perfil :imgUserUrl=imgUserUrl />
</template>

<script>

import VBlogDetail from './VBlogDetail.vue'
import axios from 'axios'

export default {
    mounted() {
        var _self = this
        axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/posts/' + this.id + '?_embed')
            .then( response => {
                _self.api_data = response.data
            })
            .catch( e => {
                console.log('Error: ' + e)
            })

        axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/pages/' + this.id_page)
            .then( response => {
                _self.img_back_perfil = response.data.acf.img_back_perfil
            })
            .catch( e => {
                console.log('Error: ' + e)
            })
    },
    data () {
        return {
            id_page: 18,
            api_data: [],
            img_back_perfil: '',
            imgUserUrl: this.dirUrl + "/assets/images/user.png"
        }
    },
    components: {
        VBlogDetail
    },
    props: [
        'id',
        'dirUrl'
    ]
}
</script>

