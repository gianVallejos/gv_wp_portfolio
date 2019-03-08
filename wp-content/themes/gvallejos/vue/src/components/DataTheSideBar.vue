<template>
    <TheSideBar :imageUrl = urlLogotipo :itemsNav = navegation :rsList = redesSociales :navActive = navActive :url = url />
</template>

<script>

import TheSideBar from './TheSideBar.vue'

export default {
    created() {
        this.getSelectedUrl()
    },
    data () {
        return {
            urlLogotipo: this.dirUrl + '/assets/images/logotipo.png',
            navegation: [
                {
                    id: 1,
                    url: "/portafolio",
                    name: "Portfolio",
                    activeName: "portfolio",
                },
                {
                    id: 2,
                    url: "/nosotros",
                    name: "About Us",
                    activeName: "about",
                },
                {
                    id: 3,
                    url: "/blog",
                    name: "Blog",
                    activeName: "blog",
                },
                {
                    id: 4,
                    url: "/contacto",
                    name: "Contact Us",
                    activeName: "contact",
                }
            ],
            redesSociales: [
                {
                    id: 1,
                    className: "fab fa-instagram",
                    url: "#"
                },
                {
                    id: 2,
                    className: "fab fa-github",
                    url: "#"
                },
                {
                    id: 3,
                    className: "fab fa-facebook",
                    url: "#"
                },
                {
                    id: 4,
                    className: "fab fa-twitter",
                    url: "#"
                }
            ],
            navActive: ''
        }
    },
    methods: {
        getSelectedUrl () {
            if( this.curUrl.includes('nosotros') ){
                this.navActive = 'about'
            }else if( this.curUrl.includes('blog') ){
                this.navActive = 'blog'
            }else if( this.curUrl.includes('contacto') ){
                this.navActive = 'contact'
            }else {
                this.navActive = 'portfolio'
            }
        }
    },
    components: {
        TheSideBar
    },
    props: [
        'url',
        'curUrl',
        'dirUrl'
    ]
}
</script>

