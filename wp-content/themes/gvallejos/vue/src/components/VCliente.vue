<template>
    <section class="client">
        <h2>SOME OF OUR CLIENTS</h2>
        <p>We love our clients and we want the best for all them.</p>
        <div class="client-container">
            <div class="client-item" v-for="client in datos" :key=client.img_cliente >
                <img :src=client.img_cliente alt="Cliente">
            </div>                    
        </div>
    </section>
</template>

<script>
export default {
    props: [
        'datos'
    ]
}
</script>

<style lang="stylus">
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
</style>


