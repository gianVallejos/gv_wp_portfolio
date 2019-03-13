<template>
    <section class="portfolio-content">
        <article class="portfolio-item" v-for="item in items" :key=item.id >
            <a :href=item.link  >
                <div class="logotipo-container">
                    <img :src=item.acf.img_logotipo alt="Logotipo">
                </div>
                <div class="overlay"></div>
                <div class="logotipo-bg-img">
                    <img :src=item.acf.img_portada alt="Portfolio" />
                </div>
            </a>
        </article> 
    </section>
</template>

<script>
    export default {
        props: [
            'items'
        ]
    }
</script>

<style lang="stylus">
    .portfolio-content
        position: relative
        display: grid
        grid-template-columns: repeat(3, 1fr)
        flex-shrink: 1
        flex-wrap: wrap

    .portfolio-item
        position: relative
        width: 100%
        height: 565px
        box-sizing: border-box
        overflow: hidden
        z-index: 995

    .portfolio-item 
        a 
            .logotipo-bg-img 
                img
                    object-fit: cover
                    height: 100%
                    transition: .6s all ease
            &:hover
                .logotipo-bg-img
                    img
                        transform: scale(1.3)
                .overlay, .logotipo-container
                    opacity: 1
            .overlay
                display: flex
                position: absolute
                background: rgba(0, 0, 0, .4)
                top: 0
                left: 0
                width: 100%
                height: 100%
                opacity: 0
                z-index: 990
                transition: .6s all ease
            .logotipo-container
                display: flex
                position: absolute
                width: 100%
                height: 100%
                opacity: 0
                justify-content: center
                align-items: center
                z-index: 999
                transition: .6s all ease
                img
                    width: auto
                    height: 80px

    @media ( max-width: 1199px )
        .portfolio-item
            height: 320px
    
    @media ( max-width: 992px )
        .portfolio-item
            height: 250px

        .portfolio-item 
            a 
                .logotipo-container 
                    img
                        height: 58px
        

</style>

