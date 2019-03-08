<template>
    <section class="about-content">
        <div class="about-data">
            <section class="about-section">
                <h2>{{ data.title }}</h2>
                <p>{{ data.descripcion }}</p>    
            </section>
            <section class="client">
                <h2>SOME OF OUR CLIENTS</h2>
                <p>We love our clients and we want the best for all them.</p>
                <div class="client-container">
                    <div class="client-item" v-for="client in data.clients" :key=client.id >
                        <img :src=client.img alt="Cliente">
                    </div>                    
                </div>
            </section>    
            <section class="testimonio">
                <h2>CLIENTS SAYS</h2>
                <div class="testimonio-content" v-for="testimonio in data.testimonios" :key=testimonio.id >
                    <div class="testomino-descripcion-container">
                        <div class="quote">
                            <img :src=data.quoteImg class="quote-img" alt="Quote sign">
                        </div>
                        <div class="testomino-descripcion">
                            <p>
                                {{ testimonio.content }}
                            </p>
                        </div>
                    </div>
                    <div class="testimonio-author">
                        <span>{{ testimonio.autor }}</span>
                    </div>
                </div>
                <div class="testimonio-img-container">
                    <a v-for="testimonio in data.testimonios" :key=testimonio.id href="#" class="testimonio-item active">
                        <img :src=testimonio.userImg alt="Testimonio">
                    </a>                    
                </div>
            </section>        
        </div>
        <div class="about-imagen">
            <div class="about-imagen-container">
                <img :src=data.aboutImg alt="About Us">
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: [
        'data'
    ]
}
</script>

<style lang="stylus">

    .about-content
        display: flex
        
    .about-data
        display: flex
        width: 50%
        justify-content: center
        align-items: center
        flex-direction: column
        padding: 95px 0px
        section
            width: 642px
        .about-section
            padding-bottom: 48px
            p
                padding: 16px 0px

    .about-imagen
        display: flex
        width: 50%
        min-height: 100%
        justify-content: center
        align-items: center

    .about-imagen-container
        width: 640px
        height: 850px

    .client 
        p
            padding-bottom: 22px

    .client-container
        display: flex
        justify-content: space-between
        flex-wrap: wrap
        flex-shrink: 1
        padding: 28px 0px
        .client-item
            min-height: 74px
            height: 74px
            min-width: 197px
            padding-bottom: 18px

    .testomino-descripcion-container
        display: flex
        min-height: 125px   
        .quote
            display: inherit
            align-items: center
            padding-right: 55px
            min-height: inherit
            .quote-img
                width: 220px

    .testomino-descripcion
        display: inherit
        align-items: flex-start
        min-height: inherit
    

    .testimonio-author
        text-align: right
        font-size: 1em
        padding: 15px 0px
        color: #546972
    

    .testimonio-img-container
        display: flex
        align-items: center
        a
            &.testimonio-item
                width: 38px
                height: 38px
                padding: 0px 10px
                &.active
                    width: 52px
                    height: 52px

</style>

