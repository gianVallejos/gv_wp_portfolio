<template>
    <VBlog :posts = api_data />
</template>

<script>

    import VBlog from './VBlog.vue'
    import axios from 'axios'

    export default {
        mounted() {
            var _self = this
            axios.get('http://localhost/gv_wp_portfolio/wp-json/wp/v2/posts?_embed')
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
                posts: [
                    {
                        id: 1,
                        title: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
                        date: "5 Feb 2019",
                        autor: "Gian Vallejos",
                        categories: [
                            {
                                id: 1,
                                text: "Technology"
                            },
                            {
                                id: 2,
                                text: "Vue Js"
                            }
                        ],
                        img: this.dirUrl + "/assets/images/blog/blog-01.jpg"
                    },
                    {
                        id: 2,
                        title: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
                        date: "5 Feb 2019",
                        autor: "Gian Vallejos",
                        categories: [
                            {
                                id: 1,
                                text: "Technology"
                            },
                            {
                                id: 2,
                                text: "Vue Js"
                            }
                        ],
                        img: this.dirUrl + "/assets/images/blog/blog-02.jpg"
                    },
                    {
                        id: 3,
                        title: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
                        date: "5 Feb 2019",
                        autor: "Gian Vallejos",
                        categories: [
                            {
                                id: 1,
                                text: "Technology"
                            },
                            {
                                id: 2,
                                text: "Vue Js"
                            }
                        ],
                        img: this.dirUrl + "/assets/images/blog/blog-03.jpg"
                    },
                    {
                        id: 4,
                        title: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
                        date: "5 Feb 2019",
                        autor: "Gian Vallejos",
                        categories: [
                            {
                                id: 1,
                                text: "Technology"
                            },
                            {
                                id: 2,
                                text: "Vue Js"
                            }
                        ],
                        img: this.dirUrl + "/assets/images/blog/blog-04.jpg"
                    },
                    {
                        id: 5,
                        title: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
                        date: "5 Feb 2019",
                        autor: "Gian Vallejos",
                        categories: [
                            {
                                id: 1,
                                text: "Technology"
                            },
                            {
                                id: 2,
                                text: "Vue Js"
                            }
                        ],
                        img: this.dirUrl + "/assets/images/blog/blog-01.jpg"
                    },
                    {
                        id: 6,
                        title: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
                        date: "5 Feb 2019",
                        autor: "Gian Vallejos",
                        categories: [
                            {
                                id: 1,
                                text: "Technology"
                            },
                            {
                                id: 2,
                                text: "Vue Js"
                            }
                        ],
                        img: this.dirUrl + "/assets/images/blog/blog-02.jpg"
                    }
                ]
            }
        },
        components: {
            VBlog
        },
        props: [
            'dirUrl'
        ]
    }
</script>

