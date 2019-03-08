<template>
    <section class="portfolio-detail-content">
        <div class="container">
            <div class="datos-proyecto">
                <div class="descripcion-layout">
                    <h2>{{ data.title }}</h2>
                    <p class="descripcion">{{ data.descripcion }}</p>                
                </div>
                <div class="tecnologias-layout">
                    <div class="tecnologias-cuadrado">
                        <div class="tecnologias-datos">
                            <div class="item">Cliente:</div><div class="item-content">{{ data.cliente }}</div>
                            <div class="item">Date:</div><div class="item-content">{{ data.date }}</div>
                            <div class="item">Design UI/UX:</div><div class="item-content">{{ data.design }}</div>
                            <div class="item">Programming:</div><div class="item-content">{{ data.programming }}</div>
                        </div>
                        <div class="tecnologias-imgs">
                            <div class="item">Technologies: </div>
                            <div class="item-img" v-for="item in data.dataImg" :key=item.id >
                                <img :src=item.name alt="Technology Imagen">
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="imagenes-proyecto">
                <div class="item-imagen-proyecto" v-for="item in data.imageList" :key=item.id>
                    <img :src=item.name alt="Portfolio" />
                </div>
            </div>
            <div class="related-proyecto">
                <div class="title">
                    <h2>RELATED PROJECTS</h2>
                </div>
                <a href="#">
                    <article class="related-pr-item">
                        <div class="logotipo-container">
                            <img src="/images/portfolio/logo-01.png" alt="Logotipo">
                        </div>
                        <div class="overlay"></div>
                        <div class="logotipo-bg-img">
                            <img src="/images/portfolio/portfolio-01.png" alt="Portfolio" />
                        </div>
                    </article>
                </a>
                <a href="#">
                    <article class="related-pr-item">
                        <div class="logotipo-container">
                            <img src="/images/portfolio/logo-02.png" alt="Logotipo">
                        </div>
                        <div class="overlay"></div>
                        <div class="logotipo-bg-img">
                            <img src="/images/portfolio/portfolio-02.png" alt="Portfolio" />
                        </div>
                    </article>
                </a>
                <a href="#">
                    <article class="related-pr-item">
                        <div class="logotipo-container">
                            <img src="/images/portfolio/logo-03.png" alt="Logotipo">
                        </div>
                        <div class="overlay"></div>
                        <div class="logotipo-bg-img">
                            <img src="/images/portfolio/portfolio-03.png" alt="Portfolio" />
                        </div>
                    </article>
                </a>
                <a href="#">
                    <article class="related-pr-item">
                        <div class="logotipo-container">
                            <img src="/images/portfolio/logo-04.png" alt="Logotipo">
                        </div>
                        <div class="overlay"></div>
                        <div class="logotipo-bg-img">
                            <img src="/images/portfolio/portfolio-04.png" alt="Portfolio" />
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    mounted() {
        console.log(this.data)
    },
    props: [
        'data'
    ]
}
</script>

<style lang="stylus">
    .portfolio-detail-content
        position: relative
        display: flex
        flex-shrink: 1
        flex-wrap: wrap
        justify-content: center
        align-items: center
        padding: 70px 0px
        .datos-proyecto
            display: flex
        .descripcion-layout, .tecnologias-layout,
        .tecnologias-datos, .tecnologias-imgs
            width: 50%
        .descripcion-layout, .tecnologias-layout
            margin: 20px
        .tecnologias-cuadrado
            display: flex
            background: #dfe8f0
            padding: 42px 40px
        .tecnologias-imgs 
            .item-img
                max-height: 62px
                overflow: hidden
                margin: 15px 0px
                img
                    width: initial
                    max-height: 100%
                    height: initial
                    object-fit: cover

        .datos-proyecto 
            .tecnologias-cuadrado 
                .item
                    font-weight: 600
                    padding: 5px 0px
                    color: #546972
                    font-size: .95rem
                .item-content
                    margin: 5px 0px;

        .imagenes-proyecto 
            .item-imagen-proyecto
            padding: 20px
            text-align: center
                img
                    max-width: 100%
                    width: initial
                    height: auto
                    object-fit: cover

        .related-proyecto
            display: grid
            grid-template-columns: repeat(4, 1fr)
            grid-template-rows: auto 1fr
            grid-column-gap: 30px
            padding: 40px 20px
            box-sizing: border-box
            .title
                grid-column-start: 1
                grid-column-end: 5
            .related-pr-item
                position: relative
                display: flex
                justify-content: center
                align-items: center
                overflow: hidden
            a 
                .related-pr-item 
                    .logotipo-container
                        position: absolute
                        z-index: 2
                        opacity: 0
                        transition: .8s all ease
                    .overlay
                        position: absolute
                        opacity: 0
                        width: 100%
                        height: 100%
                        background: rgba(0, 0, 0, .4)
                        top: 0
                        left: 0
                        transition: .8s all ease
                &:hover 
                    .related-pr-item 
                        .logotipo-container
                            opacity: 1
                        .overlay
                            opacity: 1
                    .logotipo-bg-img 
                        img
                            transform: scale(1.3)
                .logotipo-bg-img 
                    img
                        transition: .6s all ease
</style>
