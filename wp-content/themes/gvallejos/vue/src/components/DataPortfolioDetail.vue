<template>
    <VPortfolioDetail :data=portfolio />
</template>

<script>

import VPortfolioDetail from './VPortfolioDetail.vue'

export default {
    data () {
        return {
            portfolio: {
                title: "GREEN TOURS" ,
                descripcion: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.", 
                cliente: "Green Tours",
                date: "June 2018",
                design: "Gian Vallejos",
                programming: "Gian Vallejos",                
                dataImg: [
                    { 
                        id: 1, 
                        name: "/images/tech/tech-01.png"
                    },
                    { 
                        id: 2, 
                        name: "/images/tech/tech-02.png"
                    },
                    { 
                        id: 3, 
                        name: "/images/tech/tech-03.png"
                    }
                ],
                imageList: [
                    {
                        id: 1,
                        name: "/images/portfolio/pd-01.png"
                    },
                    {
                        id: 2,
                        name: "/images/portfolio/pd-01.png"
                    }
                ]
            }
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