<template>
    <VAbout :data=data />
</template>

<script>

    import VAbout from './VAbout.vue'

    export default {
        data () { 
            return {
                data: {
                    title: "ABOUT US",
                    descripcion: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
                    clients: [
                        { 
                            id: 1, 
                            img: this.dirUrl + "/assets/images/clients/client-01.png"
                        },
                        { 
                            id: 2, 
                            img: this.dirUrl + "/assets/images/clients/client-02.png"
                        },
                        { 
                            id: 3, 
                            img: this.dirUrl + "/assets/images/clients/client-03.png"
                        },
                        { 
                            id: 4, 
                            img: this.dirUrl + "/assets/images/clients/client-04.png"
                        },
                        { 
                            id: 5, 
                            img: this.dirUrl + "/assets/images/clients/client-05.png"
                        },
                        { 
                            id: 6, 
                            img: this.dirUrl + "/assets/images/clients/client-06.png"
                        }
                    ],
                    quoteImg: this.dirUrl + "/assets/images/about/quote-sign.svg",
                    testimonios: [
                        {
                            id: 1,
                            content: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.",
                            autor: "HUGH JACKMAN, ACTOR",
                            userImg: this.dirUrl + "/assets/images/user.png"

                        }
                    ],
                    aboutImg: this.dirUrl + "/assets/images/about/about-img.jpg"
                }
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